<?php  namespace App\Repositories; use App\Models\DesafioConteudo;use App\Repositories\BaseRepository;use App\Repositories\Contract\DesafioConteudoContract; class DesafioConteudoRepository extends BaseRepository implements DesafioConteudoContract {     protected $model;public function __construct(DesafioConteudo $model)
    {
         $this->model = $model;
    } }