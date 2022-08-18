<?php

namespace App\Repositories;

use App\Models\UsuarioSistema;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\UsuarioSistemaContract;

class UsuarioSistemaRepository extends BaseRepository implements UsuarioSistemaContract {

    protected $model;

    public function __construct(UsuarioSistema $model) {
        $this->model = $model;
    }

}
