<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class ReceitaSubCategoria  extends Model{
    
            protected $table = "receita_sub_categoria";


        protected $fillable = ['nome', 'imagem', 'receita_categoria_id', ];protected $dates = [
'created_at',
 'updated_at',
];
}