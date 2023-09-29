<?php

namespace Database\Seeders;

use App\Models\client;
use App\Models\service;
use Database\Factories\ClientFactory;
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
        client::factory(10)->create();
        service::factory(10)->create();
    }
}
