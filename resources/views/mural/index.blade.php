@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/mural/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">mural</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>titulo</td>
<td>texto</td>
<td>usuario_sistema_id</td>
<td>link</td>
<td>data</td>
<td>imagem</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($mural as $dados) {
                    ?><tr>
<td>{{$dados->titulo}}</td>
<td>{{$dados->texto}}</td>
<td>{{$dados->usuario_sistema_id}}</td>
<td>{{$dados->link}}</td>
<td>{{$dados->data}}</td>
<td>{{$dados->imagem}}</td>
<td align="center">
                                <a href="/mural/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/mural/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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