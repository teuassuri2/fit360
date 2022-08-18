<?php  namespace App\Services; use App\Models\FaleConosco;use App\Repositories\FaleConoscoRepository; class FaleConoscoService {  private FaleConoscoRepository $faleConoscoRepository;public function __construct(FaleConoscoRepository $faleConoscoRepository)
    {
        $this->faleConoscoRepository = $faleConoscoRepository;
    }public function store(array $data){return $this->faleConoscoRepository->store($data);
}public function update(FaleConosco $faleConosco, array $data){return $this->faleConoscoRepository->update( $faleConosco, $data);
}public function findAll()
    {
        return $this->faleConoscoRepository->all();
    }public function findOne(int $id)
    {
        return $this->faleConoscoRepository->find($id);
    }public function delete(int $id)
    {
        return $this->faleConoscoRepository->delete($id);
    }  }