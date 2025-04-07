<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = [
            [
                'name' => 'CRUD',
                'description' => 'Progetto con funzionalità base CRUD',
            ],
            [
                'name' => 'Seeder e Migration',
                'description' => 'Uso avanzato di Seeder e Migration',
            ],
            [
                'name' => 'Portfolio',
                'description' => 'Mostra progetti personali/professionali',
            ],
            [
                'name' => 'Educational',
                'description' => 'Progetto per apprendimento Laravel',
            ],
        ];


        foreach ($types as $type) {
            $newType = new Type();

            $newType->name = $type["name"];
            $newType->description = $type["description"];

            $newType->save();
        }
    }
}
