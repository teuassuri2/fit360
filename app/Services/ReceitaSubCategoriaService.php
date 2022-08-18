<?php  namespace App\Services; use App\Models\ReceitaSubCategoria;use App\Repositories\ReceitaSubCategoriaRepository; class ReceitaSubCategoriaService {  private ReceitaSubCategoriaRepository $receitaSubCategoriaRepository;public function __construct(ReceitaSubCategoriaRepository $receitaSubCategoriaRepository)
    {
        $this->receitaSubCategoriaRepository = $receitaSubCategoriaRepository;
    }public function store(array $data){return $this->receitaSubCategoriaRepository->store($data);
}public function update(ReceitaSubCategoria $receitaSubCategoria, array $data){return $this->receitaSubCategoriaRepository->update( $receitaSubCategoria, $data);
}public function findAll()
    {
        return $this->receitaSubCategoriaRepository->all();
    }public function findOne(int $id)
    {
        return $this->receitaSubCategoriaRepository->find($id);
    }public function delete(int $id)
    {
        return $this->receitaSubCategoriaRepository->delete($id);
    }  }