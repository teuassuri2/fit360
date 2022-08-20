@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">jejum_intermitente_programacao</h4>
                                <p class="card-title-desc">jejum_intermitente_programacao</p><form action="/jejum_intermitente_programacao/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$jejum_intermitente_programacao->id}}" name="id"><label class="form-label">jejum_intermitente_id</label>
					<select name="jejum_intermitente_id" class="form-control select2">
						<optgroup label="jejum_intermitente_id">
							@foreach($jejumIntermitente as $dados)
								@if ($dados->id == $jejum_intermitente_programacao->jejum_intermitente_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">hora_inicio</label>
                                        <input type="text" class="form-control" required placeholder="hora_inicio" name="hora_inicio" value="{{$jejum_intermitente_programacao->hora_inicio}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">hora_fim</label>
                                        <input type="text" class="form-control" required placeholder="hora_fim" name="hora_fim" value="{{$jejum_intermitente_programacao->hora_fim}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">total</label>
                                        <input type="text" class="form-control" required placeholder="total" name="total" value="{{$jejum_intermitente_programacao->total}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">dia</label>
                                        <input type="text" class="form-control" required placeholder="dia" name="dia" value="{{$jejum_intermitente_programacao->dia}}"/>
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