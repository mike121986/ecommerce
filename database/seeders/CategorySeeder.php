<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            
            [
                'name' => 'Herramienta',
                'slug' => Str::slug('Herramienta'),
                'icon' => '<i class="fas fa-tools"></i>',
                'image' =>  'https://drive.google.com/file/d/1CjRUCOaPW-zBWJJIWaKVzibX6hcdAeOS/view?usp=sharing'
            ],

            [
                'name' => 'Herramienta electrica',
                'slug' => Str::slug('Herramienta electrica'),
                'icon' => '<i class="fas fa-charging-station"></i>',
                'image' =>  'https://drive.google.com/file/d/1CjRUCOaPW-zBWJJIWaKVzibX6hcdAeOS/view?usp=sharing'
            ],
           

            [
                'name' => 'Iluminacion',
                'slug' => Str::slug('Iluminacion'),
                'icon' => '<i class="far fa-lightbulb"></i>',
                'image' =>  'https://drive.google.com/file/d/1CjRUCOaPW-zBWJJIWaKVzibX6hcdAeOS/view?usp=sharing'
            ],
            
            [
                'name' => 'Organizadores',
                'slug' => Str::slug('Organizadores'),
                'icon' => '<i class="fas fa-columns"></i>',
                'image' =>  'https://drive.google.com/file/d/1CjRUCOaPW-zBWJJIWaKVzibX6hcdAeOS/view?usp=sharing'
            ],

        ];

        foreach ($categories as $category) {
           /*  $category = Category::factory(1)->create($category)->first(); */
           Category::create($category);
            
        }
        Brand::factory(1)->create();

      /*   foreach ($brands as $brand) {
            $brand->categories()->attach($category->id);
              Subcategory::create($subcategory);
        } */

    }
}
