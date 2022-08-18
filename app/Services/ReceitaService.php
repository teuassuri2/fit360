<?php

namespace App\Services;

use App\Models\Receita;
use App\Repositories\ReceitaRepository;

class ReceitaService {

    private ReceitaRepository $receitaRepository;

    public function __construct(ReceitaRepository $receitaRepository) {
        $this->receitaRepository = $receitaRepository;
    }

    public function store(array $data) {
        return $this->receitaRepository->store($data);
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