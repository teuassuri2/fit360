@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">jejum_intermitente_execucao</h4>
                                <p class="card-title-desc">jejum_intermitente_execucao</p><form action="/jejum_intermitente_execucao/cadastrar" class="custom-validation" method="POST"><label class="form-label">usuario_id</label>
					<select name="usuario_id" class="form-control select2">
						<optgroup label="usuario_id">
							@foreach($usuario as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">horas</label>
                                        <input type="text" class="form-control" required placeholder="horas" name="horas" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">data_hora_fim</label>
                                        <input type="text" class="form-control" required placeholder="data_hora_fim" name="data_hora_fim" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">status</label>
                                        <input type="text" class="form-control" required placeholder="status" name="status" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">peso_inicial</label>
                                        <input type="text" class="form-control" required placeholder="peso_inicial" name="peso_inicial" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">peso_final</label>
                                        <input type="text" class="form-control" required placeholder="peso_final" name="peso_final" value=""/>
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