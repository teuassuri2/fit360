<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreDesafioRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\DesafioJsonResource;
use App\Http\Resources\DesafioResource;use App\Models\Desafio;
use App\Models\Vendedor; 
use App\Services\DesafioService;
class DesafioController extends Controller { 
private DesafioService $desafioService; 
public function __construct(DesafioService $desafioService) {$this->desafioService = $desafioService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$desafio = $this->desafioService->findAll();
return response()->json(new DesafioResource($desafio), 200);
}
}
public function index() {
$desafio = $this->desafioService->findAll();
return view('desafio.index', ['desafio' => $desafio ]);}
public function storeApi(StoreDesafioRequest $request) {if ($request->isMethod("post")) {$desafio = $this->desafioService->store($request->validated());return response()->json(new DesafioJsonResource($desafio), 200);}
}
public function editApi(Desafio$desafio ,StoreDesafioRequest $request) {if ($request->isMethod("post")) {$desafio = $this->desafioService->update($desafio,$request->validated());return response()->json(new DesafioJsonResource($desafio), 200);}
}
public function store(StoreDesafioRequest $request) {if ($request->isMethod("post")) {$desafio = $this->desafioService->store($request->validated());}
return view('desafio.add');}
public function edit(Desafio$desafio ,StoreDesafioRequest $request) {if ($request->isMethod("post")) {$desafio = $this->desafioService->update($desafio,$request->validated());}
return view('desafio.edit', ['dados' => $desafio ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->desafioService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->desafioService->delete($id);
return redirect('/index');
}
}
