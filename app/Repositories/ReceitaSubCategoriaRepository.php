<?php  namespace App\Repositories; use App\Models\ReceitaSubCategoria;use App\Repositories\BaseRepository;use App\Repositories\Contract\ReceitaSubCategoriaContract; class ReceitaSubCategoriaRepository extends BaseRepository implements ReceitaSubCategoriaContract {     protected $model;public function __construct(ReceitaSubCategoria $model)
    {
         $this->model = $model;
    } }