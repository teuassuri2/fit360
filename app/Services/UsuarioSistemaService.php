<?php  namespace App\Services; use App\Models\UsuarioSistema;use App\Repositories\UsuarioSistemaRepository; class UsuarioSistemaService {  private UsuarioSistemaRepository $usuarioSistemaRepository;public function __construct(UsuarioSistemaRepository $usuarioSistemaRepository)
    {
        $this->usuarioSistemaRepository = $usuarioSistemaRepository;
    }public function create(array $data){return $this->usuarioSistemaRepository->create($data);
}public function update(UsuarioSistema $usuarioSistema, array $data){return $this->usuarioSistemaRepository->update( $usuarioSistema, $data);
}public function findAll()
    {
        return $this->usuarioSistemaRepository->all();
    }public function findOne(int $id)
    {
        return $this->usuarioSistemaRepository->find($id);
    }public function delete(int $id)
    {
        return $this->usuarioSistemaRepository->delete($id);
    }  }