<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Mural  extends Model{
    
            protected $table = "mural";


        protected $fillable = ['titulo', 'texto', 'usuario_sistema_id', 'link', 'data', 'imagem', ];protected $dates = [
'created_at',
 'updated_at',
];
}