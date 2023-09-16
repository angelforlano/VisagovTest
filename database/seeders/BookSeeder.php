<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Book::factory(50)->create();

        \App\Models\Book::factory()->create([
            'title' => 'Test Name',
            'author' => 'Test Title',
            'author_id' => 'Test id',
        ]);
    }
}
