<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->has(\App\Models\Refeicao::factory()->hasAttached(\App\Models\Prato::factory()->count(2))->count(10))->count(2)->create();    
    }

    //comando nãp está totalmente correto mas serve para preecher muitos dados na base de dados

    // para correr e preencher a base de dados colocar no terminal: php artisan db:seed 
    // são criados 2 users todos com a palavra 'password' como palavra passe e vários pratos e refeicoes
}
