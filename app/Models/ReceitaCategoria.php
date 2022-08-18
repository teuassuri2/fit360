<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class ReceitaCategoria  extends Model{
    
            protected $table = "receita_categoria";


        protected $fillable = ['nome', 'imagem', 'status', ];protected $dates = [
'created_at',
 'updated_at',
];
}