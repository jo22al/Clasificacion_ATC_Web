<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Group,Classification,SubClassification,Medicine};

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
        Group::factory(10)->create();
        Classification::factory(10)->create();
        SubClassification::factory(5)->create();
        Medicine::factory(5)->create();
    }
}
