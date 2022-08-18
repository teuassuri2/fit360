<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class DesafioConteudo  extends Model{
    
            protected $table = "desafio_conteudo";


        protected $fillable = ['desafio_id', 'dia', 'hora', 'titulo', 'texto', 'imagem', 'video', 'ordem', 'vimeo', ];protected $dates = [
'created_at',
 'updated_at',
];
}