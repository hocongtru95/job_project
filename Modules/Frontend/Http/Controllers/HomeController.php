<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Frontend\Repositories\Category\CategoryRepositoryInterface;
use Modules\Frontend\Repositories\Job\JobRepositoryInterface;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    protected $categoryRepository;
    protected $jobRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        JobRepositoryInterface $jobRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->jobRepository = $jobRepository;
    }

    public function home()
    {
        $categoryFocus = $this->categoryRepository->getCateByView();
        foreach ($categoryFocus as $key => $value) {
            $categoryFocus[$key]->coutItem = count($this->categoryRepository->jobsBelongsToCategory($value->id));
        }

        $jobsNeedApply = $this->jobRepository->getJobsByView();

        $viewData = [
            'categoryFocus' => $categoryFocus,
            'jobsNeedApply' => $jobsNeedApply
        ];

        return view('frontend::home', $viewData);
    }

}
