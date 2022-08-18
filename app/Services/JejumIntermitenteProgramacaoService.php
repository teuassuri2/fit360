<?php  namespace App\Services; use App\Models\JejumIntermitenteProgramacao;use App\Repositories\JejumIntermitenteProgramacaoRepository; class JejumIntermitenteProgramacaoService {  private JejumIntermitenteProgramacaoRepository $jejumIntermitenteProgramacaoRepository;public function __construct(JejumIntermitenteProgramacaoRepository $jejumIntermitenteProgramacaoRepository)
    {
        $this->jejumIntermitenteProgramacaoRepository = $jejumIntermitenteProgramacaoRepository;
    }public function store(array $data){return $this->jejumIntermitenteProgramacaoRepository->store($data);
}public function update(JejumIntermitenteProgramacao $jejumIntermitenteProgramacao, array $data){return $this->jejumIntermitenteProgramacaoRepository->update( $jejumIntermitenteProgramacao, $data);
}public function findAll()
    {
        return $this->jejumIntermitenteProgramacaoRepository->all();
    }public function findOne(int $id)
    {
        return $this->jejumIntermitenteProgramacaoRepository->find($id);
    }public function delete(int $id)
    {
        return $this->jejumIntermitenteProgramacaoRepository->delete($id);
    }  }