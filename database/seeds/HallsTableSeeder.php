<?php

use Illuminate\Database\Seeder;

class HallsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('halls')->delete();
        
        \DB::table('halls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'LBC 100',
                'capacity' => '200',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'LBC 101',
                'capacity' => '150',
            ),
        ));
        
        
    }
}