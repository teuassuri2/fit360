@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">mural</h4>
                                <p class="card-title-desc">mural</p><form action="/mural/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$mural->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">titulo</label>
                                        <input type="text" class="form-control" required placeholder="titulo" name="titulo" value="{{$mural->titulo}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">texto</label>
                                        <input type="text" class="form-control" required placeholder="texto" name="texto" value="{{$mural->texto}}"/>
                                    </div>
<label class="form-label">usuario_sistema_id</label>
					<select name="usuario_sistema_id" class="form-control select2">
						<optgroup label="usuario_sistema_id">
							@foreach($usuarioSistema as $dados)
								@if ($dados->id == $mural->usuario_sistema_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">link</label>
                                        <input type="text" class="form-control" required placeholder="link" name="link" value="{{$mural->link}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">data</label>
                                        <input type="text" class="form-control" required placeholder="data" name="data" value="{{$mural->data}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value="{{$mural->imagem}}"/>
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