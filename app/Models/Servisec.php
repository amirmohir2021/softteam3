<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servisec extends Model
{
    use HasFactory;
    public $fillable = [
      'title',
      'body',
      'file',
    ];
}
