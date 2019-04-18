@extends('admin::layouts.master')
@section('title', 'Danh sách bài đăng')

@section('content')
    <div class="row">
        <div class="card w_100">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('jobs_add') }}" class="btn btn-success color-white">Thêm mới</a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-sub">

                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="10%">Logo</th>
                        <th scope="col" width="20%">Tiêu đề</th>
                        <th scope="col" width="20%">Danh mục nghành nghề</th>
                        <th scope="col" width="10%">Công ty</th>
                        <th scope="col" width="10%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <div class="form-button-action">
                                <a href="{{ route('jobs_edit') }}">
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link <btn-simple-primary" data-original-title="Edit Task">
                                        <i class="la la-edit"></i>
                                    </button>
                                </a>

                                <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger" data-original-title="Remove">
                                    <i class="la la-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection