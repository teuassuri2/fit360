<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreReceitaCategoriaRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\ReceitaCategoriaJsonResource;
use App\Http\Resources\ReceitaCategoriaResource;use App\Models\ReceitaCategoria;
use App\Models\Vendedor; 
use App\Services\ReceitaCategoriaService;
class ReceitaCategoriaController extends Controller { 
private ReceitaCategoriaService $receitaCategoriaService; 
public function __construct(ReceitaCategoriaService $receitaCategoriaService) {$this->receitaCategoriaService = $receitaCategoriaService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$receitaCategoria = $this->receitaCategoriaService->findAll();
return response()->json(new ReceitaCategoriaResource($receitaCategoria), 200);
}
}
public function index() {
$receitaCategoria = $this->receitaCategoriaService->findAll();
return view('receita_categoria.index', ['receita_categoria' => $receitaCategoria ]);}
public function storeApi(StoreReceitaCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaCategoria = $this->receitaCategoriaService->store($request->validated());return response()->json(new ReceitaCategoriaJsonResource($receitaCategoria), 200);}
}
public function editApi(ReceitaCategoria$receitaCategoria ,StoreReceitaCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaCategoria = $this->receitaCategoriaService->update($receitaCategoria,$request->validated());return response()->json(new ReceitaCategoriaJsonResource($receitaCategoria), 200);}
}
public function store(StoreReceitaCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaCategoria = $this->receitaCategoriaService->store($request->validated());}
return view('receita_categoria.add');}
public function edit(ReceitaCategoria$receitaCategoria ,StoreReceitaCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaCategoria = $this->receitaCategoriaService->update($receitaCategoria,$request->validated());}
return view('receita_categoria.edit', ['dados' => $receitaCategoria ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->receitaCategoriaService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->receitaCategoriaService->delete($id);
return redirect('/index');
}
}
