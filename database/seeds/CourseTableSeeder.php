<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('courses')->insert([
			'name' => 'Investigación de operaciones',
		]);

		DB::table('courses')->insert([
			'name' => 'Sistemas de operación',
		]);

		DB::table('courses')->insert([
			'name' => 'Ingeniería del software I',
		]);

		DB::table('courses')->insert([
			'name' => 'Sistemas de bases de datos II',
		]);

		DB::table('courses')->insert([
			'name' => 'Informática industrial',
		]);

		DB::table('courses')->insert([
			'name' => 'Innovación y desarrollo',
		]);

		DB::table('courses')->insert([
			'name' => 'Nombre seminario de investigación',
		]);

		DB::table('courses')->insert([
			'name' => 'Redes de computadoras I',
		]);

		DB::table('courses')->insert([
			'name' => 'Ingeniería del software II',
		]);

		DB::table('courses')->insert([
			'name' => 'Lenguajes y compiladores',
		]);

		DB::table('courses')->insert([
			'name' => 'Tendencias informáticas',
		]);

		DB::table('courses')->insert([
			'name' => 'Sistemas de la calidad',
		]);

		DB::table('courses')->insert([
			'name' => 'Ingeniería económica',
		]);

		DB::table('courses')->insert([
			'name' => 'Auditoria de tecnologías ',
		]);

		DB::table('courses')->insert([
			'name' => 'Sistemas de información',
		]);

		DB::table('courses')->insert([
			'name' => 'Telecomunicaciones I',
		]);

		DB::table('courses')->insert([
			'name' => 'Sistemas distribuidos',
		]);

		DB::table('courses')->insert([
			'name' => 'Seminario de trabajo de grado',
		]);	   
    }
}
