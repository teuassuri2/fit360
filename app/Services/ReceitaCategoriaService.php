<?php  namespace App\Services; use App\Models\ReceitaCategoria;use App\Repositories\ReceitaCategoriaRepository; class ReceitaCategoriaService {  private ReceitaCategoriaRepository $receitaCategoriaRepository;public function __construct(ReceitaCategoriaRepository $receitaCategoriaRepository)
    {
        $this->receitaCategoriaRepository = $receitaCategoriaRepository;
    }public function create(array $data){return $this->receitaCategoriaRepository->create($data);
}public function update(ReceitaCategoria $receitaCategoria, array $data){return $this->receitaCategoriaRepository->update( $receitaCategoria, $data);
}public function findAll()
    {
        return $this->receitaCategoriaRepository->all();
    }public function findOne(int $id)
    {
        return $this->receitaCategoriaRepository->find($id);
    }public function delete(int $id)
    {
        return $this->receitaCategoriaRepository->delete($id);
    }  }