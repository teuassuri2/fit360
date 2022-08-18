<?php  namespace App\Repositories; use App\Models\DesafioParticipante;use App\Repositories\BaseRepository;use App\Repositories\Contract\DesafioParticipanteContract; class DesafioParticipanteRepository extends BaseRepository implements DesafioParticipanteContract {     protected $model;public function __construct(DesafioParticipante $model)
    {
         $this->model = $model;
    } }