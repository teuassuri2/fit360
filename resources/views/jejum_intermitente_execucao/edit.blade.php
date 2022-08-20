@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">jejum_intermitente_execucao</h4>
                                <p class="card-title-desc">jejum_intermitente_execucao</p><form action="/jejum_intermitente_execucao/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$jejum_intermitente_execucao->id}}" name="id"><label class="form-label">usuario_id</label>
					<select name="usuario_id" class="form-control select2">
						<optgroup label="usuario_id">
							@foreach($usuario as $dados)
								@if ($dados->id == $jejum_intermitente_execucao->usuario_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">horas</label>
                                        <input type="text" class="form-control" required placeholder="horas" name="horas" value="{{$jejum_intermitente_execucao->horas}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">data_hora_fim</label>
                                        <input type="text" class="form-control" required placeholder="data_hora_fim" name="data_hora_fim" value="{{$jejum_intermitente_execucao->data_hora_fim}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">status</label>
                                        <input type="text" class="form-control" required placeholder="status" name="status" value="{{$jejum_intermitente_execucao->status}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">peso_inicial</label>
                                        <input type="text" class="form-control" required placeholder="peso_inicial" name="peso_inicial" value="{{$jejum_intermitente_execucao->peso_inicial}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">peso_final</label>
                                        <input type="text" class="form-control" required placeholder="peso_final" name="peso_final" value="{{$jejum_intermitente_execucao->peso_final}}"/>
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