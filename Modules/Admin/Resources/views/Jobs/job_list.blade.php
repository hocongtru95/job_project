@extends('admin::layouts.master')
@section('title', 'Danh sách việc làm')

@section('search_header')
    <form class="navbar-left navbar-form nav-search mr-md-3 search_jobs" action="{{ route('search_jobs') }}" method="post">
        <div class="input-group">
            <input type="text" name="keyword" placeholder="Search ..." class="form-control">
            <div class="input-group-append">
                <button type="submit" class="input-group-text">
                    <i class="la la-search search-icon"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('content')
    <div class="row">
        <div class="card w_100">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('jobs_add') }}" class="btn btn-success color-white">Thêm mới</a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-sub d-none">

                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="10%">Logo</th>
                        <th scope="col" width="20%">Tiêu đề</th>
                        <th scope="col" width="20%">Danh mục nghành nghề</th>
                        <th scope="col" width="10%">Người đăng</th>
                        <th scope="col" width="10%">Duyệt</th>
                        <th scope="col" width="5%">Action</th>
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
                        <td class="text-center"><img src="{{ asset('storage/app/'.$item->job_image) }}" width="80" height="80" alt="" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';"></td>
                        <td><a href="{{ route('jobs_edit', ['id' => $item->id]) }}">{{ $item->job_title }}</a></td>
                        <td>{{ $item->cate->cat_title }}</td>
                        <td>{{ $item->author['name'] }}</td>
                        <td>
                            <label class="form-check-label " >
                                <input class="form-check-input" {{ $item->job_review==1?'checked':'' }} type="checkbox" value="6">
                                <span class="form-check-sign list_check_view" data-url="{{ route('check_view') }}" data-id="{{ $item->id }}">Hiển thị</span>
                            </label>
                        </td>
                        <td>
                            <div class="form-button-action">
                                <a href="{{ route('jobs_edit', ['id' => $item->id]) }}">
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link <btn-simple-primary" data-original-title="Edit Task">
                                        <i class="la la-edit"></i>
                                    </button>
                                </a>
                                <a href="{{ route('jobs_delete', ['id' => $item->id]) }}" onclick="return alert('Bạn có chắc chắn muốn xóa!')">
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