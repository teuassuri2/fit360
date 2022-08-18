<?php  namespace App\Services; use App\Models\JejumIntermitenteExecucao;use App\Repositories\JejumIntermitenteExecucaoRepository; class JejumIntermitenteExecucaoService {  private JejumIntermitenteExecucaoRepository $jejumIntermitenteExecucaoRepository;public function __construct(JejumIntermitenteExecucaoRepository $jejumIntermitenteExecucaoRepository)
    {
        $this->jejumIntermitenteExecucaoRepository = $jejumIntermitenteExecucaoRepository;
    }public function store(array $data){return $this->jejumIntermitenteExecucaoRepository->store($data);
}public function update(JejumIntermitenteExecucao $jejumIntermitenteExecucao, array $data){return $this->jejumIntermitenteExecucaoRepository->update( $jejumIntermitenteExecucao, $data);
}public function findAll()
    {
        return $this->jejumIntermitenteExecucaoRepository->all();
    }public function findOne(int $id)
    {
        return $this->jejumIntermitenteExecucaoRepository->find($id);
    }public function delete(int $id)
    {
        return $this->jejumIntermitenteExecucaoRepository->delete($id);
    }  }