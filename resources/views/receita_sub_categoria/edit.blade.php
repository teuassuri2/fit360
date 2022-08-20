@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">receita_sub_categoria</h4>
                                <p class="card-title-desc">receita_sub_categoria</p><form action="/receita_sub_categoria/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$receita_sub_categoria->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">nome</label>
                                        <input type="text" class="form-control" required placeholder="nome" name="nome" value="{{$receita_sub_categoria->nome}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value="{{$receita_sub_categoria->imagem}}"/>
                                    </div>
<label class="form-label">receita_categoria_id</label>
					<select name="receita_categoria_id" class="form-control select2">
						<optgroup label="receita_categoria_id">
							@foreach($receitaCategoria as $dados)
								@if ($dados->id == $receita_sub_categoria->receita_categoria_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
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