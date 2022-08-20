@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">password_resets</h4>
                                <p class="card-title-desc">password_resets</p><form action="/password_resets/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$password_resets->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">email</label>
                                        <input type="text" class="form-control" required placeholder="email" name="email" value="{{$password_resets->email}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">token</label>
                                        <input type="text" class="form-control" required placeholder="token" name="token" value="{{$password_resets->token}}"/>
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