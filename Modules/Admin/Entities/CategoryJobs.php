<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryJobs extends Model
{
    protected $fillable = [
        'cat_title',
        'cat_slug',
        'cat_review',
        'cat_description',
        'cat_image'
    ];
    protected $table = 'tbl_job_category';

    public function job()
    {
        return $this->belongsToMany(
            'Modules\Admin\Entities\Jobs',
            'tbl_cate_to_jobs',
            'cat_id',
            'job_id'
        );
    }
}
