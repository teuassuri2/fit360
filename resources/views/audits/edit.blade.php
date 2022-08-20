@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">audits</h4>
                                <p class="card-title-desc">audits</p><form action="/audits/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$audits->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">user_type</label>
                                        <input type="text" class="form-control" required placeholder="user_type" name="user_type" value="{{$audits->user_type}}"/>
                                    </div>
<label class="form-label">user_id</label>
					<select name="user_id" class="form-control select2">
						<optgroup label="user_id">
							@foreach($user as $dados)
								@if ($dados->id == $audits->user_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">event</label>
                                        <input type="text" class="form-control" required placeholder="event" name="event" value="{{$audits->event}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">auditable_type</label>
                                        <input type="text" class="form-control" required placeholder="auditable_type" name="auditable_type" value="{{$audits->auditable_type}}"/>
                                    </div>
<label class="form-label">auditable_id</label>
					<select name="auditable_id" class="form-control select2">
						<optgroup label="auditable_id">
							@foreach($auditable as $dados)
								@if ($dados->id == $audits->auditable_id)
									<option selected="" value="{{$dados->id}}">{{$dados->nome}}</option>
								@else
									<option value="{{$dados->id}}">{{$dados->nome}}</option>
								@endif
							@endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">old_values</label>
                                        <input type="text" class="form-control" required placeholder="old_values" name="old_values" value="{{$audits->old_values}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">new_values</label>
                                        <input type="text" class="form-control" required placeholder="new_values" name="new_values" value="{{$audits->new_values}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">url</label>
                                        <input type="text" class="form-control" required placeholder="url" name="url" value="{{$audits->url}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">ip_address</label>
                                        <input type="text" class="form-control" required placeholder="ip_address" name="ip_address" value="{{$audits->ip_address}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">user_agent</label>
                                        <input type="text" class="form-control" required placeholder="user_agent" name="user_agent" value="{{$audits->user_agent}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">tags</label>
                                        <input type="text" class="form-control" required placeholder="tags" name="tags" value="{{$audits->tags}}"/>
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