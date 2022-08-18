<?php  namespace App\Repositories; use App\Models\FaleConosco;use App\Repositories\BaseRepository;use App\Repositories\Contract\FaleConoscoContract; class FaleConoscoRepository extends BaseRepository implements FaleConoscoContract {     protected $model;public function __construct(FaleConosco $model)
    {
         $this->model = $model;
    } }