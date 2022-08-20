@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">migrations</h4>
                                <p class="card-title-desc">migrations</p><form action="/migrations/cadastrar" class="custom-validation" method="POST"><div class="mb-3">
                                        <label class="form-label">migration</label>
                                        <input type="text" class="form-control" required placeholder="migration" name="migration" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">batch</label>
                                        <input type="text" class="form-control" required placeholder="batch" name="batch" value=""/>
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