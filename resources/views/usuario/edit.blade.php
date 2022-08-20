@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">usuario</h4>
                                <p class="card-title-desc">usuario</p><form action="/usuario/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$usuario->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">nome</label>
                                        <input type="text" class="form-control" required placeholder="nome" name="nome" value="{{$usuario->nome}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">cidade</label>
                                        <input type="text" class="form-control" required placeholder="cidade" name="cidade" value="{{$usuario->cidade}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">email</label>
                                        <input type="text" class="form-control" required placeholder="email" name="email" value="{{$usuario->email}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">senha</label>
                                        <input type="text" class="form-control" required placeholder="senha" name="senha" value="{{$usuario->senha}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">telefone</label>
                                        <input type="text" class="form-control" required placeholder="telefone" name="telefone" value="{{$usuario->telefone}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">peso_atual</label>
                                        <input type="text" class="form-control" required placeholder="peso_atual" name="peso_atual" value="{{$usuario->peso_atual}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">peso_desejado</label>
                                        <input type="text" class="form-control" required placeholder="peso_desejado" name="peso_desejado" value="{{$usuario->peso_desejado}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value="{{$usuario->imagem}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem_perfil</label>
                                        <input type="text" class="form-control" required placeholder="imagem_perfil" name="imagem_perfil" value="{{$usuario->imagem_perfil}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">sexo</label>
                                        <input type="text" class="form-control" required placeholder="sexo" name="sexo" value="{{$usuario->sexo}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">data_nascimento</label>
                                        <input type="text" class="form-control" required placeholder="data_nascimento" name="data_nascimento" value="{{$usuario->data_nascimento}}"/>
                                    </div>
<label class="form-label">cliente_id</label>
					<select name="cliente_id" class="form-control select2">
						<optgroup label="cliente_id">
							@foreach($cliente as $dados)
								@if ($dados->id == $usuario->cliente_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<label class="form-label">token_id</label>
					<select name="token_id" class="form-control select2">
						<optgroup label="token_id">
							@foreach($token as $dados)
								@if ($dados->id == $usuario->token_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">envio_whtasapp</label>
                                        <input type="text" class="form-control" required placeholder="envio_whtasapp" name="envio_whtasapp" value="{{$usuario->envio_whtasapp}}"/>
                                    </div>
<div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Alterar
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Cancelar
                                        </button>
                                    </div></form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				</div> <!-- container-fluid -->
</div>
            @stop
		@stop