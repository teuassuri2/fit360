<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class JejumIntermitenteExecucao  extends Model{
    
            protected $table = "jejum_intermitente_execucao";


        protected $fillable = ['usuario_id', 'horas', 'data_hora_fim', 'status', 'peso_inicial', 'peso_final', ];protected $dates = [
'created_at',
 'updated_at',
];
}