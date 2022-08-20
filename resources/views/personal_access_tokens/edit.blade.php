@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">personal_access_tokens</h4>
                                <p class="card-title-desc">personal_access_tokens</p><form action="/personal_access_tokens/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$personal_access_tokens->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">tokenable_type</label>
                                        <input type="text" class="form-control" required placeholder="tokenable_type" name="tokenable_type" value="{{$personal_access_tokens->tokenable_type}}"/>
                                    </div>
<label class="form-label">tokenable_id</label>
					<select name="tokenable_id" class="form-control select2">
						<optgroup label="tokenable_id">
							@foreach($tokenable as $dados)
								@if ($dados->id == $personal_access_tokens->tokenable_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">name</label>
                                        <input type="text" class="form-control" required placeholder="name" name="name" value="{{$personal_access_tokens->name}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">token</label>
                                        <input type="text" class="form-control" required placeholder="token" name="token" value="{{$personal_access_tokens->token}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">abilities</label>
                                        <input type="text" class="form-control" required placeholder="abilities" name="abilities" value="{{$personal_access_tokens->abilities}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">last_used_at</label>
                                        <input type="text" class="form-control" required placeholder="last_used_at" name="last_used_at" value="{{$personal_access_tokens->last_used_at}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">expires_at</label>
                                        <input type="text" class="form-control" required placeholder="expires_at" name="expires_at" value="{{$personal_access_tokens->expires_at}}"/>
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