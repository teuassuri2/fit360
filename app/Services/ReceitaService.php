<?php

namespace App\Services;

use App\Models\Receita;
use App\Repositories\ReceitaRepository;
use App\Traits\UploadImage;

class ReceitaService {

    use UploadImage;

    private ReceitaRepository $receitaRepository;

    public function __construct(ReceitaRepository $receitaRepository) {
        $this->receitaRepository = $receitaRepository;
    }

    public function create(array $data) {
        return $this->receitaRepository->create($data);
    }

    public function update(Receita $receita, array $data) {
        return $this->receitaRepository->update($receita, $data);
    }

    public function findAll() {
        return $this->receitaRepository->all();
    }

    public function findOne(int $id) {
        return $this->receitaRepository->find($id);
    }

    public function delete(int $id) {
        return $this->receitaRepository->delete($id);
    }

}
