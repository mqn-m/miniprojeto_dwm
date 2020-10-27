<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $fillable = ['nome', 'cal', 'nota', 'user'];

    use HasFactory;

    // //quando autenticacao
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

     //uma prato pode estar em muitas refeicoes
     public function refeicoes() 
     {
         return $this->hasMany(Refeicao::class);
 
     }
}
