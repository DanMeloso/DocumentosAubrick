<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $connection = "sqlsrv";
    protected $table = "sophia.DOCUMENTOS";
    protected $primaryKey = 'CODIGO';
}
