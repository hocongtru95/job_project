<?php
namespace Modules\Frontend\Repositories\Job;

interface JobRepositoryInterface {

    public function categoryBeLongsToJob($job_id);

    public function where(array $where, $columns = ['*']);

    public function getJobsByView();

}