<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreDesafioTipoRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\DesafioTipoJsonResource;
use App\Http\Resources\DesafioTipoResource;use App\Models\DesafioTipo;
use App\Models\Vendedor; 
use App\Services\DesafioTipoService;
class DesafioTipoController extends Controller { 
private DesafioTipoService $desafioTipoService; 
public function __construct(DesafioTipoService $desafioTipoService) {$this->desafioTipoService = $desafioTipoService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$desafioTipo = $this->desafioTipoService->findAll();
return response()->json(new DesafioTipoResource($desafioTipo), 200);
}
}
public function index() {
$desafioTipo = $this->desafioTipoService->findAll();
return view('desafio_tipo.index', ['desafio_tipo' => $desafioTipo ]);}
public function storeApi(StoreDesafioTipoRequest $request) {if ($request->isMethod("post")) {$desafioTipo = $this->desafioTipoService->create($request->validated());return response()->json(new DesafioTipoJsonResource($desafioTipo), 200);}
}
public function editApi(DesafioTipo$desafioTipo ,StoreDesafioTipoRequest $request) {if ($request->isMethod("post")) {$desafioTipo = $this->desafioTipoService->update($desafioTipo,$request->validated());return response()->json(new DesafioTipoJsonResource($desafioTipo), 200);}
}
public function store(StoreDesafioTipoRequest $request) {if ($request->isMethod("post")) {$desafioTipo = $this->desafioTipoService->create($request->validated());}
return view('desafio_tipo.add');}
public function edit(DesafioTipo$desafioTipo ,StoreDesafioTipoRequest $request) {if ($request->isMethod("post")) {$desafioTipo = $this->desafioTipoService->update($desafioTipo,$request->validated());}
return view('desafio_tipo.edit', ['dados' => $desafioTipo ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->desafioTipoService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->desafioTipoService->delete($id);
return redirect('/index');
}
}
