<?php

namespace App\Repositories;

use App\Models\JejumIntermitenteProgramacao;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\JejumIntermitenteProgramacaoContract;

class JejumIntermitenteProgramacaoRepository extends BaseRepository implements JejumIntermitenteProgramacaoContract {

    protected $model;

    public function __construct(JejumIntermitenteProgramacao $model) {
        $this->model = $model;
    }

}
