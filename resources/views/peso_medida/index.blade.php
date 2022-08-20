@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/peso_medida/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">peso_medida</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>peso</td>
<td>imagem</td>
<td>usuario_id</td>
<td>quadril</td>
<td>cintura</td>
<td>torax</td>
<td>braco_direito</td>
<td>braco_esquerdo</td>
<td>abdomen</td>
<td>coxas</td>
<td>panturilha</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($peso_medida as $dados) {
                    ?><tr>
<td>{{$dados->peso}}</td>
<td>{{$dados->imagem}}</td>
<td>{{$dados->usuario_id}}</td>
<td>{{$dados->quadril}}</td>
<td>{{$dados->cintura}}</td>
<td>{{$dados->torax}}</td>
<td>{{$dados->braco_direito}}</td>
<td>{{$dados->braco_esquerdo}}</td>
<td>{{$dados->abdomen}}</td>
<td>{{$dados->coxas}}</td>
<td>{{$dados->panturilha}}</td>
<td align="center">
                                <a href="/peso_medida/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/peso_medida/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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