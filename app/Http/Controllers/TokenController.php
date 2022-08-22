<?php
            namespace App\Http\Controllers;

use App\Http\Requests\StoreTokenRequest;
use Illuminate\Http\Request;
 
use App\Http\Resources\TokenJsonResource;
use App\Http\Resources\TokenResource;use App\Models\Token;
use App\Models\Vendedor; 
use App\Services\TokenService;
class TokenController extends Controller { 
private TokenService $tokenService; 
public function __construct(TokenService $tokenService) {$this->tokenService = $tokenService; 
}
public function indexApi(Request $request) {
if ($request->isMethod("post")) {$token = $this->tokenService->findAll();
return response()->json(new TokenResource($token), 200);
}
}
public function index() {
$token = $this->tokenService->findAll();
return view('token.index', ['token' => $token ]);}
public function storeApi(StoreTokenRequest $request) {if ($request->isMethod("post")) {$token = $this->tokenService->create($request->validated());return response()->json(new TokenJsonResource($token), 200);}
}
public function editApi(Token$token ,StoreTokenRequest $request) {if ($request->isMethod("post")) {$token = $this->tokenService->update($token,$request->validated());return response()->json(new TokenJsonResource($token), 200);}
}
public function store(StoreTokenRequest $request) {if ($request->isMethod("post")) {$token = $this->tokenService->create($request->validated());}
return view('token.add');}
public function edit(Token$token ,StoreTokenRequest $request) {if ($request->isMethod("post")) {$token = $this->tokenService->update($token,$request->validated());}
return view('token.edit', ['dados' => $token ]);}
public function deleteApi(int $id) {if ($request->isMethod("post")) {$this->tokenService->delete($id);
return response()->json((true), 200);
}
}
public function delete(int $id) {$this->tokenService->delete($id);
return redirect('/index');
}
}
