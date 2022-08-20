@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">usuario_sistema</h4>
                                <p class="card-title-desc">usuario_sistema</p><form action="/usuario_sistema/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$usuario_sistema->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">nome</label>
                                        <input type="text" class="form-control" required placeholder="nome" name="nome" value="{{$usuario_sistema->nome}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">email</label>
                                        <input type="text" class="form-control" required placeholder="email" name="email" value="{{$usuario_sistema->email}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">senha</label>
                                        <input type="text" class="form-control" required placeholder="senha" name="senha" value="{{$usuario_sistema->senha}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">status</label>
                                        <input type="text" class="form-control" required placeholder="status" name="status" value="{{$usuario_sistema->status}}"/>
                                    </div>
<label class="form-label">cliente_id</label>
					<select name="cliente_id" class="form-control select2">
						<optgroup label="cliente_id">
							@foreach($cliente as $dados)
								@if ($dados->id == $usuario_sistema->cliente_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
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