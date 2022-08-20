@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">fale_conosco</h4>
                                <p class="card-title-desc">fale_conosco</p><form action="/fale_conosco/cadastrar" class="custom-validation" method="POST"><label class="form-label">usuario_id</label>
					<select name="usuario_id" class="form-control select2">
						<optgroup label="usuario_id">
							@foreach($usuario as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">opcao</label>
                                        <input type="text" class="form-control" required placeholder="opcao" name="opcao" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">texto</label>
                                        <input type="text" class="form-control" required placeholder="texto" name="texto" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">data_consulta</label>
                                        <input type="text" class="form-control" required placeholder="data_consulta" name="data_consulta" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">nota</label>
                                        <input type="text" class="form-control" required placeholder="nota" name="nota" value=""/>
                                    </div>
<label class="form-label">desafio_id</label>
					<select name="desafio_id" class="form-control select2">
						<optgroup label="desafio_id">
							@foreach($desafio as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">status</label>
                                        <input type="text" class="form-control" required placeholder="status" name="status" value=""/>
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