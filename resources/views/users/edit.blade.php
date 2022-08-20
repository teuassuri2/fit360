@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">users</h4>
                                <p class="card-title-desc">users</p><form action="/users/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$users->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">name</label>
                                        <input type="text" class="form-control" required placeholder="name" name="name" value="{{$users->name}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">email</label>
                                        <input type="text" class="form-control" required placeholder="email" name="email" value="{{$users->email}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">email_verified_at</label>
                                        <input type="text" class="form-control" required placeholder="email_verified_at" name="email_verified_at" value="{{$users->email_verified_at}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">password</label>
                                        <input type="text" class="form-control" required placeholder="password" name="password" value="{{$users->password}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">remember_token</label>
                                        <input type="text" class="form-control" required placeholder="remember_token" name="remember_token" value="{{$users->remember_token}}"/>
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