<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array (
    		['name' => 'film', 'status' => 1],
    		['name' => 'music', 'status' => 1 ],
    		['name' => 'comedy', 'status' => 1],
    		['name' => 'sport', 'status' => 1],
    		['name' => 'life', 'status' => 1]
    	);

        foreach ($categories as $category) {
        	Category::create($category);
        }
    }
}
