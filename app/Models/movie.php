<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movieee';
    protected $primarykey = 'id';
    protected $fillable = ['id','image','name','page','desc'];
}
