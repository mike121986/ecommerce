<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Herramienta */
            [
                'category_id' => 1,
                'name' => 'Marcadores',
                'slug' => Str::slug('Marcadores')
            ],

            [
                'category_id' => 1,
                'name' => 'Niveles',
                'slug' => Str::slug('Niveles'),
            ],

            [
                'category_id' => 1,
                'name' => 'Para atornillar',
                'slug' => Str::slug('para atornillar'),
            ],

            [
                'category_id' => 1,
                'name' => 'Sierras',
                'slug' => Str::slug('Sierras'),
            ],/* 4 */

            /* Herramienta electrica */

            [
                'category_id' => 2,
                'name' => 'Aspiradoras',
                'slug' => Str::slug('aspiradoras'),
            ],
            [
                'category_id' => 2,
                'name' => 'Atornilladores',
                'slug' => Str::slug('Atornilladores'),
            ],

            [
                'category_id' => 2,
                'name' => 'Baterias',
                'slug' => Str::slug('Baterias'),
            ],
            [
                'category_id' => 2,
                'name' => 'Cortadoras',
                'slug' => Str::slug('Cortadoras'),
            ],
            [
                'category_id' => 2,
                'name' => 'Electricidad',
                'slug' => Str::slug('Electricidad'),
            ],
            [
                'category_id' => 2,
                'name' => 'Esmeriladoras',
                'slug' => Str::slug('Esmeriladoras'),
            ],/* 10 */
            [
                'category_id' => 2,
                'name' => 'Kits',
                'slug' => Str::slug('Kits'),
            ],
            [
                'category_id' => 2,
                'name' => 'Lijadoras',
                'slug' => Str::slug('Lijadoras'),
            ],
            [
                'category_id' => 2,
                'name' => 'Llaves Impacto',
                'slug' => Str::slug('Llaves Impacto'),
            ],/* 13 */
            [
                'category_id' => 2,
                'name' => 'Miniesmeriladoras',
                'slug' => Str::slug('Miniesmeriladoras'),
            ],
            [
                'category_id' => 2,
                'name' => 'Multiherramientas',
                'slug' => Str::slug('Multiherramientas'),
            ],/* 15 */
            [
                'category_id' => 2,
                'name' => 'Pistolas',
                'slug' => Str::slug('Pistolas'),
            ],/* 16 */
            [
                'category_id' => 2,
                'name' => 'Pistolas de calor',
                'slug' => Str::slug('Pistolas de calor'),
            ],/* 17 */
            [
                'category_id' => 2,
                'name' => 'Pulidoras',
                'slug' => Str::slug('Pulidoras'),
            ],/* 18 */
            [
                'category_id' => 2,
                'name' => 'Rectificadores',
                'slug' => Str::slug('Rectificadores'),
            ],/* 19 */
            [
                'category_id' => 2,
                'name' => 'Rotomartillos',
                'slug' => Str::slug('Rotomartillos'),
            ],/* 20 */
            [
                'category_id' => 2,
                'name' => 'Routers',
                'slug' => Str::slug('Routers'),
            ],/* 21 */
            [
                'category_id' => 2,
                'name' => 'Sierras',
                'slug' => Str::slug('Sierras'),
            ],/* 22 */
            [
                'category_id' => 2,
                'name' => 'Sopladoras',
                'slug' => Str::slug('Sopladoras'),
            ],/* 23 */
            [
                'category_id' => 2,
                'name' => 'Taladros',
                'slug' => Str::slug('Taladros'),
            ],/* 24 */
            [
                'category_id' => 2,
                'name' => 'Temperatura',
                'slug' => Str::slug('Temperatura'),
            ],/* 25 */

            /* Iluminacion */
            [
                'category_id' => 3,
                'name' => 'Linternas',
                'slug' => Str::slug('Linternas'),
            ],

            /* Organizadores */

            [
                'category_id' => 4,
                'name' => 'Cartucheras',
                'slug' => Str::slug('Cartucheras'),
            ],

            [
                'category_id' => 4,
                'name' => 'Organizadores',
                'slug' => Str::slug('Organizadores'),
            ],
        ];

        foreach ($subcategories as $subcategory) {            

            Subcategory::create($subcategory);

        }
    }
}
