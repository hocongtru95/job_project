<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Frontend\Repositories\JobRepository;

class SearchJobsController extends Controller
{

    protected $repository;

    public function __construct(JobRepository $repository)
    {
        $this->repository = $repository;
    }

    public function searchShowResult(Request $request) {
        $filterByTitle = ['job_title', 'like', '%'.$request->q.'%'];
        $filterByCompanyName = ['job_company_name', 'like', '%'.$request->q.'%'];

        $result = $this->repository->where(['job_title' => $filterByTitle])->paginate(10);
        if (count($result) <= 0) {
            $result = $this->repository->where(['job_company_name' => $filterByCompanyName])->paginate(10);
        }

        $viewData = [
            'result' => $result,
            'key_word' => $request->q,
        ];
        return view('frontend::search.search', $viewData);
    }
}
