@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">
	
	<div class="row">

            <div class="col-12">
                <a href="/usuario/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>
		
	<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">usuario</h4>
                                        <p class="card-title-desc">Faça buscas e filtre dados.
                                        </p>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											<tr>
<td>nome</td>
<td>cidade</td>
<td>email</td>
<td>senha</td>
<td>telefone</td>
<td>peso_atual</td>
<td>peso_desejado</td>
<td>imagem</td>
<td>imagem_perfil</td>
<td>sexo</td>
<td>data_nascimento</td>
<td>cliente_id</td>
<td>token_id</td>
<td>envio_whtasapp</td>
<td>Ações</td>
            </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($usuario as $dados) {
                    ?><tr>
<td>{{$dados->nome}}</td>
<td>{{$dados->cidade}}</td>
<td>{{$dados->email}}</td>
<td>{{$dados->senha}}</td>
<td>{{$dados->telefone}}</td>
<td>{{$dados->peso_atual}}</td>
<td>{{$dados->peso_desejado}}</td>
<td>{{$dados->imagem}}</td>
<td>{{$dados->imagem_perfil}}</td>
<td>{{$dados->sexo}}</td>
<td>{{$dados->data_nascimento}}</td>
<td>{{$dados->cliente_id}}</td>
<td>{{$dados->token_id}}</td>
<td>{{$dados->envio_whtasapp}}</td>
<td align="center">
                                <a href="/usuario/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                <a href="/usuario/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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