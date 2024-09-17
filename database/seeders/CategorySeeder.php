<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Tech', 'slug' => 'tech'],
            ['name' => 'Health', 'slug' => 'helath'],
            ['name' => 'Business', 'slug' => 'business'],
            ['name' => 'Education', 'slug' => 'education'],
            ['name' => 'Entertainment', 'slug' => 'entertainment'],
        ];

        Category::insert($data);
    }
}
