<?php
namespace Modules\Admin\Repositories\Job;

interface JobRepositoryInterface {
    public function categoryBelongsTo($id);

    public function getListJob($per_page);
}