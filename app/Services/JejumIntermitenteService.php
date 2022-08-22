<?php  namespace App\Services; use App\Models\JejumIntermitente;use App\Repositories\JejumIntermitenteRepository; class JejumIntermitenteService {  private JejumIntermitenteRepository $jejumIntermitenteRepository;public function __construct(JejumIntermitenteRepository $jejumIntermitenteRepository)
    {
        $this->jejumIntermitenteRepository = $jejumIntermitenteRepository;
    }public function create(array $data){return $this->jejumIntermitenteRepository->create($data);
}public function update(JejumIntermitente $jejumIntermitente, array $data){return $this->jejumIntermitenteRepository->update( $jejumIntermitente, $data);
}public function findAll()
    {
        return $this->jejumIntermitenteRepository->all();
    }public function findOne(int $id)
    {
        return $this->jejumIntermitenteRepository->find($id);
    }public function delete(int $id)
    {
        return $this->jejumIntermitenteRepository->delete($id);
    }  }