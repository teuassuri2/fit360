@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/token/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">token</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>cliente_id</td>
<td>registro_Id</td>
<td>plataforma</td>
<td>device</td>
<td>model</td>
<td>platform</td>
<td>uuid</td>
<td>version</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($token as $dados) {
                    ?><tr>
<td>{{$dados->cliente_id}}</td>
<td>{{$dados->registro_Id}}</td>
<td>{{$dados->plataforma}}</td>
<td>{{$dados->device}}</td>
<td>{{$dados->model}}</td>
<td>{{$dados->platform}}</td>
<td>{{$dados->uuid}}</td>
<td>{{$dados->version}}</td>
<td align="center">
                                <a href="/token/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/token/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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