<?php

namespace App\Services;

use App\Models\Cliente;
use App\Repositories\ClienteRepository;

class ClienteService {

    private ClienteRepository $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository) {
        $this->clienteRepository = $clienteRepository;
    }

    public function create(array $data) {
        return $this->clienteRepository->create($data);
    }

    public function update(Cliente $cliente, array $data) {
        return $this->clienteRepository->update($cliente, $data);
    }

    public function findAll() {
        return $this->clienteRepository->all();
    }

    public function findOne(int $id) {
        return $this->clienteRepository->find($id);
    }

    public function delete(int $id) {
        return $this->clienteRepository->delete($id);
    }

}
