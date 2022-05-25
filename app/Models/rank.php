<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rank extends Model
{
    protected $table = 'rank';
    protected $primarykey = 'id';
    protected $fillable = ['id','image','name','page','desc','rank'];
}
