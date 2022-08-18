<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class JejumIntermitenteProgramacao  extends Model{
    
            protected $table = "jejum_intermitente_programacao";


        protected $fillable = ['jejum_intermitente_id', 'hora_inicio', 'hora_fim', 'total', 'dia', ];protected $dates = [
'created_at',
 'updated_at',
];
}