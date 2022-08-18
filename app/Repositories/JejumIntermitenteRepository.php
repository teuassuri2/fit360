<?php  namespace App\Repositories; use App\Models\JejumIntermitente;use App\Repositories\BaseRepository;use App\Repositories\Contract\JejumIntermitenteContract; class JejumIntermitenteRepository extends BaseRepository implements JejumIntermitenteContract {     protected $model;public function __construct(JejumIntermitente $model)
    {
         $this->model = $model;
    } }