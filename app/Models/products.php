<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\factories\HasFactory;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'prince',
        'description'
    ];
}
