<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recommend extends Model
{
    protected $table = 'recommend';
    protected $primarykey = 'id';
    protected $fillable = ['id','username','comment'];
}
