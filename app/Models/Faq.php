<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Faq  extends Model{
    
            protected $table = "faq";


        protected $fillable = ['titulo', 'texto', 'cliente_id', 'desafio_id', 'usuario_id', 'status', ];protected $dates = [
'created_at',
 'updated_at',
];
}