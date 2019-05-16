<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Admin\Repositories\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->categoryRepository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $lists = $this->categoryRepository->getListCategory(20);
        return view('admin::Category.category_list', compact('lists'));
    }

    public function checkView(Request $request)
    {
        $item = $this->categoryRepository->find($request->id);
        $status = $item->cat_review==0 ? 1 : 0;
        $this->categoryRepository->update(['cat_review' => $status], $request->id);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::Category.category_add');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = [
            'cat_title' => $request->cat_title,
            'cat_slug'  => Str::slug($request->cat_title),
            'cat_description' => $request->cat_description
        ];
        $result = $this->categoryRepository->create($data);
        if ($result) {
            if ($request->cat_image != null) {
                $path = $request->file('cat_image')->store('category_jobs');
                $this->categoryRepository->update(['cat_image' => $path], $result->id);
            }
            return redirect()->route('category_jobs_list')->with(
                'successMsg', 'Bạn đã thêm danh mục nghành nghề thành công');
        }
        else {
            return redirect()->back()->withInput()->with(
                'errorMsg', 'Thêm danh mục không thành công, vui lòng kiểm tra và thử lại!');
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
        $item = $this->categoryRepository->find($id);
        return view('admin::Category.category_edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'cat_title' => $request->cat_title,
            'cat_slug'  => Str::slug($request->cat_title),
            'cat_description' => $request->cat_description
        ];
        $result = $this->categoryRepository->update($data, $id);
        if ($result) {
            if ($request->cat_image != null) {
                $path = $request->file('cat_image')->store('category_jobs');
                $this->categoryRepository->update(['cat_image' => $path], $result->id);
            }
            return redirect()->route('category_jobs_list')->with(
                'successMsg', 'Bạn đã cập nhật danh mục nghành nghề thành công');
        }
        else {
            return redirect()->back()->withInput()->with(
                'errorMsg', 'Cập nhật danh mục không thành công, vui lòng kiểm tra và thử lại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->categoryRepository->delete($id);
        return redirect()->route('category_jobs_list')->with('successMsg', 'Bạn đã xóa danh mục thành công');
    }

}
