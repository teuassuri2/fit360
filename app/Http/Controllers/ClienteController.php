<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\ClienteJsonResource;
use App\Http\Resources\ClienteResource;use App\Models\Cliente;
use App\Models\Vendedor; 
use App\Services\ClienteService;
class ClienteController extends Controller { 
private ClienteService $clienteService; 
public function __construct(ClienteService $clienteService) {$this->clienteService = $clienteService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$cliente = $this->clienteService->findAll();
return response()->json(new ClienteResource($cliente), 200);
}
}
public function index() {
$cliente = $this->clienteService->findAll();
return view('cliente.index', ['cliente' => $cliente ]);}
public function storeApi(StoreClienteRequest $request) {if ($request->isMethod("post")) {$cliente = $this->clienteService->create($request->validated());return response()->json(new ClienteJsonResource($cliente), 200);}
}
public function editApi(Cliente$cliente ,StoreClienteRequest $request) {if ($request->isMethod("post")) {$cliente = $this->clienteService->update($cliente,$request->validated());return response()->json(new ClienteJsonResource($cliente), 200);}
}
public function store(StoreClienteRequest $request) {if ($request->isMethod("post")) {$cliente = $this->clienteService->create($request->validated());}
return view('cliente.add');}
public function edit(Cliente$cliente ,StoreClienteRequest $request) {if ($request->isMethod("post")) {$cliente = $this->clienteService->update($cliente,$request->validated());}
return view('cliente.edit', ['dados' => $cliente ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->clienteService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->clienteService->delete($id);
return redirect('/index');
}
}
