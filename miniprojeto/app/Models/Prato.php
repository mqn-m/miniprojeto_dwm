<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $fillable = ['nome', 'cal', 'nota', 'user'];

    use HasFactory;
}
