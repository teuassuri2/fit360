<?php  namespace App\Repositories; use App\Models\Usuario;use App\Repositories\BaseRepository;use App\Repositories\Contract\UsuarioContract; class UsuarioRepository extends BaseRepository implements UsuarioContract {     protected $model;public function __construct(Usuario $model)
    {
         $this->model = $model;
    } }