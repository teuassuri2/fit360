<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepository;

class PostService {

    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }

    public function create(array $data) {
        return $this->postRepository->create($data);
    }

    public function update(Post $post, array $data) {
        return $this->postRepository->update($post, $data);
    }

    public function findAll() {
        return $this->postRepository->all();
    }

    public function findOne(int $id) {
        return $this->postRepository->find($id);
    }

    public function delete(int $id) {
        return $this->postRepository->delete($id);
    }

}
