<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Receita  extends Model{
    
            protected $table = "receita";


        protected $fillable = ['titulo', 'ingredientes', 'preparo', 'obs', 'receita_sub_categoria_id', ];protected $dates = [
'created_at',
 'updated_at',
];
}