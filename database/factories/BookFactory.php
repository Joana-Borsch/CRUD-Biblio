<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{

    protected $model = book::class;


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'edition' => $this->faker->companySuffix,
        ];
    }
}
