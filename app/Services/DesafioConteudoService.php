<?php

namespace App\Services;

use App\Models\DesafioConteudo;
use App\Repositories\DesafioConteudoRepository;

class DesafioConteudoService {

    private DesafioConteudoRepository $desafioConteudoRepository;

    public function __construct(DesafioConteudoRepository $desafioConteudoRepository) {
        $this->desafioConteudoRepository = $desafioConteudoRepository;
    }

    public function create(array $data) {
        return $this->desafioConteudoRepository->create($data);
    }

    public function update(DesafioConteudo $desafioConteudo, array $data) {
        return $this->desafioConteudoRepository->update($desafioConteudo, $data);
    }

    public function findAll() {
        return $this->desafioConteudoRepository->all();
    }

    public function findOne(int $id) {
        return $this->desafioConteudoRepository->find($id);
    }

    public function delete(int $id) {
        return $this->desafioConteudoRepository->delete($id);
    }

}
