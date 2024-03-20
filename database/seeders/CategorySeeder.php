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
        $categories = [
            [
                'name' => 'Chinese',
                'description' => 'a',
                'image' => 'a'
            ],
            [
                'name' => 'Japanese',
                'description' => 'a',
                'image' => 'a'
            ],
            [
                'name' => 'Western',
                'description' => 'a',
                'image' => 'a'
            ],
            [
                'name' => 'Italian',
                'description' => 'a',
                'image' => 'a'
            ],
            [
                'name' => 'Drink',
                'description' => 'a',
                'image' => 'a'
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
