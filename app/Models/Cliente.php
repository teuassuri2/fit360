<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Cliente  extends Model{
    
            protected $table = "cliente";


        protected $fillable = ['nome', 'cliente_id', ];protected $dates = [
'created_at',
 'updated_at',
];
}