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
                'image' =>  'subcategories\herramienta.jpg'
            ],

            [
                'name' => 'Herramienta electrica',
                'slug' => Str::slug('Herramienta electrica'),
                'icon' => '<i class="fas fa-charging-station"></i>',
                'image' =>  'subcategories\herramienta-electrica.jpg'
            ],
           

            [
                'name' => 'Iluminacion',
                'slug' => Str::slug('Iluminacion'),
                'icon' => '<i class="far fa-lightbulb"></i>',
                'image' =>  'subcategories\iluminacion.jpg'
            ],
            
            [
                'name' => 'Organizadores',
                'slug' => Str::slug('Organizadores'),
                'icon' => '<i class="fas fa-columns"></i>',
                'image' =>  'subcategories\organizadores.jpg'
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
