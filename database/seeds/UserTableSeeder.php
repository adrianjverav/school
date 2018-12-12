<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
        	'name' => 'Admin',
        	'surname' => 'Admin',
        	'email' => 'admin@school.test',
        	'password' => bcrypt('secret'),
        	'role' => 'admin',
        ]);

        for ($i=0; $i < 40; $i++) { 
        	DB::table('users')->insert([
        		'name' => $name = $faker->firstName,
        		'surname' => $surname = $faker->lastName,
        		'email' => strtolower($name . '_' . $surname . '@school.test'),
        		'password' => bcrypt('secret'),
        		'role' => $faker->randomElement($array = array('student', 'teacher')),
        	]);
        }
    }
}
