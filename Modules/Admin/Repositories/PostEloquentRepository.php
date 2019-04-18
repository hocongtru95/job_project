<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;

class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Post::class;
    }

    public function getPostHost()
    {
        // TODO: Implement getPostHost() method.
    }
}