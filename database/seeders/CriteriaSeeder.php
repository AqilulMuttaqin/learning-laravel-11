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
            ['criteria' => 'Tech'],
            ['criteria' => 'Health'],
            ['criteria' => 'Business'],
            ['criteria' => 'Education'],
            ['criteria' => 'Entertainment'],
        ];

        Criteria::insert($data);
    }
}
