<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\book;

class BookSeeder extends Seeder
{

    public function run()
    {
        Book::factory()
            ->times(10)
            ->create();
    }
}
