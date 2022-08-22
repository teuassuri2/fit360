<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreJejumIntermitenteExecucaoRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\JejumIntermitenteExecucaoJsonResource;
use App\Http\Resources\JejumIntermitenteExecucaoResource;use App\Models\JejumIntermitenteExecucao;
use App\Models\Vendedor; 
use App\Services\JejumIntermitenteExecucaoService;
class JejumIntermitenteExecucaoController extends Controller { 
private JejumIntermitenteExecucaoService $jejumIntermitenteExecucaoService; 
public function __construct(JejumIntermitenteExecucaoService $jejumIntermitenteExecucaoService) {$this->jejumIntermitenteExecucaoService = $jejumIntermitenteExecucaoService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$jejumIntermitenteExecucao = $this->jejumIntermitenteExecucaoService->findAll();
return response()->json(new JejumIntermitenteExecucaoResource($jejumIntermitenteExecucao), 200);
}
}
public function index() {
$jejumIntermitenteExecucao = $this->jejumIntermitenteExecucaoService->findAll();
return view('jejum_intermitente_execucao.index', ['jejum_intermitente_execucao' => $jejumIntermitenteExecucao ]);}
public function storeApi(StoreJejumIntermitenteExecucaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteExecucao = $this->jejumIntermitenteExecucaoService->create($request->validated());return response()->json(new JejumIntermitenteExecucaoJsonResource($jejumIntermitenteExecucao), 200);}
}
public function editApi(JejumIntermitenteExecucao$jejumIntermitenteExecucao ,StoreJejumIntermitenteExecucaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteExecucao = $this->jejumIntermitenteExecucaoService->update($jejumIntermitenteExecucao,$request->validated());return response()->json(new JejumIntermitenteExecucaoJsonResource($jejumIntermitenteExecucao), 200);}
}
public function store(StoreJejumIntermitenteExecucaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteExecucao = $this->jejumIntermitenteExecucaoService->create($request->validated());}
return view('jejum_intermitente_execucao.add');}
public function edit(JejumIntermitenteExecucao$jejumIntermitenteExecucao ,StoreJejumIntermitenteExecucaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteExecucao = $this->jejumIntermitenteExecucaoService->update($jejumIntermitenteExecucao,$request->validated());}
return view('jejum_intermitente_execucao.edit', ['dados' => $jejumIntermitenteExecucao ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->jejumIntermitenteExecucaoService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->jejumIntermitenteExecucaoService->delete($id);
return redirect('/index');
}
}
