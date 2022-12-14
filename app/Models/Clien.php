<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clien extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'project',
        'photo',
        'comment',
    ];
}
