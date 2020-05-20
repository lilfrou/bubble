<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BubblesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<20; $i++):
            DB::table('bubbles')
                ->insert([
                    'name' => $faker->name,
                    'color' => $faker->boolean
                ]);
        endfor;
    }
}
