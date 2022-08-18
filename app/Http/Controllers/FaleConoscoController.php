<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreFaleConoscoRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\FaleConoscoJsonResource;
use App\Http\Resources\FaleConoscoResource;use App\Models\FaleConosco;
use App\Models\Vendedor; 
use App\Services\FaleConoscoService;
class FaleConoscoController extends Controller { 
private FaleConoscoService $faleConoscoService; 
public function __construct(FaleConoscoService $faleConoscoService) {$this->faleConoscoService = $faleConoscoService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$faleConosco = $this->faleConoscoService->findAll();
return response()->json(new FaleConoscoResource($faleConosco), 200);
}
}
public function index() {
$faleConosco = $this->faleConoscoService->findAll();
return view('fale_conosco.index', ['fale_conosco' => $faleConosco ]);}
public function storeApi(StoreFaleConoscoRequest $request) {if ($request->isMethod("post")) {$faleConosco = $this->faleConoscoService->store($request->validated());return response()->json(new FaleConoscoJsonResource($faleConosco), 200);}
}
public function editApi(FaleConosco$faleConosco ,StoreFaleConoscoRequest $request) {if ($request->isMethod("post")) {$faleConosco = $this->faleConoscoService->update($faleConosco,$request->validated());return response()->json(new FaleConoscoJsonResource($faleConosco), 200);}
}
public function store(StoreFaleConoscoRequest $request) {if ($request->isMethod("post")) {$faleConosco = $this->faleConoscoService->store($request->validated());}
return view('fale_conosco.add');}
public function edit(FaleConosco$faleConosco ,StoreFaleConoscoRequest $request) {if ($request->isMethod("post")) {$faleConosco = $this->faleConoscoService->update($faleConosco,$request->validated());}
return view('fale_conosco.edit', ['dados' => $faleConosco ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->faleConoscoService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->faleConoscoService->delete($id);
return redirect('/index');
}
}
