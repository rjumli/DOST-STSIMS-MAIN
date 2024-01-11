<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QualifierNotavailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifier_notavails')->delete();
        
        \DB::table('qualifier_notavails')->insert(array (
            0 => 
            array (
                'id' => 1,
                'reason' => 'BSN course',
                'is_seened' => 0,
                'qualifier_id' => 153,
                'user_id' => 11,
                'created_at' => '2024-01-10 08:52:12',
                'updated_at' => '2024-01-10 08:52:12',
            ),
            1 => 
            array (
                'id' => 2,
                'reason' => 'not specified',
                'is_seened' => 0,
                'qualifier_id' => 148,
                'user_id' => 11,
                'created_at' => '2024-01-10 08:54:04',
                'updated_at' => '2024-01-10 08:54:04',
            ),
            2 => 
            array (
                'id' => 3,
                'reason' => 'BSN Course',
                'is_seened' => 0,
                'qualifier_id' => 27,
                'user_id' => 11,
                'created_at' => '2024-01-10 08:56:55',
                'updated_at' => '2024-01-10 08:56:55',
            ),
            3 => 
            array (
                'id' => 4,
                'reason' => 'BSN Course',
                'is_seened' => 0,
                'qualifier_id' => 96,
                'user_id' => 11,
                'created_at' => '2024-01-10 08:57:14',
                'updated_at' => '2024-01-10 08:57:14',
            ),
            4 => 
            array (
                'id' => 5,
                'reason' => 'BSN Course',
                'is_seened' => 0,
                'qualifier_id' => 141,
                'user_id' => 11,
                'created_at' => '2024-01-10 08:57:52',
                'updated_at' => '2024-01-10 08:57:52',
            ),
            5 => 
            array (
                'id' => 6,
                'reason' => 'BSN Course',
                'is_seened' => 0,
                'qualifier_id' => 42,
                'user_id' => 11,
                'created_at' => '2024-01-10 08:58:43',
                'updated_at' => '2024-01-10 08:58:43',
            ),
            6 => 
            array (
                'id' => 7,
                'reason' => 'not specified',
                'is_seened' => 0,
                'qualifier_id' => 37,
                'user_id' => 11,
                'created_at' => '2024-01-10 08:59:17',
                'updated_at' => '2024-01-10 08:59:17',
            ),
        ));
        
        
    }
}