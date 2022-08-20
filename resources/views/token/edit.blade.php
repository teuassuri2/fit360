@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">token</h4>
                                <p class="card-title-desc">token</p><form action="/token/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$token->id}}" name="id"><label class="form-label">cliente_id</label>
					<select name="cliente_id" class="form-control select2">
						<optgroup label="cliente_id">
							@foreach($cliente as $dados)
								@if ($dados->id == $token->cliente_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<label class="form-label">registro_Id</label>
					<select name="registro_Id" class="form-control select2">
						<optgroup label="registro_Id">
							@foreach($registro as $dados)
								@if ($dados->id == $token->registro_Id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">plataforma</label>
                                        <input type="text" class="form-control" required placeholder="plataforma" name="plataforma" value="{{$token->plataforma}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">device</label>
                                        <input type="text" class="form-control" required placeholder="device" name="device" value="{{$token->device}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">model</label>
                                        <input type="text" class="form-control" required placeholder="model" name="model" value="{{$token->model}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">platform</label>
                                        <input type="text" class="form-control" required placeholder="platform" name="platform" value="{{$token->platform}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">uuid</label>
                                        <input type="text" class="form-control" required placeholder="uuid" name="uuid" value="{{$token->uuid}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">version</label>
                                        <input type="text" class="form-control" required placeholder="version" name="version" value="{{$token->version}}"/>
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