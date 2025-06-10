<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table ="dosens";
    protected $primaryKey ="id";
    protected $fillable =['id','namadosen','Matakuliah','KodeMatakuliah'];
}
