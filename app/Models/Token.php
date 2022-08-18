<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Token  extends Model{
    
            protected $table = "token";


        protected $fillable = ['cliente_id', 'registro_Id', 'plataforma', 'device', 'model', 'platform', 'uuid', 'version', ];protected $dates = [
'created_at',
 'updated_at',
];
}