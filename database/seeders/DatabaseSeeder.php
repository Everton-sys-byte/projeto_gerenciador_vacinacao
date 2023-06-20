<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //povoando o banco de dados com as roles (papeis) do usuário no sistema
        $this->call([
            RoleSeeder::class,
        ]);
        //criando dados aleatorios com o factory
        //\App\Models\Vacina::factory(100)->create();
    }
}
