<?php  namespace App\Services; use App\Models\Desafio;use App\Repositories\DesafioRepository; class DesafioService {  private DesafioRepository $desafioRepository;public function __construct(DesafioRepository $desafioRepository)
    {
        $this->desafioRepository = $desafioRepository;
    }public function create(array $data){return $this->desafioRepository->create($data);
}public function update(Desafio $desafio, array $data){return $this->desafioRepository->update( $desafio, $data);
}public function findAll()
    {
        return $this->desafioRepository->all();
    }public function findOne(int $id)
    {
        return $this->desafioRepository->find($id);
    }public function delete(int $id)
    {
        return $this->desafioRepository->delete($id);
    }  }