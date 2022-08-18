<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class PesoMedida  extends Model{
    
            protected $table = "peso_medida";


        protected $fillable = ['peso', 'imagem', 'usuario_id', 'quadril', 'cintura', 'torax', 'braco_direito', 'braco_esquerdo', 'abdomen', 'coxas', 'panturilha', ];protected $dates = [
'created_at',
 'updated_at',
];
}