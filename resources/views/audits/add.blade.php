@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">audits</h4>
                                <p class="card-title-desc">audits</p><form action="/audits/cadastrar" class="custom-validation" method="POST"><div class="mb-3">
                                        <label class="form-label">user_type</label>
                                        <input type="text" class="form-control" required placeholder="user_type" name="user_type" value=""/>
                                    </div>
<label class="form-label">user_id</label>
					<select name="user_id" class="form-control select2">
						<optgroup label="user_id">
							@foreach($user as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">event</label>
                                        <input type="text" class="form-control" required placeholder="event" name="event" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">auditable_type</label>
                                        <input type="text" class="form-control" required placeholder="auditable_type" name="auditable_type" value=""/>
                                    </div>
<label class="form-label">auditable_id</label>
					<select name="auditable_id" class="form-control select2">
						<optgroup label="auditable_id">
							@foreach($auditable as $dados)
                                <option value="{{$dados->id}}">{{$dados->nome}}</option>
                            @endforeach
						</optgroup>
					</select>
<div class="mb-3">
                                        <label class="form-label">old_values</label>
                                        <input type="text" class="form-control" required placeholder="old_values" name="old_values" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">new_values</label>
                                        <input type="text" class="form-control" required placeholder="new_values" name="new_values" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">url</label>
                                        <input type="text" class="form-control" required placeholder="url" name="url" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">ip_address</label>
                                        <input type="text" class="form-control" required placeholder="ip_address" name="ip_address" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">user_agent</label>
                                        <input type="text" class="form-control" required placeholder="user_agent" name="user_agent" value=""/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">tags</label>
                                        <input type="text" class="form-control" required placeholder="tags" name="tags" value=""/>
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