<?php

namespace App\Repositories;

use App\Models\Mural;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\MuralContract;

class MuralRepository extends BaseRepository implements MuralContract {

    protected $model;

    public function __construct(Mural $model) {
        $this->model = $model;
    }

}
