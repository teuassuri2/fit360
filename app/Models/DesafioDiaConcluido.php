<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class DesafioDiaConcluido  extends Model{
    
            protected $table = "desafio_dia_concluido";


        protected $fillable = ['usuario_id', 'desafio_id', 'dia', 'nota', 'peso', ];protected $dates = [
'created_at',
 'updated_at',
];
}