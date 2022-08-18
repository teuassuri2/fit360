<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Post  extends Model{
    
            protected $table = "post";


        protected $fillable = ['post', 'imagem', 'usuario_id', ];protected $dates = [
'created_at',
 'updated_at',
];
}