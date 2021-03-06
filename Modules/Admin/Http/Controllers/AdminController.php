<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Repositories\JobRepository;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */


    public function __construct () {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin::index');
    }

}
