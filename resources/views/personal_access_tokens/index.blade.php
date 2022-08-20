@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/personal_access_tokens/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">personal_access_tokens</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>tokenable_type</td>
<td>tokenable_id</td>
<td>name</td>
<td>token</td>
<td>abilities</td>
<td>last_used_at</td>
<td>expires_at</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($personal_access_tokens as $dados) {
                    ?><tr>
<td>{{$dados->tokenable_type}}</td>
<td>{{$dados->tokenable_id}}</td>
<td>{{$dados->name}}</td>
<td>{{$dados->token}}</td>
<td>{{$dados->abilities}}</td>
<td>{{$dados->last_used_at}}</td>
<td>{{$dados->expires_at}}</td>
<td align="center">
                                <a href="/personal_access_tokens/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/personal_access_tokens/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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