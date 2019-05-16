<?php

namespace Modules\Admin\Repositories\Job;

use Prettus\Repository\Eloquent\BaseRepository;

class JobRepository extends BaseRepository implements JobRepositoryInterface {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "Modules\\Admin\\Entities\\Jobs";
    }

    public function categoryBelongsTo($id)
    {
        return $this->model::find($id)->category()->pluck('cat_id')->toArray();
    }

    public function getListJob($per_page)
    {
        return $this->orderBy('id', 'desc')->paginate($per_page);
    }

}