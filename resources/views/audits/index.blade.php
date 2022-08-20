@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/audits/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">audits</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>user_type</td>
<td>user_id</td>
<td>event</td>
<td>auditable_type</td>
<td>auditable_id</td>
<td>old_values</td>
<td>new_values</td>
<td>url</td>
<td>ip_address</td>
<td>user_agent</td>
<td>tags</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($audits as $dados) {
                    ?><tr>
<td>{{$dados->user_type}}</td>
<td>{{$dados->user_id}}</td>
<td>{{$dados->event}}</td>
<td>{{$dados->auditable_type}}</td>
<td>{{$dados->auditable_id}}</td>
<td>{{$dados->old_values}}</td>
<td>{{$dados->new_values}}</td>
<td>{{$dados->url}}</td>
<td>{{$dados->ip_address}}</td>
<td>{{$dados->user_agent}}</td>
<td>{{$dados->tags}}</td>
<td align="center">
                                <a href="/audits/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/audits/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->

</div>
		</div>
        @stop
	@stop