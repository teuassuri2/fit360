<?php

namespace App\Repositories;

use App\Models\DesafioTipo;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\DesafioTipoContract;

class DesafioTipoRepository extends BaseRepository implements DesafioTipoContract {

    protected $model;

    public function __construct(DesafioTipo $model) {
        $this->model = $model;
    }

}
