<?php  namespace App\Services; use App\Models\Token;use App\Repositories\TokenRepository; class TokenService {  private TokenRepository $tokenRepository;public function __construct(TokenRepository $tokenRepository)
    {
        $this->tokenRepository = $tokenRepository;
    }public function create(array $data){return $this->tokenRepository->create($data);
}public function update(Token $token, array $data){return $this->tokenRepository->update( $token, $data);
}public function findAll()
    {
        return $this->tokenRepository->all();
    }public function findOne(int $id)
    {
        return $this->tokenRepository->find($id);
    }public function delete(int $id)
    {
        return $this->tokenRepository->delete($id);
    }  }