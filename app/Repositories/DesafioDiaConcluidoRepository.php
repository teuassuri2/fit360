<?php  namespace App\Repositories; use App\Models\DesafioDiaConcluido;use App\Repositories\BaseRepository;use App\Repositories\Contract\DesafioDiaConcluidoContract; class DesafioDiaConcluidoRepository extends BaseRepository implements DesafioDiaConcluidoContract {     protected $model;public function __construct(DesafioDiaConcluido $model)
    {
         $this->model = $model;
    } }