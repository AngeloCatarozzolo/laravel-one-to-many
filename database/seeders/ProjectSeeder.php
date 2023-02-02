<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++) {   
            $type = Type::inRandomOrder()->first();

            $new_project = new Project();
            $new_project->name = $faker->sentence(2);
            $new_project->slug = Str::slug($new_project);
            $new_project->description = $faker->text(600);
            $new_project->customer = $faker->company();
            $new_project->type_id = $type->id;
            $new_project->save();
        }
    }
}
