<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class FaleConosco  extends Model{
    
            protected $table = "fale_conosco";


        protected $fillable = ['usuario_id', 'opcao', 'texto', 'data_consulta', 'nota', 'desafio_id', 'status', ];protected $dates = [
'created_at',
 'updated_at',
];
}