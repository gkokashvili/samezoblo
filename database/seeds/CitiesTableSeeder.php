<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cities = array('Tbilisi','Batumi','Kutaisi', 'Rustavi', 'Gori', 'Zugdidi');
    	foreach ($cities as $key => $value) {
    		DB::table('cities')->insert([
            	'name' => $value
        	]);
    	}
    }
}
