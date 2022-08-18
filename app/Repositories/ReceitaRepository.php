<?php

namespace App\Repositories;

use App\Models\Receita;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\ReceitaContract;

class ReceitaRepository extends BaseRepository implements ReceitaContract {

    protected $model;

    public function __construct(Receita $model) {
        $this->model = $model;
    }

}
