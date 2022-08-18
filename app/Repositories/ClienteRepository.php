<?php  namespace App\Repositories; use App\Models\Cliente;use App\Repositories\BaseRepository;use App\Repositories\Contract\ClienteContract; class ClienteRepository extends BaseRepository implements ClienteContract {     protected $model;public function __construct(Cliente $model)
    {
         $this->model = $model;
    } }