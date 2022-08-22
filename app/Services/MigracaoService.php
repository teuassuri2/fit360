<?php  namespace App\Services; use App\Models\Migracao;use App\Repositories\MigracaoRepository; class MigracaoService {  private MigracaoRepository $migracaoRepository;public function __construct(MigracaoRepository $migracaoRepository)
    {
        $this->migracaoRepository = $migracaoRepository;
    }public function create(array $data){return $this->migracaoRepository->create($data);
}public function update(Migracao $migracao, array $data){return $this->migracaoRepository->update( $migracao, $data);
}public function findAll()
    {
        return $this->migracaoRepository->all();
    }public function findOne(int $id)
    {
        return $this->migracaoRepository->find($id);
    }public function delete(int $id)
    {
        return $this->migracaoRepository->delete($id);
    }  }