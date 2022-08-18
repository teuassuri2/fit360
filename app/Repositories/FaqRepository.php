<?php

namespace App\Repositories;

use App\Models\Faq;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\FaqContract;

class FaqRepository extends BaseRepository implements FaqContract {

    protected $model;

    public function __construct(Faq $model) {
        $this->model = $model;
    }

}
