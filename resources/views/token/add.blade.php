@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">token</h4>
                                <p class="card-title-desc">token</p><form action="/token/cadastrar" class="custom-validation" method="POST"><label class="form-label">cliente_id</label>
					<select name="cliente_id" class="form-control select2">
						<optgroup label="cliente_id">
							@foreach($cliente as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<label class="form-label">registro_Id</label>
					<select name="registro_Id" class="form-control select2">
						<optgroup label="registro_Id">
							@foreach($registro as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">plataforma</label>
                                        <input type="text" class="form-control" required placeholder="plataforma" name="plataforma" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">device</label>
                                        <input type="text" class="form-control" required placeholder="device" name="device" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">model</label>
                                        <input type="text" class="form-control" required placeholder="model" name="model" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">platform</label>
                                        <input type="text" class="form-control" required placeholder="platform" name="platform" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">uuid</label>
                                        <input type="text" class="form-control" required placeholder="uuid" name="uuid" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">version</label>
                                        <input type="text" class="form-control" required placeholder="version" name="version" value=""/>
                                    </div>
<div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Cadastrar
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