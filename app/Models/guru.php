<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table ="gurus";
    protected $primaryKey ="id";
    protected $fillable =['id','namaguru','nip','materi'];
}
