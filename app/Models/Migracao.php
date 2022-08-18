<?php namespace App\Models;use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;class Migracao  extends Model{
    
            protected $table = "migracao";


        protected $fillable = ['nome', 'email', 'telefone', 'status', ];protected $dates = [
'created_at',
 'updated_at',
];
}