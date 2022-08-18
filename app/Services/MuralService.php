<?php  namespace App\Services; use App\Models\Mural;use App\Repositories\MuralRepository; class MuralService {  private MuralRepository $muralRepository;public function __construct(MuralRepository $muralRepository)
    {
        $this->muralRepository = $muralRepository;
    }public function store(array $data){return $this->muralRepository->store($data);
}public function update(Mural $mural, array $data){return $this->muralRepository->update( $mural, $data);
}public function findAll()
    {
        return $this->muralRepository->all();
    }public function findOne(int $id)
    {
        return $this->muralRepository->find($id);
    }public function delete(int $id)
    {
        return $this->muralRepository->delete($id);
    }  }