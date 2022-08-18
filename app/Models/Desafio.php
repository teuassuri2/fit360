<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desafio extends Model {

    protected $table = "desafio";
    protected $fillable = ['nome', 'texto', 'video', 'imagem', 'valor_inicial', 'valor_final', 'dias', 'pago', 'cliente_id', 'vimeo', 'ordem', 'dia_solicitacao_peso', 'status', 'valor_final_dia', 'texto_site', 'desafio', 'desafio_tipo_id', 'professor',];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
