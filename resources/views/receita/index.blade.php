@extends('layout.master')
@section('listagem')<div class="page-content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-12">
                <a href="/receita/cadastrar">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light botao-cadastro">Novo Cadastro</button>
                </a>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">receita</h4>
                        <p class="card-title-desc">Faça buscas e filtre dados.
                        </p>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <td>titulo</td>
                                    <td>ingredientes</td>
                                    <td>preparo</td>
                                    <td>obs</td>
                                    <td>receita_sub_categoria_id</td>
                                    <td>Ações</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($receita as $dados) {
                                    ?><tr>
                                        <td>{{$dados->titulo}}</td>
                                        <td>{{$dados->ingredientes}}</td>
                                        <td>{{$dados->preparo}}</td>
                                        <td>{{$dados->obs}}</td>
                                        <td>{{$dados->receita_sub_categoria_id}}</td>
                                        <td align="center">
                                            <a href="/receita/alterar/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="/receita/remover/{{$dados->id}}" class="btn btn-outline-secondary btn-sm edit" title="Delete" onclick=" return confirm(Deseja Realmente apagar os dados)">
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