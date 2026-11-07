<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
public function definition(): array
{
    return [
        'judul' => fake()->sentence(3),
        'penulis' => fake()->name(),
        'penerbit' => fake()->company(),
        'tahun_terbit' => fake()->numberBetween(2000, 2026),
        'isbn' => fake()->unique()->isbn13(),
        'kategori' => fake()->randomElement([
            'Novel',
            'Pendidikan',
            'Teknologi',
            'Sejarah',
            'Komputer',
        ]),
    ];
}

}
