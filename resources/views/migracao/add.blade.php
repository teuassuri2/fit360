@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">migracao</h4>
                                <p class="card-title-desc">migracao</p><form action="/migracao/cadastrar" class="custom-validation" method="POST"><div class="mb-3">
                                        <label class="form-label">nome</label>
                                        <input type="text" class="form-control" required placeholder="nome" name="nome" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">email</label>
                                        <input type="text" class="form-control" required placeholder="email" name="email" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">telefone</label>
                                        <input type="text" class="form-control" required placeholder="telefone" name="telefone" value=""/>
                                    </div>
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