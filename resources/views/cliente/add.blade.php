@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">cliente</h4>
                                <p class="card-title-desc">cliente</p><form action="/cliente/cadastrar" class="custom-validation" method="POST"><div class="mb-3">
                                        <label class="form-label">nome</label>
                                        <input type="text" class="form-control" required placeholder="nome" name="nome" value=""/>
                                    </div>
<label class="form-label">cliente_id</label>
					<select name="cliente_id" class="form-control select2">
						<optgroup label="cliente_id">
							@foreach($cliente as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
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