<?php

namespace App\Repositories;

use App\Models\Desafio;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\DesafioContract;

class DesafioRepository extends BaseRepository implements DesafioContract {

    protected $model;

    public function __construct(Desafio $model) {
        $this->model = $model;
    }

}
