@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid"><div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">failed_jobs</h4>
                                <p class="card-title-desc">failed_jobs</p><form action="/failed_jobs/alterar" class="custom-validation" method="POST"><input type="hidden" value="{{$failed_jobs->id}}" name="id"><div class="mb-3">
                                        <label class="form-label">uuid</label>
                                        <input type="text" class="form-control" required placeholder="uuid" name="uuid" value="{{$failed_jobs->uuid}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">connection</label>
                                        <input type="text" class="form-control" required placeholder="connection" name="connection" value="{{$failed_jobs->connection}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">queue</label>
                                        <input type="text" class="form-control" required placeholder="queue" name="queue" value="{{$failed_jobs->queue}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">payload</label>
                                        <input type="text" class="form-control" required placeholder="payload" name="payload" value="{{$failed_jobs->payload}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">exception</label>
                                        <input type="text" class="form-control" required placeholder="exception" name="exception" value="{{$failed_jobs->exception}}"/>
                                    </div>
<div class="mb-3">
                                        <label class="form-label">failed_at</label>
                                        <input type="text" class="form-control" required placeholder="failed_at" name="failed_at" value="{{$failed_jobs->failed_at}}"/>
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