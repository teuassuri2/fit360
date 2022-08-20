@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">desafio_participante</h4>
                                <p class="card-title-desc">desafio_participante</p><form action="/desafio_participante/cadastrar" class="custom-validation" method="POST"><label class="form-label">desafio_id</label>
					<select name="desafio_id" class="form-control select2">
						<optgroup label="desafio_id">
							@foreach($desafio as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<label class="form-label">usuario_id</label>
					<select name="usuario_id" class="form-control select2">
						<optgroup label="usuario_id">
							@foreach($usuario as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">id_transacao</label>
                                        <input type="text" class="form-control" required placeholder="id_transacao" name="id_transacao" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">email_disparado</label>
                                        <input type="text" class="form-control" required placeholder="email_disparado" name="email_disparado" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">email_venda</label>
                                        <input type="text" class="form-control" required placeholder="email_venda" name="email_venda" value=""/>
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