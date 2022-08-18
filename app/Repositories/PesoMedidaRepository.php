<?php

namespace App\Repositories;

use App\Models\PesoMedida;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\PesoMedidaContract;

class PesoMedidaRepository extends BaseRepository implements PesoMedidaContract {

    protected $model;

    public function __construct(PesoMedida $model) {
        $this->model = $model;
    }

}
