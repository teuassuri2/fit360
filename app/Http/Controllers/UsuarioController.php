<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\UsuarioJsonResource;
use App\Http\Resources\UsuarioResource;use App\Models\Usuario;
use App\Models\Vendedor; 
use App\Services\UsuarioService;
class UsuarioController extends Controller { 
private UsuarioService $usuarioService; 
public function __construct(UsuarioService $usuarioService) {$this->usuarioService = $usuarioService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$usuario = $this->usuarioService->findAll();
return response()->json(new UsuarioResource($usuario), 200);
}
}
public function index() {
$usuario = $this->usuarioService->findAll();
return view('usuario.index', ['usuario' => $usuario ]);}
public function storeApi(StoreUsuarioRequest $request) {if ($request->isMethod("post")) {$usuario = $this->usuarioService->create($request->validated());return response()->json(new UsuarioJsonResource($usuario), 200);}
}
public function editApi(Usuario$usuario ,StoreUsuarioRequest $request) {if ($request->isMethod("post")) {$usuario = $this->usuarioService->update($usuario,$request->validated());return response()->json(new UsuarioJsonResource($usuario), 200);}
}
public function store(StoreUsuarioRequest $request) {if ($request->isMethod("post")) {$usuario = $this->usuarioService->create($request->validated());}
return view('usuario.add');}
public function edit(Usuario$usuario ,StoreUsuarioRequest $request) {if ($request->isMethod("post")) {$usuario = $this->usuarioService->update($usuario,$request->validated());}
return view('usuario.edit', ['dados' => $usuario ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->usuarioService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->usuarioService->delete($id);
return redirect('/index');
}
}
