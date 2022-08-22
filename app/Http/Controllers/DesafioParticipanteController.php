<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreDesafioParticipanteRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\DesafioParticipanteJsonResource;
use App\Http\Resources\DesafioParticipanteResource;use App\Models\DesafioParticipante;
use App\Models\Vendedor; 
use App\Services\DesafioParticipanteService;
class DesafioParticipanteController extends Controller { 
private DesafioParticipanteService $desafioParticipanteService; 
public function __construct(DesafioParticipanteService $desafioParticipanteService) {$this->desafioParticipanteService = $desafioParticipanteService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$desafioParticipante = $this->desafioParticipanteService->findAll();
return response()->json(new DesafioParticipanteResource($desafioParticipante), 200);
}
}
public function index() {
$desafioParticipante = $this->desafioParticipanteService->findAll();
return view('desafio_participante.index', ['desafio_participante' => $desafioParticipante ]);}
public function storeApi(StoreDesafioParticipanteRequest $request) {if ($request->isMethod("post")) {$desafioParticipante = $this->desafioParticipanteService->create($request->validated());return response()->json(new DesafioParticipanteJsonResource($desafioParticipante), 200);}
}
public function editApi(DesafioParticipante$desafioParticipante ,StoreDesafioParticipanteRequest $request) {if ($request->isMethod("post")) {$desafioParticipante = $this->desafioParticipanteService->update($desafioParticipante,$request->validated());return response()->json(new DesafioParticipanteJsonResource($desafioParticipante), 200);}
}
public function store(StoreDesafioParticipanteRequest $request) {if ($request->isMethod("post")) {$desafioParticipante = $this->desafioParticipanteService->create($request->validated());}
return view('desafio_participante.add');}
public function edit(DesafioParticipante$desafioParticipante ,StoreDesafioParticipanteRequest $request) {if ($request->isMethod("post")) {$desafioParticipante = $this->desafioParticipanteService->update($desafioParticipante,$request->validated());}
return view('desafio_participante.edit', ['dados' => $desafioParticipante ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->desafioParticipanteService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->desafioParticipanteService->delete($id);
return redirect('/index');
}
}
