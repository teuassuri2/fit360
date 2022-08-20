@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">desafio</h4>
                                <p class="card-title-desc">desafio</p><form action="/desafio/cadastrar" class="custom-validation" method="POST"><div class="mb-3">
                                        <label class="form-label">nome</label>
                                        <input type="text" class="form-control" required placeholder="nome" name="nome" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">texto</label>
                                        <input type="text" class="form-control" required placeholder="texto" name="texto" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">video</label>
                                        <input type="text" class="form-control" required placeholder="video" name="video" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">valor_inicial</label>
                                        <input type="text" class="form-control" required placeholder="valor_inicial" name="valor_inicial" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">valor_final</label>
                                        <input type="text" class="form-control" required placeholder="valor_final" name="valor_final" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">dias</label>
                                        <input type="text" class="form-control" required placeholder="dias" name="dias" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">pago</label>
                                        <input type="text" class="form-control" required placeholder="pago" name="pago" value=""/>
                                    </div>
<label class="form-label">cliente_id</label>
					<select name="cliente_id" class="form-control select2">
						<optgroup label="cliente_id">
							@foreach($cliente as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">vimeo</label>
                                        <input type="text" class="form-control" required placeholder="vimeo" name="vimeo" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">ordem</label>
                                        <input type="text" class="form-control" required placeholder="ordem" name="ordem" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">dia_solicitacao_peso</label>
                                        <input type="text" class="form-control" required placeholder="dia_solicitacao_peso" name="dia_solicitacao_peso" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">status</label>
                                        <input type="text" class="form-control" required placeholder="status" name="status" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">valor_final_dia</label>
                                        <input type="text" class="form-control" required placeholder="valor_final_dia" name="valor_final_dia" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">texto_site</label>
                                        <input type="text" class="form-control" required placeholder="texto_site" name="texto_site" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">desafio</label>
                                        <input type="text" class="form-control" required placeholder="desafio" name="desafio" value=""/>
                                    </div>
<label class="form-label">desafio_tipo_id</label>
					<select name="desafio_tipo_id" class="form-control select2">
						<optgroup label="desafio_tipo_id">
							@foreach($desafioTipo as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">professor</label>
                                        <input type="text" class="form-control" required placeholder="professor" name="professor" value=""/>
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