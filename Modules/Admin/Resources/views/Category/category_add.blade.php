@extends('admin::layouts.master')
@section('title', 'Thêm mới danh mục nghành nghề')

@section('content')
    <form method="post" action="{{ route('category_jobs_store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Thêm mới</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="job_title">Tiều đề</label>
                            <input type="text" name="cat_title" class="form-control" id="title" placeholder="Tiêu đề">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="cat_image">Upload file ảnh</label>
                            <input type="file" name="cat_image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="cat_description">Mô tả nghành nghề</label>
                            <textarea class="form-control" name="cat_description" id="" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('category_jobs_list') }}" class="btn btn-danger color-white">Cancel</a>
                    </div>
                </div>
            </div>


        </div>
    </form>
@endsection