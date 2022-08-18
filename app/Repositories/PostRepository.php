<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\PostContract;

class PostRepository extends BaseRepository implements PostContract {

    protected $model;

    public function __construct(Post $model) {
        $this->model = $model;
    }

}
