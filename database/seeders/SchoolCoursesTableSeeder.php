<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolCoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_courses')->delete();
        
        \DB::table('school_courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '5',
                'school_id' => 310,
                'course_id' => 47,
                'is_active' => 1,
                'created_at' => '2023-05-24 08:27:24',
                'updated_at' => '2023-05-24 08:27:24',
            ),
            1 => 
            array (
                'id' => 2,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 89,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:03:41',
                'updated_at' => '2024-01-09 10:03:41',
            ),
            2 => 
            array (
                'id' => 3,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 36,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:04:22',
                'updated_at' => '2024-01-09 10:04:22',
            ),
            3 => 
            array (
                'id' => 4,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 56,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:04:39',
                'updated_at' => '2024-01-09 10:04:39',
            ),
            4 => 
            array (
                'id' => 5,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 92,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:04:57',
                'updated_at' => '2024-01-09 10:04:57',
            ),
            5 => 
            array (
                'id' => 6,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 50,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:05:11',
                'updated_at' => '2024-01-09 10:05:11',
            ),
            6 => 
            array (
                'id' => 7,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 248,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:05:27',
                'updated_at' => '2024-01-09 10:05:27',
            ),
            7 => 
            array (
                'id' => 8,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 42,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:05:40',
                'updated_at' => '2024-01-09 10:05:40',
            ),
            8 => 
            array (
                'id' => 9,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 55,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:05:56',
                'updated_at' => '2024-01-09 10:05:56',
            ),
            9 => 
            array (
                'id' => 10,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 109,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:06:13',
                'updated_at' => '2024-01-09 10:06:13',
            ),
            10 => 
            array (
                'id' => 11,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 285,
                'course_id' => 109,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:07:09',
                'updated_at' => '2024-01-09 10:07:09',
            ),
            11 => 
            array (
                'id' => 12,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 285,
                'course_id' => 41,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:07:22',
                'updated_at' => '2024-01-09 10:07:22',
            ),
            12 => 
            array (
                'id' => 13,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 285,
                'course_id' => 19,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:07:40',
                'updated_at' => '2024-01-09 10:07:40',
            ),
            13 => 
            array (
                'id' => 14,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 285,
                'course_id' => 111,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:07:49',
                'updated_at' => '2024-01-09 10:07:49',
            ),
            14 => 
            array (
                'id' => 15,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 285,
                'course_id' => 47,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:08:00',
                'updated_at' => '2024-01-09 10:08:00',
            ),
            15 => 
            array (
                'id' => 16,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 7,
                'course_id' => 47,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:08:35',
                'updated_at' => '2024-01-09 10:08:35',
            ),
            16 => 
            array (
                'id' => 17,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 5,
                'course_id' => 77,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:09:14',
                'updated_at' => '2024-01-09 10:09:14',
            ),
            17 => 
            array (
                'id' => 18,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 2,
                'course_id' => 51,
                'is_active' => 1,
                'created_at' => '2024-01-09 10:09:35',
                'updated_at' => '2024-01-09 10:09:35',
            ),
            18 => 
            array (
                'id' => 19,
                'years' => 4,
                'type' => 'n/a',
                'certification' => 'COE',
                'validity' => '1',
                'school_id' => 310,
                'course_id' => 57,
                'is_active' => 1,
                'created_at' => '2024-01-09 11:01:04',
                'updated_at' => '2024-01-09 11:01:04',
            ),
        ));
        
        
    }
}