<?php  namespace App\Services; use App\Models\PesoMedida;use App\Repositories\PesoMedidaRepository; class PesoMedidaService {  private PesoMedidaRepository $pesoMedidaRepository;public function __construct(PesoMedidaRepository $pesoMedidaRepository)
    {
        $this->pesoMedidaRepository = $pesoMedidaRepository;
    }public function store(array $data){return $this->pesoMedidaRepository->store($data);
}public function update(PesoMedida $pesoMedida, array $data){return $this->pesoMedidaRepository->update( $pesoMedida, $data);
}public function findAll()
    {
        return $this->pesoMedidaRepository->all();
    }public function findOne(int $id)
    {
        return $this->pesoMedidaRepository->find($id);
    }public function delete(int $id)
    {
        return $this->pesoMedidaRepository->delete($id);
    }  }