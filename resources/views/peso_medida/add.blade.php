@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">peso_medida</h4>
                                <p class="card-title-desc">peso_medida</p><form action="/peso_medida/cadastrar" class="custom-validation" method="POST"><div class="mb-3">
                                        <label class="form-label">peso</label>
                                        <input type="text" class="form-control" required placeholder="peso" name="peso" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">imagem</label>
                                        <input type="text" class="form-control" required placeholder="imagem" name="imagem" value=""/>
                                    </div>
<label class="form-label">usuario_id</label>
					<select name="usuario_id" class="form-control select2">
						<optgroup label="usuario_id">
							@foreach($usuario as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">quadril</label>
                                        <input type="text" class="form-control" required placeholder="quadril" name="quadril" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">cintura</label>
                                        <input type="text" class="form-control" required placeholder="cintura" name="cintura" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">torax</label>
                                        <input type="text" class="form-control" required placeholder="torax" name="torax" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">braco_direito</label>
                                        <input type="text" class="form-control" required placeholder="braco_direito" name="braco_direito" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">braco_esquerdo</label>
                                        <input type="text" class="form-control" required placeholder="braco_esquerdo" name="braco_esquerdo" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">abdomen</label>
                                        <input type="text" class="form-control" required placeholder="abdomen" name="abdomen" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">coxas</label>
                                        <input type="text" class="form-control" required placeholder="coxas" name="coxas" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">panturilha</label>
                                        <input type="text" class="form-control" required placeholder="panturilha" name="panturilha" value=""/>
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