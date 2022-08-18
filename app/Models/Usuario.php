<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Usuario  extends Model{
    
            protected $table = "usuario";


        protected $fillable = ['nome', 'cidade', 'email', 'senha', 'telefone', 'peso_atual', 'peso_desejado', 'imagem', 'imagem_perfil', 'sexo', 'data_nascimento', 'cliente_id', 'token_id', 'envio_whtasapp', ];protected $dates = [
'created_at',
 'updated_at',
];
}