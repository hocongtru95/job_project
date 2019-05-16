@extends('admin::layouts.master')

@section('title', 'Danh mục việc làm')

@section('search_header')
    <form class="navbar-left navbar-form nav-search mr-md-3 search_category_jobs" action="">
        <div class="input-group">
            <input type="text" placeholder="Search ..." class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="la la-search search-icon"></i>
                </span>
            </div>
        </div>
    </form>
@endsection

@section('content')
    <div class="row">
        <div class="card w_100">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('category_jobs_add') }}" class="btn btn-success color-white">Thêm mới</a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-sub">

                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="10%">#</th>
                        <th scope="col" width="60%">Tiêu đề</th>
                        <th scope="col" width="15%">Ảnh</th>
                        <th scope="col" width="15%">Duyệt</th>
                        <th scope="col" width="10%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($lists as $item)
                        @php
                            $i++;
                        @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td><a href="">{{ $item->cat_title }}</a></td>
                            <td><img src="{{ asset('storage/app/'.$item->cat_image) }}" alt=""></td>
                            <td>
                                <label class="form-check-label " >
                                    <input class="form-check-input" <?=$item->cat_review==1?'checked':''?> type="checkbox" value="6">
                                    <span class="form-check-sign list_check_view" data-url="{{ route('check_cat_job_view') }}" data-id="{{ $item->id }}">Hiển thị</span>
                                </label>
                            </td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{ route('category_jobs_edit', ['id' => $item->id]) }}">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link <btn-simple-primary" data-original-title="Edit Task">
                                            <i class="la la-edit"></i>
                                        </button>
                                    </a>
                                    <a href="{{ route('category_jobs_delete', ['id' => $item->id]) }}" onclick="return alert('Bạn có chắc chắn muốn xóa!')">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger" data-original-title="Remove">
                                            <i class="la la-times"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="text-center">
                    {{ $lists->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection