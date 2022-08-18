<?php  namespace App\Repositories; use App\Models\JejumIntermitenteExecucao;use App\Repositories\BaseRepository;use App\Repositories\Contract\JejumIntermitenteExecucaoContract; class JejumIntermitenteExecucaoRepository extends BaseRepository implements JejumIntermitenteExecucaoContract {     protected $model;public function __construct(JejumIntermitenteExecucao $model)
    {
         $this->model = $model;
    } }