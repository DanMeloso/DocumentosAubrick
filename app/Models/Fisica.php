<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fisica extends Model
{
    protected $connection = "sqlsrv";
    protected $table = "sophia.FISICA";
    protected $primaryKey = "CODIGO";
}
