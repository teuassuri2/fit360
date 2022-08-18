<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Receita extends Model implements Auditable {

    use HasFactory;
    
    protected $guarded = [];
    use \OwenIt\Auditing\Auditable;


    protected $table = "receita";
    protected $fillable = ['titulo', 'ingredientes', 'preparo', 'obs', 'receita_sub_categoria_id',];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
