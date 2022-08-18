<?php

            namespace App\Repositories\Contract;

            interface Receita_sub_categoriaContract
            {
                public function find($id);

                public function create(array $data);

                public function update($model, array $data);

                public function delete($id);   
            }