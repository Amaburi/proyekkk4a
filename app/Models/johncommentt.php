<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class johncommentt extends Model
{
    protected $table = 'johncomment';
    protected $primarykey = 'id';
    protected $fillable = ['id','user','comment'];
}
