<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $newProject = new Project();

        $newProject->name = "laravel-primi-passi";
        $newProject->worked_on_date = "2025-03-18";
        $newProject->content = "Primi passi nell'installazione ed utilizzo del framework Laravel";
        $newProject->type_id = 4;

        $newProject->save();

        $newProject = new Project();

        $newProject->name = "laravel-comics";
        $newProject->worked_on_date = "2025-03-20";
        $newProject->content = "Generazione di una copia di una pagina di un sito web completa con inserimento di layout e stilizzazione";
        $newProject->type_id = 5;

        $newProject->save();

        $newProject = new Project();

        $newProject->name = "laravel-model-controller";
        $newProject->worked_on_date = "2025-03-21";
        $newProject->content = "Primi collegamenti tra progetto e database con utilizzo di modelli e controller";
        $newProject->type_id = 1;

        $newProject->save();

        $newProject = new Project();

        $newProject->name = "laravel-migration-seeder";
        $newProject->worked_on_date = "2025-03-26";
        $newProject->content = "Inserimento di colonne nelle tabelle del database tramite migrations e popolazione edi dati con seeders e fakers";
        $newProject->type_id = 2;

        $newProject->save();
    }
}