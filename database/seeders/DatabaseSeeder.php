<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@senai.br',
            'password' => Hash::make('123'),
        ]);

         Produto::create([
            'nome' => 'Telha ',
            'valor'=> 66.50,
            'qtd_estoque'=> 0,
            'qtd_minima'=> 5,
            'observacoes'=> 'telha de barro'
        ]);
    }
}
