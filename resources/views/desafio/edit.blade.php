@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">desafio</h4>
                                <p class="card-title-desc">desafio</p><form action="/desafio/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$desafio->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">nome</label>
                                        <input type="text" class="form-control" required placeholder="nome" name="nome" value="{{$desafio->nome}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">texto</label>
                                        <input type="text" class="form-control" required placeholder="texto" name="texto" value="{{$desafio->texto}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">video</label>
                                        <input type="text" class="form-control" required placeholder="video" name="video" value="{{$desafio->video}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value="{{$desafio->imagem}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">valor_inicial</label>
                                        <input type="text" class="form-control" required placeholder="valor_inicial" name="valor_inicial" value="{{$desafio->valor_inicial}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">valor_final</label>
                                        <input type="text" class="form-control" required placeholder="valor_final" name="valor_final" value="{{$desafio->valor_final}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">dias</label>
                                        <input type="text" class="form-control" required placeholder="dias" name="dias" value="{{$desafio->dias}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">pago</label>
                                        <input type="text" class="form-control" required placeholder="pago" name="pago" value="{{$desafio->pago}}"/>
                                    </div>
<label class="form-label">cliente_id</label>
					<select name="cliente_id" class="form-control select2">
						<optgroup label="cliente_id">
							@foreach($cliente as $dados)
								@if ($dados->id == $desafio->cliente_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">vimeo</label>
                                        <input type="text" class="form-control" required placeholder="vimeo" name="vimeo" value="{{$desafio->vimeo}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">ordem</label>
                                        <input type="text" class="form-control" required placeholder="ordem" name="ordem" value="{{$desafio->ordem}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">dia_solicitacao_peso</label>
                                        <input type="text" class="form-control" required placeholder="dia_solicitacao_peso" name="dia_solicitacao_peso" value="{{$desafio->dia_solicitacao_peso}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">status</label>
                                        <input type="text" class="form-control" required placeholder="status" name="status" value="{{$desafio->status}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">valor_final_dia</label>
                                        <input type="text" class="form-control" required placeholder="valor_final_dia" name="valor_final_dia" value="{{$desafio->valor_final_dia}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">texto_site</label>
                                        <input type="text" class="form-control" required placeholder="texto_site" name="texto_site" value="{{$desafio->texto_site}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">desafio</label>
                                        <input type="text" class="form-control" required placeholder="desafio" name="desafio" value="{{$desafio->desafio}}"/>
                                    </div>
<label class="form-label">desafio_tipo_id</label>
					<select name="desafio_tipo_id" class="form-control select2">
						<optgroup label="desafio_tipo_id">
							@foreach($desafioTipo as $dados)
								@if ($dados->id == $desafio->desafio_tipo_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">professor</label>
                                        <input type="text" class="form-control" required placeholder="professor" name="professor" value="{{$desafio->professor}}"/>
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