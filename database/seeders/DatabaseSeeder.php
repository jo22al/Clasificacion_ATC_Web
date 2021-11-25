<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Group,Classification,SubClassification,Medicine,Resume};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // \App\Models\User::factory(10)->create();
        Group::factory(3)->create();
        Classification::factory(3)->create();
        SubClassification::factory(3)->create();
        Medicine::factory(6)->create();
        Resume::factory(3)->create();
    }
}
