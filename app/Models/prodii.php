<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodii extends Model
{
    protected $table ="prodis";
    protected $primaryKey ="id";
    protected $fillable =['id','namaprodi','kodeprodi'];
}
