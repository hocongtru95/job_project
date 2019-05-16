<?php

namespace Modules\Frontend\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryJobs extends Model
{
    protected $fillable = [
        'cat_title',
        'cat_slug',
        'cat_review',
        'cat_description'
    ];
    protected $table = 'tbl_job_category';

    public function jobs()
    {
        return $this->belongsToMany(
            'Modules\Frontend\Entities\Jobs',
            'tbl_cate_to_jobs',
            'cat_id',
            'job_id'
        );
    }
}
