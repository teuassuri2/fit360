<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class DesafioParticipante  extends Model{
    
            protected $table = "desafio_participante";


        protected $fillable = ['desafio_id', 'usuario_id', 'id_transacao', 'email_disparado', 'email_venda', ];protected $dates = [
'created_at',
 'updated_at',
];
}