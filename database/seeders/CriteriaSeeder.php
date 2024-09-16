<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['criteria' => 'Tech', 'c_slug' => 'tech'],
            ['criteria' => 'Health', 'c_slug' => 'helath'],
            ['criteria' => 'Business', 'c_slug' => 'business'],
            ['criteria' => 'Education', 'c_slug' => 'education'],
            ['criteria' => 'Entertainment', 'c_slug' => 'entertainment'],
        ];

        Criteria::insert($data);
    }
}
