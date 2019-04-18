@extends('admin::layouts.master')
@section('title', 'Cập nhật bài đăng')

@section('content')
    <form method="post" action="{{ route('jobs_store') }}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Cập nhật</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="job_title">Tiều đề</label>
                            <input type="text" name="job_title" class="form-control" id="title" placeholder="Tiêu đề">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="job_company_name">Tên công ty</label>
                            <input type="text" name="job_company_name" class="form-control" id="company_name" placeholder="123job, VPN, ...">
                        </div>
                        <div class="form-group">
                            <label for="job_image">Upload logo công ty</label>
                            <input type="file" name="job_image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="job_expiration">Thời hạn nộp hồ sơ</label>
                            <input type="text" name="job_expiration" class="form-control" placeholder="31/12 ...">
                        </div>

                        <div class="form-group">
                            <label for="job_description">Mô tả công việc</label>
                            <textarea class="form-control" name="job_description" id="" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="job_company_description">Mô tả công ty</label>
                            <textarea class="form-control" name="job_company_description" id="" rows="5"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_level">Trình độ</label>
                                    <select class="form-control" name="job_level" id="">
                                        <option>Phổ thông</option>
                                        <option>Trung cấp</option>
                                        <option>Cao đẳng</option>
                                        <option>Đại học</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_salary">Mức lương</label>
                                    <input type="text" name="job_salary" class="form-control" placeholder="Từ 5 - 10 triệu ...">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_working_form">Hình thức làm việc</label>
                                    <select class="form-control" name="job_working_form" id="">
                                        <option>Toàn thời gian</option>
                                        <option>Bán thời gian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_amount">Số lượng tuyển</label>
                                    <input type="text" name="job_amount" class="form-control" placeholder="10 người ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_position">Vị trí</label>
                                    <input type="text" name="job_position" class="form-control" placeholder="Nhân viên, trưởng nhớm, ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_experence">Kinh nghiệm yêu cầu</label>
                                    <input type="text" name="job_experence" class="form-control" placeholder="1 năm, 2 năm ...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_work_local">Nơi làm việc</label>
                            <input type="text" name="job_work_local" class="form-control" placeholder="Hà Nội, TP Hồ Chí Minh, ...">
                        </div>


                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('jobs_list') }}" class="btn btn-danger color-white">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tùy chọn</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id">Example select</label>
                            <select class="form-control" name="category_id" id="">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('jobs_list') }}" class="btn btn-danger color-white">Cancel</a>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection