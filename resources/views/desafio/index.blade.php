@extends('layout.master')
@section('listagem')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-12">
                <a href="/desafio/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">desafio</h4>
                        <p class="card-title-desc">Faça buscas e filtre dados.
                        </p>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <td>nome</td>
                                    <td>texto</td>
                                    <td>video</td>
                                    <td>imagem</td>
                                    <td>valor_inicial</td>
                                    <td>valor_final</td>
                                    <td>dias</td>
                                    <td>pago</td>
                                    <td>cliente_id</td>
                                    <td>vimeo</td>
                                    <td>ordem</td>
                                    <td>dia_solicitacao_peso</td>
                                    <td>status</td>
                                    <td>valor_final_dia</td>
                                    <td>texto_site</td>
                                    <td>desafio</td>
                                    <td>desafio_tipo_id</td>
                                    <td>professor</td>
                                    <td>Ações</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($desafio as $dados) {
                                    ?><tr>
                                        <td>{{$dados->nome}}</td>
                                        <td>{{$dados->texto}}</td>
                                        <td>{{$dados->video}}</td>
                                        <td>{{$dados->imagem}}</td>
                                        <td>{{$dados->valor_inicial}}</td>
                                        <td>{{$dados->valor_final}}</td>
                                        <td>{{$dados->dias}}</td>
                                        <td>{{$dados->pago}}</td>
                                        <td>{{$dados->cliente_id}}</td>
                                        <td>{{$dados->vimeo}}</td>
                                        <td>{{$dados->ordem}}</td>
                                        <td>{{$dados->dia_solicitacao_peso}}</td>
                                        <td>{{$dados->status}}</td>
                                        <td>{{$dados->valor_final_dia}}</td>
                                        <td>{{$dados->texto_site}}</td>
                                        <td>{{$dados->desafio}}</td>
                                        <td>{{$dados->desafio_tipo_id}}</td>
                                        <td>{{$dados->professor}}</td>
                                        <td align="center">
                                            <a href="/desafio/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="/desafio/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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
@endsection
@endsection
