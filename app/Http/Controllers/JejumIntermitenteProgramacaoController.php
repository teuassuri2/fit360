<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreJejumIntermitenteProgramacaoRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\JejumIntermitenteProgramacaoJsonResource;
use App\Http\Resources\JejumIntermitenteProgramacaoResource;use App\Models\JejumIntermitenteProgramacao;
use App\Models\Vendedor; 
use App\Services\JejumIntermitenteProgramacaoService;
class JejumIntermitenteProgramacaoController extends Controller { 
private JejumIntermitenteProgramacaoService $jejumIntermitenteProgramacaoService; 
public function __construct(JejumIntermitenteProgramacaoService $jejumIntermitenteProgramacaoService) {$this->jejumIntermitenteProgramacaoService = $jejumIntermitenteProgramacaoService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$jejumIntermitenteProgramacao = $this->jejumIntermitenteProgramacaoService->findAll();
return response()->json(new JejumIntermitenteProgramacaoResource($jejumIntermitenteProgramacao), 200);
}
}
public function index() {
$jejumIntermitenteProgramacao = $this->jejumIntermitenteProgramacaoService->findAll();
return view('jejum_intermitente_programacao.index', ['jejum_intermitente_programacao' => $jejumIntermitenteProgramacao ]);}
public function storeApi(StoreJejumIntermitenteProgramacaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteProgramacao = $this->jejumIntermitenteProgramacaoService->create($request->validated());return response()->json(new JejumIntermitenteProgramacaoJsonResource($jejumIntermitenteProgramacao), 200);}
}
public function editApi(JejumIntermitenteProgramacao$jejumIntermitenteProgramacao ,StoreJejumIntermitenteProgramacaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteProgramacao = $this->jejumIntermitenteProgramacaoService->update($jejumIntermitenteProgramacao,$request->validated());return response()->json(new JejumIntermitenteProgramacaoJsonResource($jejumIntermitenteProgramacao), 200);}
}
public function store(StoreJejumIntermitenteProgramacaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteProgramacao = $this->jejumIntermitenteProgramacaoService->create($request->validated());}
return view('jejum_intermitente_programacao.add');}
public function edit(JejumIntermitenteProgramacao$jejumIntermitenteProgramacao ,StoreJejumIntermitenteProgramacaoRequest $request) {if ($request->isMethod("post")) {$jejumIntermitenteProgramacao = $this->jejumIntermitenteProgramacaoService->update($jejumIntermitenteProgramacao,$request->validated());}
return view('jejum_intermitente_programacao.edit', ['dados' => $jejumIntermitenteProgramacao ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->jejumIntermitenteProgramacaoService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->jejumIntermitenteProgramacaoService->delete($id);
return redirect('/index');
}
}
