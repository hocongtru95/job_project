<?php

namespace Modules\Admin\Repositories\Category;

use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "Modules\\Admin\\Entities\\CategoryJobs";
    }

    public function getListCategory($per_page)
    {
        return $this->orderBy('id', 'DESC')->paginate($per_page);
    }
}