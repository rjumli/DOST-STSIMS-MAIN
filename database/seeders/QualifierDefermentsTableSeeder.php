<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QualifierDefermentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifier_deferments')->delete();
        
        \DB::table('qualifier_deferments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 2,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            1 => 
            array (
                'id' => 2,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 6,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            2 => 
            array (
                'id' => 3,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 35,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            3 => 
            array (
                'id' => 4,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 52,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            4 => 
            array (
                'id' => 5,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 94,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            5 => 
            array (
                'id' => 6,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 100,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            6 => 
            array (
                'id' => 7,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 113,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            7 => 
            array (
                'id' => 8,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 118,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            8 => 
            array (
                'id' => 9,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 136,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            9 => 
            array (
                'id' => 10,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 147,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            10 => 
            array (
                'id' => 11,
                'reason' => 'not specified',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 160,
                'user_id' => 11,
                'created_at' => '2024-01-10 09:26:51',
                'updated_at' => '2024-01-10 09:26:51',
            ),
            11 => 
            array (
                'id' => 12,
                'reason' => 'testing',
                'availed_year' => NULL,
                'file' => NULL,
                'is_availing' => 0,
                'is_seened' => 0,
                'qualifier_id' => 31,
                'user_id' => 11,
                'created_at' => '2024-01-12 13:20:49',
                'updated_at' => '2024-01-12 13:20:49',
            ),
        ));
        
        
    }
}