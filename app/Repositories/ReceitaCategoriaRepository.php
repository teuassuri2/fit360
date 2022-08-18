<?php

namespace App\Repositories;

use App\Models\ReceitaCategoria;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\ReceitaCategoriaContract;

class ReceitaCategoriaRepository extends BaseRepository implements ReceitaCategoriaContract {

    protected $model;

    public function __construct(ReceitaCategoria $model) {
        $this->model = $model;
    }

}
