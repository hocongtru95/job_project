<?php

namespace Modules\Frontend\Repositories\Job;

use Modules\Frontend\Repositories\Job\JobRepositoryInterface;
use Prettus\Repository\Eloquent\BaseRepository;

class JobRepository extends BaseRepository implements JobRepositoryInterface {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "Modules\\Frontend\\Entities\\Jobs";
    }

    public function categoryBeLongsToJob($job_id)
    {
        return $this->model::find($job_id)->CategoryJobs;
    }

    public function where(array $where, $columns = ['*'])
    {
        $this->applyConditions($where);
        return $this;
    }

    public function getJobsByView()
    {
        return $this->orderBy('id', 'DESC')->findWhere(['job_review' => 1]);
    }
}