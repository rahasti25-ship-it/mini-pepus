<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $tech = Category::create(['name' => 'Teknologi', 'description' => 'Buku seputar komputer dan pemrograman.']);
        $sci = Category::create(['name' => 'Sains', 'description' => 'Buku ilmu pengetahuan alam.']);
        Category::create(['name' => 'Sastra', 'description' => 'Novel dan karya sastra.']);

        Book::create(['category_id' => $tech->id, 'title' => 'Belajar Laravel', 'author' => 'Budi Santoso', 'published_year' => 2022, 'stock' => 5]);
        Book::create(['category_id' => $tech->id, 'title' => 'Dasar Basis Data', 'author' => 'Siti Aminah', 'published_year' => 2020, 'stock' => 3]);
        Book::create(['category_id' => $sci->id, 'title' => 'Fisika Dasar', 'author' => 'Andi Wijaya', 'published_year' => 2019, 'stock' => 7]);
    }
}
