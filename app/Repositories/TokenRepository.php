<?php  namespace App\Repositories; use App\Models\Token;use App\Repositories\BaseRepository;use App\Repositories\Contract\TokenContract; class TokenRepository extends BaseRepository implements TokenContract {     protected $model;public function __construct(Token $model)
    {
         $this->model = $model;
    } }