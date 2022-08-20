@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">receita</h4>
                                <p class="card-title-desc">receita</p><form action="/receita/cadastrar" class="custom-validation" method="POST"><div class="mb-3">
                                        <label class="form-label">titulo</label>
                                        <input type="text" class="form-control" required placeholder="titulo" name="titulo" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">ingredientes</label>
                                        <input type="text" class="form-control" required placeholder="ingredientes" name="ingredientes" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">preparo</label>
                                        <input type="text" class="form-control" required placeholder="preparo" name="preparo" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">obs</label>
                                        <input type="text" class="form-control" required placeholder="obs" name="obs" value=""/>
                                    </div>
<label class="form-label">receita_sub_categoria_id</label>
					<select name="receita_sub_categoria_id" class="form-control select2">
						<optgroup label="receita_sub_categoria_id">
							@foreach($receitaSubCategoria as $dados)
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