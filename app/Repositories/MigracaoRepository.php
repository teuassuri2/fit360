<?php  namespace App\Repositories; use App\Models\Migracao;use App\Repositories\BaseRepository;use App\Repositories\Contract\MigracaoContract; class MigracaoRepository extends BaseRepository implements MigracaoContract {     protected $model;public function __construct(Migracao $model)
    {
         $this->model = $model;
    } }