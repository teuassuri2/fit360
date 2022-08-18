<?php  namespace App\Services; use App\Models\DesafioParticipante;use App\Repositories\DesafioParticipanteRepository; class DesafioParticipanteService {  private DesafioParticipanteRepository $desafioParticipanteRepository;public function __construct(DesafioParticipanteRepository $desafioParticipanteRepository)
    {
        $this->desafioParticipanteRepository = $desafioParticipanteRepository;
    }public function store(array $data){return $this->desafioParticipanteRepository->store($data);
}public function update(DesafioParticipante $desafioParticipante, array $data){return $this->desafioParticipanteRepository->update( $desafioParticipante, $data);
}public function findAll()
    {
        return $this->desafioParticipanteRepository->all();
    }public function findOne(int $id)
    {
        return $this->desafioParticipanteRepository->find($id);
    }public function delete(int $id)
    {
        return $this->desafioParticipanteRepository->delete($id);
    }  }