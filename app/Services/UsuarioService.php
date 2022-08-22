<?php  namespace App\Services; use App\Models\Usuario;use App\Repositories\UsuarioRepository; class UsuarioService {  private UsuarioRepository $usuarioRepository;public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }public function create(array $data){return $this->usuarioRepository->create($data);
}public function update(Usuario $usuario, array $data){return $this->usuarioRepository->update( $usuario, $data);
}public function findAll()
    {
        return $this->usuarioRepository->all();
    }public function findOne(int $id)
    {
        return $this->usuarioRepository->find($id);
    }public function delete(int $id)
    {
        return $this->usuarioRepository->delete($id);
    }  }