<?php

            namespace App\Repositories\Contract;

            interface Desafio_conteudoContract
            {
                public function find($id);

                public function create(array $data);

                public function update($model, array $data);

                public function delete($id);   
            }