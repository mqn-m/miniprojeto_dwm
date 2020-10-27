<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    use HasFactory;
    protected $fillable  = ['altura_dia','data_refeicao','total_cal','notas'];


    //uma refeicao tem muitos pratos
    public function pratos() 
    {
        return $this->hasMany(Prato::class);

    }

    // //quando autenticacao
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
