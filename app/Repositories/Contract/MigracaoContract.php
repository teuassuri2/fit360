<?php

            namespace App\Repositories\Contract;

            interface MigracaoContract
            {
                public function find($id);

                public function create(array $data);

                public function update($model, array $data);

                public function delete($id);   
            }