<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CourseUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 50; $i++) { 
        	DB::table('course_user')->insert([
        		'course_id' => $faker->numberBetween($min = 1, $max = 18),
        		'student_id' => $faker->numberBetween($min = 2, $max = 41),
        		'qualification' => $faker->numberBetween($min = 0, $max = 20),
        	]);
        }
    }
}
