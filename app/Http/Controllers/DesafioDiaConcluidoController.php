<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreDesafioDiaConcluidoRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\DesafioDiaConcluidoJsonResource;
use App\Http\Resources\DesafioDiaConcluidoResource;use App\Models\DesafioDiaConcluido;
use App\Models\Vendedor; 
use App\Services\DesafioDiaConcluidoService;
class DesafioDiaConcluidoController extends Controller { 
private DesafioDiaConcluidoService $desafioDiaConcluidoService; 
public function __construct(DesafioDiaConcluidoService $desafioDiaConcluidoService) {$this->desafioDiaConcluidoService = $desafioDiaConcluidoService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$desafioDiaConcluido = $this->desafioDiaConcluidoService->findAll();
return response()->json(new DesafioDiaConcluidoResource($desafioDiaConcluido), 200);
}
}
public function index() {
$desafioDiaConcluido = $this->desafioDiaConcluidoService->findAll();
return view('desafio_dia_concluido.index', ['desafio_dia_concluido' => $desafioDiaConcluido ]);}
public function storeApi(StoreDesafioDiaConcluidoRequest $request) {if ($request->isMethod("post")) {$desafioDiaConcluido = $this->desafioDiaConcluidoService->store($request->validated());return response()->json(new DesafioDiaConcluidoJsonResource($desafioDiaConcluido), 200);}
}
public function editApi(DesafioDiaConcluido$desafioDiaConcluido ,StoreDesafioDiaConcluidoRequest $request) {if ($request->isMethod("post")) {$desafioDiaConcluido = $this->desafioDiaConcluidoService->update($desafioDiaConcluido,$request->validated());return response()->json(new DesafioDiaConcluidoJsonResource($desafioDiaConcluido), 200);}
}
public function store(StoreDesafioDiaConcluidoRequest $request) {if ($request->isMethod("post")) {$desafioDiaConcluido = $this->desafioDiaConcluidoService->store($request->validated());}
return view('desafio_dia_concluido.add');}
public function edit(DesafioDiaConcluido$desafioDiaConcluido ,StoreDesafioDiaConcluidoRequest $request) {if ($request->isMethod("post")) {$desafioDiaConcluido = $this->desafioDiaConcluidoService->update($desafioDiaConcluido,$request->validated());}
return view('desafio_dia_concluido.edit', ['dados' => $desafioDiaConcluido ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->desafioDiaConcluidoService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->desafioDiaConcluidoService->delete($id);
return redirect('/index');
}
}
