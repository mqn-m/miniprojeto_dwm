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
        for ($j = 0; $j <= 3; $j++) {
            $u = \App\Models\User::factory()->create();
            for ($i = 0; $i <= 10; $i++) {
                $r = \App\Models\Refeicao::factory()->create(['user_id' => $u->id,]);
                $p1 = \App\Models\Prato::factory()->create(['user_id' => $u->id,]);
                $p2 = \App\Models\Prato::factory()->create(['user_id' => $u->id,]);
                $r->pratos()->attach($p1);
                $r->pratos()->attach($p2);
            }
        }  
    }

    // para correr e preencher a base de dados colocar no terminal: php artisan db:seed 
    // são criados varias users todos com a palavra 'password' como palavra passe e vários pratos e refeicoes
}
