<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class UsuarioSistema  extends Model{
    
            protected $table = "usuario_sistema";


        protected $fillable = ['nome', 'email', 'senha', 'status', 'cliente_id', ];protected $dates = [
'created_at',
 'updated_at',
];
}