@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/jejum_intermitente_execucao/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">jejum_intermitente_execucao</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>usuario_id</td>
<td>horas</td>
<td>data_hora_fim</td>
<td>status</td>
<td>peso_inicial</td>
<td>peso_final</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($jejum_intermitente_execucao as $dados) {
                    ?><tr>
<td>{{$dados->usuario_id}}</td>
<td>{{$dados->horas}}</td>
<td>{{$dados->data_hora_fim}}</td>
<td>{{$dados->status}}</td>
<td>{{$dados->peso_inicial}}</td>
<td>{{$dados->peso_final}}</td>
<td align="center">
                                <a href="/jejum_intermitente_execucao/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/jejum_intermitente_execucao/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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