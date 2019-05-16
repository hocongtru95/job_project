<?php

namespace Modules\Frontend\Repositories\Category;

use Modules\Frontend\Repositories\Category\CategoryRepositoryInterface;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "Modules\\Frontend\\Entities\\CategoryJobs";
    }

    public function jobsBelongsToCategory($cat_id)
    {
        return $category = $this->model::find($cat_id)->jobs()->where('job_review', 1)->get();
    }

    public function getCateByView()
    {
        return $this->orderBy('id', 'DESC')
            ->findWhere(['cat_review' => 1]);
    }

}