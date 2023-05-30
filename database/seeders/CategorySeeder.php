<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            "category" => "Quick Reads"
        ]);

        Category::create([
            "category" => "Medium Reads"
        ]);

        Category::create([
            "category" => "Long Reads"
        ]);
    }
}
