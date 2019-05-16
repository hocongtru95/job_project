
<form method="post" action="{{ route('jobs_store') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="edit" value="{{ @$typeSubmit }}">
    <input type="hidden" name="id" value="{{ @$item->id }}">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">

                    <div class="card-title">{{ @$typeSubmit }}</div>
                    @if (@$typeSubmit == 'Cập nhật')
                        <p>Người đăng: {{ $item->author['name'] }}</p>
                    @endif
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="job_title">Tiều đề</label>
                        <input type="text" name="job_title" value="{{ old('job_title',isset($item->job_title) ? $item->job_title : '') }}"
                               class="form-control {{ $errors->has('job_title') ? ' is-invalid' : '' }}" id="title" placeholder="Tiêu đề">
                        @if ($errors->has('job_title'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_title') }}</small>
                        @endif
                        @if ($errors->has('errorMsg'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('errorMsg') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="job_company_name">Tên công ty</label>
                        <input type="text" name="job_company_name" value="{{ old('job_company_name',isset($item->job_company_name) ? $item->job_company_name : '') }}"
                               class="form-control {{ $errors->has('job_company_name') ? ' is-invalid' : '' }}" id="company_name" placeholder="123job, VPN, ...">
                        @if ($errors->has('job_company_name'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_company_name') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="job_image">Upload logo công ty</label>
                        <input type="file" name="job_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="job_expiration">Thời hạn nộp hồ sơ</label>
                        <input type="text" name="job_expiration" value="{{ old('job_expiration',isset($item->job_expiration) ? $item->job_expiration : '') }}"
                               class="form-control {{ $errors->has('job_expiration') ? ' is-invalid' : '' }}" placeholder="31/12 ...">
                        @if ($errors->has('job_expiration'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_expiration') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="job_description">Mô tả ngắn</label>
                        <textarea class="form-control {{ $errors->has('job_expiration') ? ' is-invalid' : '' }}"
                                  name="job_description" id="job_description" rows="5">{{ old('job_description',isset($item->job_description) ? $item->job_description : '') }}</textarea>
                        @if ($errors->has('job_description'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_description') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="job_detail">Mô tả công việc</label>
                        <textarea class="form-control {{ $errors->has('job_detail') ? ' is-invalid' : '' }}"
                                  name="job_detail" id="job_detail" rows="5">{{ old('job_detail',isset($item->job_detail) ? $item->job_detail : '') }}</textarea>
                        @if ($errors->has('job_detail'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_detail') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="job_company_description">Mô tả công ty</label>
                        <textarea id="job_company_description" class="form-control {{ $errors->has('job_company_description') ? ' is-invalid' : '' }}" name="job_company_description" id="" rows="5">{{ old('job_company_description',isset($item->job_company_description) ? $item->job_company_description : '') }}</textarea>
                        @if ($errors->has('job_company_description'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_company_description') }}</small>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_level">Trình độ</label>
                                <select class="form-control" name="job_level" id="">
                                    <option {{ @$item->job_level=='Phổ thông'?'selected':'' }} value="Phổ thông">Phổ thông</option>
                                    <option {{ @$item->job_level=='Trung cấp'?'selected':'' }} value="Trung cấp">Trung cấp</option>
                                    <option {{ @$item->job_level=='Cao đẳng'?'selected':'' }} value="Cao đẳng">Cao đẳng</option>
                                    <option {{ @$item->job_level=='Đại học'?'selected':'' }} value="Đại học">Đại học</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_salary">Mức lương</label>
                                <input type="text" name="job_salary" value="{{ old('job_salary',isset($item->job_salary) ? $item->job_salary : '') }}"
                                       class="form-control {{ $errors->has('job_salary') ? ' is-invalid' : '' }}" placeholder="Từ 5 - 10 triệu ...">
                                @if ($errors->has('job_salary'))
                                    <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_salary') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_working_form">Hình thức làm việc</label>
                                <select class="form-control" name="job_working_form" id="">
                                    <option {{ @$item->job_form_working==1?'selected':'' }} value="1">Toàn thời gian</option>
                                    <option {{ @$item->job_form_working==0?'selected':'' }} value="0">Bán thời gian</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_amount">Số lượng tuyển</label>
                                <input type="text" name="job_amount" value="{{ old('job_amount',isset($item->job_amount) ? $item->job_amount : '') }}"
                                       class="form-control {{ $errors->has('job_amount') ? ' is-invalid' : '' }}" placeholder="10 người ...">
                                @if ($errors->has('job_amount'))
                                    <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_amount') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_position">Vị trí</label>
                                <input type="text" name="job_position" value="{{ old('job_position',isset($item->job_position) ? $item->job_position : '') }}"
                                       class="form-control {{ $errors->has('job_position') ? ' is-invalid' : '' }}" placeholder="Nhân viên, trưởng nhớm, ...">
                                @if ($errors->has('job_position'))
                                    <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_position') }}</small>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_experence">Kinh nghiệm yêu cầu</label>
                                <input type="text" name="job_experence" value="{{ old('job_experence',isset($item->job_experence) ? $item->job_experence : '') }}"
                                       class="form-control {{ $errors->has('job_experence') ? ' is-invalid' : '' }}" placeholder="1 năm, 2 năm ...">
                                @if ($errors->has('job_experence'))
                                    <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_experence') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="job_work_local">Nơi làm việc</label>
                        <input type="text" name="job_work_local" value="{{ old('job_work_local',isset($item->job_work_local) ? $item->job_work_local : '') }}"
                               class="form-control {{ $errors->has('job_work_local') ? ' is-invalid' : '' }}" placeholder="Hà Nội, TP Hồ Chí Minh, ...">
                        @if ($errors->has('job_work_local'))
                            <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('job_work_local') }}</small>
                        @endif
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
                        <label for="category_id">Danh mục</label>
                        <div class="form-check category_box">
                            @foreach ($listCategory as $cat_item)
                                <label class="form-check-label">
                                    <input class="form-check-input" name="category[]" {{ @in_array($cat_item->id,$listCategoryBeLongTo) ? "checked='checked'" : ""  }} type="checkbox" value="{{ $cat_item->id }}">
                                    <span class="form-check-sign">{{ $cat_item->cat_title }}</span>
                                </label>
                            @endforeach
                            @if ($errors->has('category'))
                                <small id="emailHelp" class="form-text text-muted error-text">{{ $errors->first('category') }}</small>
                            @endif
                        </div>
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
<style>
    .error-text {
        color: red !important;
    }
</style>