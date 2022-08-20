@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">desafio_dia_concluido</h4>
                                <p class="card-title-desc">desafio_dia_concluido</p><form action="/desafio_dia_concluido/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$desafio_dia_concluido->id}}" name="id"><label class="form-label">usuario_id</label>
					<select name="usuario_id" class="form-control select2">
						<optgroup label="usuario_id">
							@foreach($usuario as $dados)
								@if ($dados->id == $desafio_dia_concluido->usuario_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<label class="form-label">desafio_id</label>
					<select name="desafio_id" class="form-control select2">
						<optgroup label="desafio_id">
							@foreach($desafio as $dados)
								@if ($dados->id == $desafio_dia_concluido->desafio_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">dia</label>
                                        <input type="text" class="form-control" required placeholder="dia" name="dia" value="{{$desafio_dia_concluido->dia}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">nota</label>
                                        <input type="text" class="form-control" required placeholder="nota" name="nota" value="{{$desafio_dia_concluido->nota}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">peso</label>
                                        <input type="text" class="form-control" required placeholder="peso" name="peso" value="{{$desafio_dia_concluido->peso}}"/>
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