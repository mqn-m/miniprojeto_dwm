<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    use HasFactory;

    public function testDatabase() //?????
    {
        $prato = Prato::factory()->count(3)->make();;

    }
}
