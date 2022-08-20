@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/desafio_dia_concluido/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">desafio_dia_concluido</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>usuario_id</td>
<td>desafio_id</td>
<td>dia</td>
<td>nota</td>
<td>peso</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($desafio_dia_concluido as $dados) {
                    ?><tr>
<td>{{$dados->usuario_id}}</td>
<td>{{$dados->desafio_id}}</td>
<td>{{$dados->dia}}</td>
<td>{{$dados->nota}}</td>
<td>{{$dados->peso}}</td>
<td align="center">
                                <a href="/desafio_dia_concluido/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/desafio_dia_concluido/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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