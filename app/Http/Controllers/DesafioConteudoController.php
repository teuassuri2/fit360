<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesafioConteudoRequest;
use Illuminate\Http\Request;

use App\Http\Resources\DesafioConteudoJsonResource;
use App\Http\Resources\DesafioConteudoResource;
use App\Models\DesafioConteudo;
use App\Models\Vendedor;
use App\Services\DesafioConteudoService;

class DesafioConteudoController extends Controller {

    private DesafioConteudoService $desafioConteudoService;

    public function __construct(DesafioConteudoService $desafioConteudoService) {
        $this->desafioConteudoService = $desafioConteudoService;
    }

    public function indexApi(Request $request) {
        if ($request->isMethod("post")) {
            $desafioConteudo = $this->desafioConteudoService->findAll();
            return response()->json(new DesafioConteudoResource($desafioConteudo), 200);
        }
    }

    public function index() {
        $desafioConteudo = $this->desafioConteudoService->findAll();
        return view('desafio_conteudo.index', ['desafio_conteudo' => $desafioConteudo]);
    }

    public function storeApi(StoreDesafioConteudoRequest $request) {
        if ($request->isMethod("post")) {
            $desafioConteudo = $this->desafioConteudoService->store($request->validated());
            return response()->json(new DesafioConteudoJsonResource($desafioConteudo), 200);
        }
    }

    public function editApi(DesafioConteudo $desafioConteudo, StoreDesafioConteudoRequest $request) {
        if ($request->isMethod("post")) {
            $desafioConteudo = $this->desafioConteudoService->update($desafioConteudo, $request->validated());
            return response()->json(new DesafioConteudoJsonResource($desafioConteudo), 200);
        }
    }

    public function store(StoreDesafioConteudoRequest $request) {
        if ($request->isMethod("post")) {
            $desafioConteudo = $this->desafioConteudoService->store($request->validated());
        }
        return view('desafio_conteudo.add');
    }

    public function edit(DesafioConteudo $desafioConteudo, StoreDesafioConteudoRequest $request) {
        if ($request->isMethod("post")) {
            $desafioConteudo = $this->desafioConteudoService->update($desafioConteudo, $request->validated());
        }
        return view('desafio_conteudo.edit', ['dados' => $desafioConteudo]);
    }

    public function deleteApi(int $id) {
        if ($request->isMethod("post")) {
            $this->desafioConteudoService->delete($id);
            return response()->json((true), 200);
        }
    }

    public function delete(int $id) {
        $this->desafioConteudoService->delete($id);
        return redirect('/index');
    }

}
