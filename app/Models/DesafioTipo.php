<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class DesafioTipo  extends Model{
    
            protected $table = "desafio_tipo";


        protected $fillable = ['nome', ];protected $dates = [
'created_at',
 'updated_at',
];
}