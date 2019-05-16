<?php

namespace Modules\Admin\Repositories\CategoryToJob;

use Prettus\Repository\Eloquent\BaseRepository;

class CategoryToJobRepository extends BaseRepository implements CategoryToJobRepositoryInterface {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "Modules\\Admin\\Entities\\CategoryToJob";
    }

    public function createMulti($attribute) {
        $this->model->insert($attribute);
    }

}