<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StorePesoMedidaRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\PesoMedidaJsonResource;
use App\Http\Resources\PesoMedidaResource;use App\Models\PesoMedida;
use App\Models\Vendedor; 
use App\Services\PesoMedidaService;
class PesoMedidaController extends Controller { 
private PesoMedidaService $pesoMedidaService; 
public function __construct(PesoMedidaService $pesoMedidaService) {$this->pesoMedidaService = $pesoMedidaService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$pesoMedida = $this->pesoMedidaService->findAll();
return response()->json(new PesoMedidaResource($pesoMedida), 200);
}
}
public function index() {
$pesoMedida = $this->pesoMedidaService->findAll();
return view('peso_medida.index', ['peso_medida' => $pesoMedida ]);}
public function storeApi(StorePesoMedidaRequest $request) {if ($request->isMethod("post")) {$pesoMedida = $this->pesoMedidaService->create($request->validated());return response()->json(new PesoMedidaJsonResource($pesoMedida), 200);}
}
public function editApi(PesoMedida$pesoMedida ,StorePesoMedidaRequest $request) {if ($request->isMethod("post")) {$pesoMedida = $this->pesoMedidaService->update($pesoMedida,$request->validated());return response()->json(new PesoMedidaJsonResource($pesoMedida), 200);}
}
public function store(StorePesoMedidaRequest $request) {if ($request->isMethod("post")) {$pesoMedida = $this->pesoMedidaService->create($request->validated());}
return view('peso_medida.add');}
public function edit(PesoMedida$pesoMedida ,StorePesoMedidaRequest $request) {if ($request->isMethod("post")) {$pesoMedida = $this->pesoMedidaService->update($pesoMedida,$request->validated());}
return view('peso_medida.edit', ['dados' => $pesoMedida ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->pesoMedidaService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->pesoMedidaService->delete($id);
return redirect('/index');
}
}
