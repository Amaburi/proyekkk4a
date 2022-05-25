<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latest extends Model
{
    protected $table = 'latest';
    protected $primarykey = 'id';
    protected $fillable = ['id','image','name','page','desc'];
}

