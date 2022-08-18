<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioSistemaRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\UsuarioSistemaJsonResource;
use App\Http\Resources\UsuarioSistemaResource;use App\Models\UsuarioSistema;
use App\Models\Vendedor; 
use App\Services\UsuarioSistemaService;
class UsuarioSistemaController extends Controller { 
private UsuarioSistemaService $usuarioSistemaService; 
public function __construct(UsuarioSistemaService $usuarioSistemaService) {$this->usuarioSistemaService = $usuarioSistemaService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$usuarioSistema = $this->usuarioSistemaService->findAll();
return response()->json(new UsuarioSistemaResource($usuarioSistema), 200);
}
}
public function index() {
$usuarioSistema = $this->usuarioSistemaService->findAll();
return view('usuario_sistema.index', ['usuario_sistema' => $usuarioSistema ]);}
public function storeApi(StoreUsuarioSistemaRequest $request) {if ($request->isMethod("post")) {$usuarioSistema = $this->usuarioSistemaService->store($request->validated());return response()->json(new UsuarioSistemaJsonResource($usuarioSistema), 200);}
}
public function editApi(UsuarioSistema$usuarioSistema ,StoreUsuarioSistemaRequest $request) {if ($request->isMethod("post")) {$usuarioSistema = $this->usuarioSistemaService->update($usuarioSistema,$request->validated());return response()->json(new UsuarioSistemaJsonResource($usuarioSistema), 200);}
}
public function store(StoreUsuarioSistemaRequest $request) {if ($request->isMethod("post")) {$usuarioSistema = $this->usuarioSistemaService->store($request->validated());}
return view('usuario_sistema.add');}
public function edit(UsuarioSistema$usuarioSistema ,StoreUsuarioSistemaRequest $request) {if ($request->isMethod("post")) {$usuarioSistema = $this->usuarioSistemaService->update($usuarioSistema,$request->validated());}
return view('usuario_sistema.edit', ['dados' => $usuarioSistema ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->usuarioSistemaService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->usuarioSistemaService->delete($id);
return redirect('/index');
}
}
