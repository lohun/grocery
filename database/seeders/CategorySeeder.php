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
        $categories = collect([
            [
                'id' => 1,
                'name' => 'Beverages',
                'slug' => 'beverages',
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Fruits and Vegetables',
                'slug' => 'produce',
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Diary',
                'slug' => 'dairy',
                'created_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Baked Foods',
                'slug' => 'bakery',
                'created_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Whole Foods and Grains',
                'slug' => 'whole-foods',
                'created_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Deli (Cooked meals and delicaies)',
                'slug' => 'meat-seafood',
                'created_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Canned and Packaged Foods',
                'slug' => 'canned-packaged-foods',
                'created_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Condiments and Spices',
                'slug' => 'condiments-spices',
                'created_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'Snacks and Sweets',
                'slug' => 'snacks-sweets',
                'created_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'Frozen Foods',
                'slug' => 'frozen-foods',
                'created_at' => now()
            ],
            [
                'id' => 11,
                'name' => 'Baby Foods',
                'slug' => 'baby-foods',
                'created_at' => now()
            ],
            [
                'id' => 12,
                'name' => 'Household Supplies',
                'slug' => 'household-supplies',
                'created_at' => now()
            ],
            [
                'id' => 13,
                'name' => 'Personal Care',
                'slug' => 'personal-care',
                'created_at' => now()
            ],
            [
                'id' => 14,
                'name' => 'Pet Supplies',
                'slug' => 'pet-supplies',
                'created_at' => now()
            ],
            [
                'id' => 15,
                'name' => 'Health and Wellness',
                'slug' => 'health-wellness',
                'created_at' => now()
            ],

        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
