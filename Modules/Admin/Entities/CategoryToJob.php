<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryToJob extends Model
{
    protected $fillable = [
        'cat_id',
        'job_id'
    ];

    protected $table = 'tbl_cate_to_jobs';

    public $timestamps = false;
}