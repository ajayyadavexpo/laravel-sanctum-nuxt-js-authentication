<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name'=>'Test',
            'email'=>'test@test.com',
            'password'=>bcrypt('password')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
