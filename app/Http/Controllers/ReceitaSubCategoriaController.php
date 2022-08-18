<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreReceitaSubCategoriaRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\ReceitaSubCategoriaJsonResource;
use App\Http\Resources\ReceitaSubCategoriaResource;use App\Models\ReceitaSubCategoria;
use App\Models\Vendedor; 
use App\Services\ReceitaSubCategoriaService;
class ReceitaSubCategoriaController extends Controller { 
private ReceitaSubCategoriaService $receitaSubCategoriaService; 
public function __construct(ReceitaSubCategoriaService $receitaSubCategoriaService) {$this->receitaSubCategoriaService = $receitaSubCategoriaService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$receitaSubCategoria = $this->receitaSubCategoriaService->findAll();
return response()->json(new ReceitaSubCategoriaResource($receitaSubCategoria), 200);
}
}
public function index() {
$receitaSubCategoria = $this->receitaSubCategoriaService->findAll();
return view('receita_sub_categoria.index', ['receita_sub_categoria' => $receitaSubCategoria ]);}
public function storeApi(StoreReceitaSubCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaSubCategoria = $this->receitaSubCategoriaService->store($request->validated());return response()->json(new ReceitaSubCategoriaJsonResource($receitaSubCategoria), 200);}
}
public function editApi(ReceitaSubCategoria$receitaSubCategoria ,StoreReceitaSubCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaSubCategoria = $this->receitaSubCategoriaService->update($receitaSubCategoria,$request->validated());return response()->json(new ReceitaSubCategoriaJsonResource($receitaSubCategoria), 200);}
}
public function store(StoreReceitaSubCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaSubCategoria = $this->receitaSubCategoriaService->store($request->validated());}
return view('receita_sub_categoria.add');}
public function edit(ReceitaSubCategoria$receitaSubCategoria ,StoreReceitaSubCategoriaRequest $request) {if ($request->isMethod("post")) {$receitaSubCategoria = $this->receitaSubCategoriaService->update($receitaSubCategoria,$request->validated());}
return view('receita_sub_categoria.edit', ['dados' => $receitaSubCategoria ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->receitaSubCategoriaService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->receitaSubCategoriaService->delete($id);
return redirect('/index');
}
}
