<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Frontend\Repositories\Category\CategoryRepositoryInterface;
use Modules\Frontend\Repositories\Job\JobRepositoryInterface;

class JobController extends Controller
{
    protected $jobRepository;
    protected $categoryRepository;

    public function __construct(
        JobRepositoryInterface $jobRepository,
        CategoryRepositoryInterface $categoryRepository
    )
    {
        $this->jobRepository = $jobRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function showDetailJobs($slug)
    {
        $item = $this->jobRepository->where(['job_slug' => $slug, 'job_review' => 1])->first();

        if ($item) {
            $currentCategory = $this->categoryRepository->find($item->category_id);
            $relateItemsList = $this->categoryRepository->jobsBelongsToCategory($currentCategory->id);
            $listCategory = $this->jobRepository->categoryBeLongsToJob($item->id);

            $breadCrumbs = $this->makeBreadCrumbs('home', $currentCategory, $item);

            $viewData = [
                'item' => $item,
                'currentCategory' => $currentCategory,
                'relateItemsList' => $relateItemsList,
                'listCategory' => $listCategory,
                'breadCrumbs' => $breadCrumbs,
            ];

            return view('frontend::jobs.job_detail', $viewData);
        }
        return redirect()->route('home')->with('errorMsg', 'Đường dẫn URL không tồn tại');

    }

    public function showListsItemBySlug($slug)
    {
        $cateCurrent = $this->categoryRepository->findByField('cat_slug', $slug)->first();
        $lists = $this->categoryRepository->jobsBelongsToCategory($cateCurrent->id);

        $viewData = [
            'cateCurrent' => $cateCurrent,
            'lists' => $lists
        ];
        return view('frontend::jobs.job_category', $viewData);
    }

    public function getItemByCategory($cat_id)
    {
        return $this->jobRepository->findWhere(['category_id' => $cat_id, 'job_review' => 1]);
    }

    public function getItemByCategoryExceptCurrentItem($cat_id, $exceptId)
    {
        $filter = ['id', '<>', $exceptId];

        return $this->jobRepository->findWhere(['id' => $filter, 'category_id' => $cat_id, 'job_review' => 1]);
    }

    public function makeBreadCrumbs(string $home, $cate, $post)
    {
        $breadcrumbs = '';
        $breadcrumbs .= '<li class="breadcrumb_item"><a href="'.route($home).'">Home</a></li>';
        $breadcrumbs .= '<li class="breadcrumb_item"><a href="'.url('jobs-category/'.$cate->cat_slug).'">'.$cate->cat_title.'</a></li>';
        $breadcrumbs .= '<li class="breadcrumb_item"><a href="'.url('jobs/'.$post->job_slug).'">'.$post->job_title.'</a></li>';

        return $breadcrumbs;
    }
}
