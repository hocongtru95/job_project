<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'job_title.required' => 'Trường tiêu đề không được để trống',
            'job_title.unique' => 'Tiêu đề đã tồn tại, vui lòng nhập tiêu đề khác',
            'job_company_name.required' => 'Trường tên công ty không được để trống',
            'job_expiration.required' => 'Trường kinh nghiệm không được để trống',
            'job_description.required' => 'Trường mô tả ngắn không được để trống',
            'job_detail.required' => 'Trường mô tả công việc không được để trống',
            'job_level.required' => 'Trường trình độ không được để trống',
            'job_salary.required' => 'Trường mức lương không được để trống',
            'job_amount.required' => 'Trường số lượng không được để trống',
            'job_position.required' => 'Trường vị trí không được để trống',
            'job_experence.required' => 'Trường kinh nghiệm không được để trống',
            'job_work_local.required' => 'Trường nơi làm việc không được để trống',
            'category.required' => 'Bạn chưa chọn nghành nghề'
        ];
    }

    public function rules()
    {
        return [
            'job_title' => 'required|unique:tbl_jobs,job_title,'.$this->id,
            'job_company_name' => 'required',
            'job_expiration' => 'required',
            'job_description' => 'required',
            'job_detail' => 'required',
            'job_level' => 'required',
            'job_salary' => 'required',
            'job_amount' => 'required',
            'job_position' => 'required',
            'job_experence' => 'required',
            'job_work_local' => 'required',
            'category' => 'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
