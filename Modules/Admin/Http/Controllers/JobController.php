<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Modules\Admin\Http\Requests\JobsRequest;
use Modules\Admin\Repositories\Category\CategoryRepositoryInterface;
use Modules\Admin\Repositories\CategoryToJob\CategoryToJobRepositoryInterface;
use Modules\Admin\Repositories\Job\JobRepositoryInterface;

class JobController extends Controller
{

    protected $jobRepository;
    protected $categoryRepository;
    protected $categoryToJobRepository;

    public function __construct(
        JobRepositoryInterface $jobRepository,
        CategoryRepositoryInterface $categoryRepository,
        CategoryToJobRepositoryInterface $categoryToJobRepository
    )
    {
        $this->jobRepository = $jobRepository;
        $this->categoryRepository = $categoryRepository;
        $this->categoryToJobRepository = $categoryToJobRepository;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $lists = $this->jobRepository->getListJob(20);
        foreach ($lists as $key => $item) {
            $lists[$key]->cate = $this->categoryRepository->find($item->category_id);
            $lists[$key]->author = $this->getAuthor($item->user_id);
        }

        return view('admin::jobs.job_list', compact('lists'));
    }

    public function checkView(Request $request)
    {
        $item = $this->jobRepository->find($request->id);
        $status = $item->job_review==0 ? 1 : 0;
        $this->jobRepository->update(['job_review' => $status], $request->id);
    }

    public function getAuthor($id)
    {
        return User::find($id);
    }

    public function checkTitle($title)
    {
        $result = $this->jobRepository->findByField('job_title', $title);
        if (count($result) > 0) {
            return true;
        }
        else {
            return false;
        }
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $type_submit = 'Thêm mới';
        $listCategory = $this->categoryRepository->all();
        $viewData = [
            'listCategory' => $listCategory,
            'type_submit'   => $type_submit
        ];
        return view('admin::jobs.job_add', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(JobsRequest $request)
    {
        $data = [
            'job_title' => $request->job_title,
            'job_slug'  => Str::slug($request->job_title),
            'job_company_name' => $request->job_company_name,
            'job_expiration' => $request->job_expiration,
            'job_description' => $request->job_description,
            'job_detail' => $request->job_detail,
            'job_company_description' => $request->job_company_description,
            'job_level' => $request->job_level,
            'job_salary' => $request->job_salary,
            'job_working_form' => $request->job_working_form,
            'job_amount' => $request->job_amount,
            'job_position' => $request->job_position,
            'job_experence' => $request->job_experence,
            'job_work_local' => $request->job_work_local,
            'user_id'       => auth()->user()->id,
        ];

        if ($request->edit == 'Cập nhật') {
            $jobs = $this->jobRepository->find($request->id);

            if (Gate::allows('update-post', $jobs)) {
                $result = $this->jobRepository->update($data, $request->id);
            } else {
                return redirect()->back()->withInput()->with(
                    'errorMsg', 'Bạn không có quyền chỉnh sửa bài viết này'
                );
            }
        }
        else {
            $result = $this->jobRepository->create($data);
        }

        if ($result) {

            if ($request->job_image != null) {
                $path = $request->file('job_image')->store('jobs');
                $this->jobRepository->update(['job_image' => $path], $result->id);
            }

            if (count($request->category) > 0) {
                $arr_cate = [];
                foreach ($request->category as $cate) {
                    $arr_cate[] = ['cat_id' => $cate, 'job_id' => $result->id];
                }

                $this->categoryToJobRepository->deleteWhere(['job_id' => $result->id]);
                $this->categoryToJobRepository->createMulti($arr_cate);

                $this->jobRepository->update(['category_id' => $cate], $result->id);
            }

            return redirect()->route('jobs_list')->with(
                'successMsg', 'Bạn đã '.$request->edit.' tin mới thành công!'
            );
        }
        else {
            return redirect()->back()->withInput()->with(
                'errorMsg', 'Tin chưa được thêm, vui lòng kiểm tra và thử lại!'
            );
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $typeSubmit = 'Cập nhật';
        $item = $this->jobRepository->find($id);
        $item['author'] = $this->getAuthor($item->user_id);
        $listCategory = $this->categoryRepository->all();
        $listCategoryBeLongTo = $this->jobRepository->categoryBelongsTo($item->id);

        $viewData = [
            'listCategory' => $listCategory,
            'listCategoryBeLongTo' => $listCategoryBeLongTo,
            'item' => $item,
            'typeSubmit' => $typeSubmit
        ];
        return view('admin::jobs.job_edit', $viewData);
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $jobs = $this->jobRepository->find($id);

        if (Gate::allows('delete-post', $jobs)) {
            $this->jobRepository->delete($id);
            return redirect()->route('jobs_list')->with('successMsg', 'Bạn đã xóa bài viết thành công!');
        } else {
            return redirect()->back()->with('errorMsg', 'Bạn không có quyền xóa bài viết này');
        }
    }

}
