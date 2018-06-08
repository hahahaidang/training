<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($iLoop = 0; $iLoop < 10; $iLoop++){
	        // DB::table('users')->insert([
	        //     'name' => str_random(6),
	        //     'email' => strtolower(str_random(6)).'@gmail.com',
	        //     'password' => bcrypt('123456'),
	        //     'level' => '1'
	        // ]);

	        // DB::table('catelogies')->insert([
	        //     'name' => str_random(6).' '.str_random(6),
	        //     'description' => str_random(6).' '.str_random(6).' '.str_random(6),


	        // ]);

	        DB::table('products')->insert([
	            'name' => str_random(6).' '.str_random(6),
	            'url' => '/img/hJf6bCzyLahLKvN_test.jpeg',
	            'price' => mt_rand(1000,9000),
	            'discount' => mt_rand(1,50),
	            'description' => str_random(900).' '.str_random(90).' '.str_random(90),
	            'id_catelogy' => mt_rand(1,9)
	        ]);
    	}
    }
}
