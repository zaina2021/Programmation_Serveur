<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
   
    $users = \App\Models\User::factory(100)->has(
        \App\Models\Serie::factory(5)->count(5)
    )->create();
    
    // \App\Models\User::factory(100)->create();
    // \App\Models\Serie::factory(10)->create();
}
}
