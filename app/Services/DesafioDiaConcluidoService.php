<?php  namespace App\Services; use App\Models\DesafioDiaConcluido;use App\Repositories\DesafioDiaConcluidoRepository; class DesafioDiaConcluidoService {  private DesafioDiaConcluidoRepository $desafioDiaConcluidoRepository;public function __construct(DesafioDiaConcluidoRepository $desafioDiaConcluidoRepository)
    {
        $this->desafioDiaConcluidoRepository = $desafioDiaConcluidoRepository;
    }public function create(array $data){return $this->desafioDiaConcluidoRepository->create($data);
}public function update(DesafioDiaConcluido $desafioDiaConcluido, array $data){return $this->desafioDiaConcluidoRepository->update( $desafioDiaConcluido, $data);
}public function findAll()
    {
        return $this->desafioDiaConcluidoRepository->all();
    }public function findOne(int $id)
    {
        return $this->desafioDiaConcluidoRepository->find($id);
    }public function delete(int $id)
    {
        return $this->desafioDiaConcluidoRepository->delete($id);
    }  }