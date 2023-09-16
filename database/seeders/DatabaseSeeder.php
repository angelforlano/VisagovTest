<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'title' => 'Test Name',
            'author' => 'Test Title',
        ]);
    }
}

// php artisan db:seed --class=DatabaseSeeder
// php artisan make:seeder DatabaseSeeder