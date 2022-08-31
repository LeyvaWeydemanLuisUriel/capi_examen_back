<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'user_domicilios';
    protected $fillable = ['users_id','domicilio','numero_exterior','cp','colonia','ciudad'];

    public function usuarios()  {
        return $this->belongsTo('App\Models\User','users_id','id');
    } 
}
