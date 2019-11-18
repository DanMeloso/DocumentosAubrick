<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $connection = "sqlsrv";
    protected $table = "sophia.MATRICULA";
    protected $primaryKey = "CODIGO";

    function matr_doc(){
        return $this->belongsToMany('App\Matr_doc', 'matricula');
    }
}
