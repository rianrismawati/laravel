<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	for($i=0; $i<+10; $i++){
    		 DB::table('first')->insert([
            'title' => $faker->title,
            'description' => $faker->text,
        ]);
    	}
         
    }
}
