<?php

namespace Database\Seeders;

use App\Models\TypeJob;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeJob::insert([
            [
                'name' => 'Remote',
                'slug' => 'remote',
            ],
            [
                'name' => 'Full Time',
                'slug' => 'full-time',
            ],
            [
                'name' => 'Part Time',
                'slug' => 'part-time',
            ],
            [
                'name' => 'Intership',
                'slug' => 'intership',
            ],
            [
                'name' => 'Contract',
                'slug' => 'contract',
            ],
            [
                'name' => 'Freelance',
                'slug' => 'freelance',
            ],

        ]);
    }
}
