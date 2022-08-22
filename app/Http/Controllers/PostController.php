<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Http\Resources\PostJsonResource;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\Vendedor;
use App\Services\PostService;

class PostController extends Controller {

    private PostService $postService;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }

    public function indexApi(Request $request) {
        if ($request->isMethod("post")) {
            $post = $this->postService->findAll();
            return response()->json(new PostResource($post), 200);
        }
    }

    public function index() {
        $post = $this->postService->findAll();
        return view('post.index', ['post' => $post]);
    }

    public function storeApi(StorePostRequest $request) {
        if ($request->isMethod("post")) {
            $post = $this->postService->create($request->validated());
            return response()->json(new PostJsonResource($post), 200);
        }
    }

    public function editApi(Post $post, StorePostRequest $request) {
        if ($request->isMethod("post")) {
            $post = $this->postService->update($post, $request->validated());
            return response()->json(new PostJsonResource($post), 200);
        }
    }

    public function store(StorePostRequest $request) {
        if ($request->isMethod("post")) {
            $post = $this->postService->create($request->validated());
        }
        return view('post.add');
    }

    public function edit(Post $post, StorePostRequest $request) {
        if ($request->isMethod("post")) {
            $post = $this->postService->update($post, $request->validated());
        }
        return view('post.edit', ['dados' => $post]);
    }

    public function deleteApi(int $id) {
        if ($request->isMethod("post")) {
            $this->postService->delete($id);
            return response()->json((true), 200);
        }
    }

    public function delete(int $id) {
        $this->postService->delete($id);
        return redirect('/index');
    }

}
