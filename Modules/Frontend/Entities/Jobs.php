<?php

namespace Modules\Frontend\Entities;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = [
        'job_title',
        'job_slug',
        'job_company_name',
        'job_image',
        'job_expiration',
        'job_description',
        'job_company_description',
        'job_level',
        'job_salary',
        'job_working_form',
        'job_amount',
        'job_position',
        'job_experence',
        'job_work_local',
        'category_id',
        'job_review'
    ];

    protected $table = 'tbl_jobs';

    public function CategoryJobs()
    {
        return $this->belongsToMany(
            'Modules\Frontend\Entities\CategoryJobs',
            'tbl_cate_to_jobs',
            'job_id',
            'cat_id'
        );
    }
}
