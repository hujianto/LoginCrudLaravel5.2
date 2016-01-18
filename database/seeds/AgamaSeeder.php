<?php

use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agama')->insert([
        	[
        		'nama' => 'Islam'
        	],
        	[
        		'nama' => 'Hindu'
        	],
        	[
        		'nama' => 'Budha'
        	],
        	[
        		'nama' => 'Kristen'
        	],
        	[
        		'nama' => 'Katholik'
        	]
        ]);
    }
}
