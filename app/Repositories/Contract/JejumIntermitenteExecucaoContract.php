<?php

            namespace App\Repositories\Contract;

            interface Jejum_intermitente_execucaoContract
            {
                public function find($id);

                public function create(array $data);

                public function update($model, array $data);

                public function delete($id);   
            }