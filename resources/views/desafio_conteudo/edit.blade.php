@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">desafio_conteudo</h4>
                                <p class="card-title-desc">desafio_conteudo</p><form action="/desafio_conteudo/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$desafio_conteudo->id}}" name="id"><label class="form-label">desafio_id</label>
					<select name="desafio_id" class="form-control select2">
						<optgroup label="desafio_id">
							@foreach($desafio as $dados)
								@if ($dados->id == $desafio_conteudo->desafio_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">dia</label>
                                        <input type="text" class="form-control" required placeholder="dia" name="dia" value="{{$desafio_conteudo->dia}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">hora</label>
                                        <input type="text" class="form-control" required placeholder="hora" name="hora" value="{{$desafio_conteudo->hora}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">titulo</label>
                                        <input type="text" class="form-control" required placeholder="titulo" name="titulo" value="{{$desafio_conteudo->titulo}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">texto</label>
                                        <input type="text" class="form-control" required placeholder="texto" name="texto" value="{{$desafio_conteudo->texto}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value="{{$desafio_conteudo->imagem}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">video</label>
                                        <input type="text" class="form-control" required placeholder="video" name="video" value="{{$desafio_conteudo->video}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">ordem</label>
                                        <input type="text" class="form-control" required placeholder="ordem" name="ordem" value="{{$desafio_conteudo->ordem}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">vimeo</label>
                                        <input type="text" class="form-control" required placeholder="vimeo" name="vimeo" value="{{$desafio_conteudo->vimeo}}"/>
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