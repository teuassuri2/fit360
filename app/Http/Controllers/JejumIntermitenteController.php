<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreJejumIntermitenteRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\JejumIntermitenteJsonResource;
use App\Http\Resources\JejumIntermitenteResource;use App\Models\JejumIntermitente;
use App\Models\Vendedor; 
use App\Services\JejumIntermitenteService;
class JejumIntermitenteController extends Controller { 
private JejumIntermitenteService $jejumIntermitenteService; 
public function __construct(JejumIntermitenteService $jejumIntermitenteService) {$this->jejumIntermitenteService = $jejumIntermitenteService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$jejumIntermitente = $this->jejumIntermitenteService->findAll();
return response()->json(new JejumIntermitenteResource($jejumIntermitente), 200);
}
}
public function index() {
$jejumIntermitente = $this->jejumIntermitenteService->findAll();
return view('jejum_intermitente.index', ['jejum_intermitente' => $jejumIntermitente ]);}
public function storeApi(StoreJejumIntermitenteRequest $request) {if ($request->isMethod("post")) {$jejumIntermitente = $this->jejumIntermitenteService->create($request->validated());return response()->json(new JejumIntermitenteJsonResource($jejumIntermitente), 200);}
}
public function editApi(JejumIntermitente$jejumIntermitente ,StoreJejumIntermitenteRequest $request) {if ($request->isMethod("post")) {$jejumIntermitente = $this->jejumIntermitenteService->update($jejumIntermitente,$request->validated());return response()->json(new JejumIntermitenteJsonResource($jejumIntermitente), 200);}
}
public function store(StoreJejumIntermitenteRequest $request) {if ($request->isMethod("post")) {$jejumIntermitente = $this->jejumIntermitenteService->create($request->validated());}
return view('jejum_intermitente.add');}
public function edit(JejumIntermitente$jejumIntermitente ,StoreJejumIntermitenteRequest $request) {if ($request->isMethod("post")) {$jejumIntermitente = $this->jejumIntermitenteService->update($jejumIntermitente,$request->validated());}
return view('jejum_intermitente.edit', ['dados' => $jejumIntermitente ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->jejumIntermitenteService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->jejumIntermitenteService->delete($id);
return redirect('/index');
}
}
