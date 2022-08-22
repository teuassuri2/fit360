<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreMuralRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\MuralJsonResource;
use App\Http\Resources\MuralResource;use App\Models\Mural;
use App\Models\Vendedor; 
use App\Services\MuralService;
class MuralController extends Controller { 
private MuralService $muralService; 
public function __construct(MuralService $muralService) {$this->muralService = $muralService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$mural = $this->muralService->findAll();
return response()->json(new MuralResource($mural), 200);
}
}
public function index() {
$mural = $this->muralService->findAll();
return view('mural.index', ['mural' => $mural ]);}
public function storeApi(StoreMuralRequest $request) {if ($request->isMethod("post")) {$mural = $this->muralService->create($request->validated());return response()->json(new MuralJsonResource($mural), 200);}
}
public function editApi(Mural$mural ,StoreMuralRequest $request) {if ($request->isMethod("post")) {$mural = $this->muralService->update($mural,$request->validated());return response()->json(new MuralJsonResource($mural), 200);}
}
public function store(StoreMuralRequest $request) {if ($request->isMethod("post")) {$mural = $this->muralService->create($request->validated());}
return view('mural.add');}
public function edit(Mural$mural ,StoreMuralRequest $request) {if ($request->isMethod("post")) {$mural = $this->muralService->update($mural,$request->validated());}
return view('mural.edit', ['dados' => $mural ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->muralService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->muralService->delete($id);
return redirect('/index');
}
}
