@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">peso_medida</h4>
                                <p class="card-title-desc">peso_medida</p><form action="/peso_medida/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$peso_medida->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">peso</label>
                                        <input type="text" class="form-control" required placeholder="peso" name="peso" value="{{$peso_medida->peso}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value="{{$peso_medida->imagem}}"/>
                                    </div>
<label class="form-label">usuario_id</label>
					<select name="usuario_id" class="form-control select2">
						<optgroup label="usuario_id">
							@foreach($usuario as $dados)
								@if ($dados->id == $peso_medida->usuario_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">quadril</label>
                                        <input type="text" class="form-control" required placeholder="quadril" name="quadril" value="{{$peso_medida->quadril}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">cintura</label>
                                        <input type="text" class="form-control" required placeholder="cintura" name="cintura" value="{{$peso_medida->cintura}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">torax</label>
                                        <input type="text" class="form-control" required placeholder="torax" name="torax" value="{{$peso_medida->torax}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">braco_direito</label>
                                        <input type="text" class="form-control" required placeholder="braco_direito" name="braco_direito" value="{{$peso_medida->braco_direito}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">braco_esquerdo</label>
                                        <input type="text" class="form-control" required placeholder="braco_esquerdo" name="braco_esquerdo" value="{{$peso_medida->braco_esquerdo}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">abdomen</label>
                                        <input type="text" class="form-control" required placeholder="abdomen" name="abdomen" value="{{$peso_medida->abdomen}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">coxas</label>
                                        <input type="text" class="form-control" required placeholder="coxas" name="coxas" value="{{$peso_medida->coxas}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">panturilha</label>
                                        <input type="text" class="form-control" required placeholder="panturilha" name="panturilha" value="{{$peso_medida->panturilha}}"/>
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