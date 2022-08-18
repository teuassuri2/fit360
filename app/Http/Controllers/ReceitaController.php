<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReceitaRequest;
use Illuminate\Http\Request;
use App\Http\Resources\ReceitaJsonResource;
use App\Http\Resources\ReceitaResource;
use App\Models\Receita;
use App\Models\Vendedor;
use App\Services\ReceitaService;

class ReceitaController extends Controller {

    private ReceitaService $receitaService;

    public function __construct(ReceitaService $receitaService) {
        $this->receitaService = $receitaService;
    }

    public function indexApi(Request $request) {
        if ($request->isMethod("post")) {
            $receita = $this->receitaService->findAll();
            return response()->json(new ReceitaResource($receita), 200);
        }
    }

    public function index() {
        $receita = $this->receitaService->findAll();
        exit("aqui");
        return view('receita.index', ['receita' => $receita]);
    }

    public function storeApi(StoreReceitaRequest $request) {
        if ($request->isMethod("post")) {
            $receita = $this->receitaService->store($request->validated());
            return response()->json(new ReceitaJsonResource($receita), 200);
        }
    }

    public function editApi(Receita $receita, StoreReceitaRequest $request) {
        if ($request->isMethod("post")) {
            $receita = $this->receitaService->update($receita, $request->validated());
            return response()->json(new ReceitaJsonResource($receita), 200);
        }
    }

    public function store(StoreReceitaRequest $request) {
        if ($request->isMethod("post")) {
            $receita = $this->receitaService->store($request->validated());
        }
        return view('receita.add');
    }

    public function edit(Receita $receita, StoreReceitaRequest $request) {
        if ($request->isMethod("post")) {
            $receita = $this->receitaService->update($receita, $request->validated());
        }
        return view('receita.edit', ['dados' => $receita]);
    }

    public function deleteApi(int $id) {
        if ($request->isMethod("post")) {
            $this->receitaService->delete($id);
            return response()->json((true), 200);
        }
    }

    public function delete(int $id) {
        $this->receitaService->delete($id);
        return redirect('/index');
    }

}
