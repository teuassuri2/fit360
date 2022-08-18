<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class JejumIntermitente  extends Model{
    
            protected $table = "jejum_intermitente";


        protected $fillable = ['titulo', 'texto', 'vimeo', 'imagem', ];protected $dates = [
'created_at',
 'updated_at',
];
}