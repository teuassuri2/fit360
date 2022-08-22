<?php  namespace App\Services; use App\Models\DesafioTipo;use App\Repositories\DesafioTipoRepository; class DesafioTipoService {  private DesafioTipoRepository $desafioTipoRepository;public function __construct(DesafioTipoRepository $desafioTipoRepository)
    {
        $this->desafioTipoRepository = $desafioTipoRepository;
    }public function create(array $data){return $this->desafioTipoRepository->create($data);
}public function update(DesafioTipo $desafioTipo, array $data){return $this->desafioTipoRepository->update( $desafioTipo, $data);
}public function findAll()
    {
        return $this->desafioTipoRepository->all();
    }public function findOne(int $id)
    {
        return $this->desafioTipoRepository->find($id);
    }public function delete(int $id)
    {
        return $this->desafioTipoRepository->delete($id);
    }  }