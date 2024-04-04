<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('projects')->insert([
        'title'       => $faker->colorName(),
        'intro'       => $faker->text(50),
        'description' => $faker->text(),
        'active'      => true,
        'image'       => $faker->string('image')->nullable()
        ]);
    }
}
