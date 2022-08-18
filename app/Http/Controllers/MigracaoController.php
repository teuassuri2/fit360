<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreMigracaoRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\MigracaoJsonResource;
use App\Http\Resources\MigracaoResource;use App\Models\Migracao;
use App\Models\Vendedor; 
use App\Services\MigracaoService;
class MigracaoController extends Controller { 
private MigracaoService $migracaoService; 
public function __construct(MigracaoService $migracaoService) {$this->migracaoService = $migracaoService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$migracao = $this->migracaoService->findAll();
return response()->json(new MigracaoResource($migracao), 200);
}
}
public function index() {
$migracao = $this->migracaoService->findAll();
return view('migracao.index', ['migracao' => $migracao ]);}
public function storeApi(StoreMigracaoRequest $request) {if ($request->isMethod("post")) {$migracao = $this->migracaoService->store($request->validated());return response()->json(new MigracaoJsonResource($migracao), 200);}
}
public function editApi(Migracao$migracao ,StoreMigracaoRequest $request) {if ($request->isMethod("post")) {$migracao = $this->migracaoService->update($migracao,$request->validated());return response()->json(new MigracaoJsonResource($migracao), 200);}
}
public function store(StoreMigracaoRequest $request) {if ($request->isMethod("post")) {$migracao = $this->migracaoService->store($request->validated());}
return view('migracao.add');}
public function edit(Migracao$migracao ,StoreMigracaoRequest $request) {if ($request->isMethod("post")) {$migracao = $this->migracaoService->update($migracao,$request->validated());}
return view('migracao.edit', ['dados' => $migracao ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->migracaoService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->migracaoService->delete($id);
return redirect('/index');
}
}
