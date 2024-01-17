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
                'reason' => 'STILL UNDECIDED',
                'is_seened' => 0,
                'qualifier_id' => 43,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:08:17',
                'updated_at' => '2024-01-17 16:08:17',
            ),
            1 => 
            array (
                'id' => 2,
            'reason' => 'CHOSEN PROGRAM IS NOT A PRIORITY (DOCTOR OF DENTAL MEDICINE)',
                'is_seened' => 0,
                'qualifier_id' => 114,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:08:39',
                'updated_at' => '2024-01-17 16:08:39',
            ),
            2 => 
            array (
                'id' => 3,
                'reason' => 'PLANNING TO GO ABROAD',
                'is_seened' => 0,
                'qualifier_id' => 118,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:08:40',
                'updated_at' => '2024-01-17 16:08:40',
            ),
            3 => 
            array (
                'id' => 4,
                'reason' => 'UNIVERSITY TO ENTER NOT DOST ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 119,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:08:41',
                'updated_at' => '2024-01-17 16:08:41',
            ),
            4 => 
            array (
                'id' => 5,
                'reason' => 'MY COLLEGE PROGRAM IN UP MANILA, DOCTOR OF DENTAL MEDICINE, IS NOT COVERED BY THE DOST-SEI UNDERGRADUATE SCHOLARSHIPS',
                'is_seened' => 0,
                'qualifier_id' => 226,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:14',
                'updated_at' => '2024-01-17 16:09:14',
            ),
            5 => 
            array (
                'id' => 6,
                'reason' => 'MY CHOSEN COLLEGE COURSE IS NOT QUALIFIED FOR THE PROGRAM.',
                'is_seened' => 0,
                'qualifier_id' => 228,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:14',
                'updated_at' => '2024-01-17 16:09:14',
            ),
            6 => 
            array (
                'id' => 7,
                'reason' => 'PREFFERED SCHOOL IS NOT QUALIFIED',
                'is_seened' => 0,
                'qualifier_id' => 233,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:16',
                'updated_at' => '2024-01-17 16:09:16',
            ),
            7 => 
            array (
                'id' => 8,
                'reason' => 'I AM ALREADY ENROLLED IN A NON-PRIORITY PROGRAM IN A STATE UNIVERSITY',
                'is_seened' => 0,
                'qualifier_id' => 240,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:18',
                'updated_at' => '2024-01-17 16:09:18',
            ),
            8 => 
            array (
                'id' => 9,
                'reason' => 'I DECIDED TO PURSUE BS NURSING INSTEAD OF BS MEDICAL TECHNOLOGY',
                'is_seened' => 0,
                'qualifier_id' => 312,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:39',
                'updated_at' => '2024-01-17 16:09:39',
            ),
            9 => 
            array (
                'id' => 10,
                'reason' => 'PARENTS NOT INTERESTED',
                'is_seened' => 0,
                'qualifier_id' => 344,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:49',
                'updated_at' => '2024-01-17 16:09:49',
            ),
            10 => 
            array (
                'id' => 11,
                'reason' => 'MY COURSE IS NOT ON THE 2023 DOST-SEI UNDERGRADUATE SCHOLARSHIPS PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 352,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:52',
                'updated_at' => '2024-01-17 16:09:52',
            ),
            11 => 
            array (
                'id' => 12,
                'reason' => 'MY CURRENT COURSE IS NOT A PRIORITY COURSE OF THE SCHOLARSHIP ',
                'is_seened' => 0,
                'qualifier_id' => 377,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:09:59',
                'updated_at' => '2024-01-17 16:09:59',
            ),
            12 => 
            array (
                'id' => 13,
                'reason' => 'DEGREE PROGRAM IS NOT ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 381,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:01',
                'updated_at' => '2024-01-17 16:10:01',
            ),
            13 => 
            array (
                'id' => 14,
                'reason' => 'I ALSO AVAILED A SCHOLARSHIP FROM LPU-C WHICH FORBIDS ME TO TAKE MORE THAN 1 SCHOLARSHIPS ',
                'is_seened' => 0,
                'qualifier_id' => 407,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:09',
                'updated_at' => '2024-01-17 16:10:09',
            ),
            14 => 
            array (
                'id' => 15,
                'reason' => 'I WILL PURSUE A NON-STEM DEGREE',
                'is_seened' => 0,
                'qualifier_id' => 416,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:12',
                'updated_at' => '2024-01-17 16:10:12',
            ),
            15 => 
            array (
                'id' => 16,
                'reason' => 'COURSE I WANT TO TAKE IS NOT ONE OF THE COURSES OFFERED',
                'is_seened' => 0,
                'qualifier_id' => 435,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:20',
                'updated_at' => '2024-01-17 16:10:20',
            ),
            16 => 
            array (
                'id' => 17,
                'reason' => 'DID NOT FIND THE CONDITIONS WORTH THE BENEFITS',
                'is_seened' => 0,
                'qualifier_id' => 454,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:26',
                'updated_at' => '2024-01-17 16:10:26',
            ),
            17 => 
            array (
                'id' => 18,
                'reason' => 'THE COURSE THAT I WILL BE TAKING UP IS NOT SUPPORTED BY THE SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 489,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:37',
                'updated_at' => '2024-01-17 16:10:37',
            ),
            18 => 
            array (
                'id' => 19,
                'reason' => 'BACHELOR OF SCIENCE IN NURSING, THE COURSE I WILL BE PURSUING, IS NOT INCLUDED IN THE LIST OF PRIORITY COURSES COVERED BY THE SCHOLARSHIP PROGRAM.',
                'is_seened' => 0,
                'qualifier_id' => 502,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:41',
                'updated_at' => '2024-01-17 16:10:41',
            ),
            19 => 
            array (
                'id' => 20,
                'reason' => 'My chosen course isn\'t on the DOST-SEI priority list. ',
                'is_seened' => 0,
                'qualifier_id' => 529,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:50',
                'updated_at' => '2024-01-17 16:10:50',
            ),
            20 => 
            array (
                'id' => 21,
                'reason' => 'LEVEL OF ACCREDITATION ONLY AT LEVEL II',
                'is_seened' => 0,
                'qualifier_id' => 539,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:10:53',
                'updated_at' => '2024-01-17 16:10:53',
            ),
            21 => 
            array (
                'id' => 22,
                'reason' => 'COLEGIO DE MUNTINLUPA, A SCHOOL THAT I AM ENROLLED IN, IS NOT A DOST ACCREDITED STATE COLLEGE. I WOULD LIKE TO DEFER MY SCHOLARSHIP AND WAIT A YEAR FOR THE SAID SCHOOL TO BE DOST ACCREDITED. ',
                'is_seened' => 0,
                'qualifier_id' => 572,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:11:04',
                'updated_at' => '2024-01-17 16:11:04',
            ),
            22 => 
            array (
                'id' => 23,
                'reason' => 'GOT ACCEPTED IN UPLB BUT A NON-PRIO DOST COURSE',
                'is_seened' => 0,
                'qualifier_id' => 594,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:11:10',
                'updated_at' => '2024-01-17 16:11:10',
            ),
            23 => 
            array (
                'id' => 24,
                'reason' => 'BSCE IN DLSU-DASMARINAS IS NOT DOST ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 670,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:11:35',
                'updated_at' => '2024-01-17 16:11:35',
            ),
            24 => 
            array (
                'id' => 25,
                'reason' => 'COLEGIO DE MUNTINLUPA IS NOT YET ACCREDITED WITH DOST',
                'is_seened' => 0,
                'qualifier_id' => 725,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:11:58',
                'updated_at' => '2024-01-17 16:11:58',
            ),
            25 => 
            array (
                'id' => 26,
            'reason' => 'MY COURSE (BS NURSING) AND MY CHOSEN SCHOOL (DE LA SALLE LIPA) ARE NOT ACCREDITED FOR DOST SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 748,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:12:05',
                'updated_at' => '2024-01-17 16:12:05',
            ),
            26 => 
            array (
                'id' => 27,
                'reason' => 'STUDYING ABROAD',
                'is_seened' => 0,
                'qualifier_id' => 768,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:12:12',
                'updated_at' => '2024-01-17 16:12:12',
            ),
            27 => 
            array (
                'id' => 28,
                'reason' => 'ENROLLMENT TO NON-ACCREDITED COURSE',
                'is_seened' => 0,
                'qualifier_id' => 802,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:12:22',
                'updated_at' => '2024-01-17 16:12:22',
            ),
            28 => 
            array (
                'id' => 29,
            'reason' => 'CURRENTLY ENROLLED UNDER A NON-PRIORITY COURSE OF THE SCHOLARSHIP (BACHELOR OF ARTS IN ECONOMICS)',
                'is_seened' => 0,
                'qualifier_id' => 814,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:12:26',
                'updated_at' => '2024-01-17 16:12:26',
            ),
            29 => 
            array (
                'id' => 30,
            'reason' => 'MY CHOSEN COURSE(BS NURSING) IS NOT ON THE PRIORITY LIST OF DOST',
                'is_seened' => 0,
                'qualifier_id' => 823,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:12:29',
                'updated_at' => '2024-01-17 16:12:29',
            ),
            30 => 
            array (
                'id' => 31,
                'reason' => 'UNDERTAKING A PROGRAM NOT ACCREDITED BY DOST',
                'is_seened' => 0,
                'qualifier_id' => 901,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:12:55',
                'updated_at' => '2024-01-17 16:12:55',
            ),
            31 => 
            array (
                'id' => 32,
                'reason' => 'REASON FOR DEFERMENT NOT ACCEPTED. DECIDED TO CONTINUE THE GAP SEM.',
                'is_seened' => 0,
                'qualifier_id' => 940,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:13:07',
                'updated_at' => '2024-01-17 16:13:07',
            ),
            32 => 
            array (
                'id' => 33,
                'reason' => 'COURSE TO BE ENROLLED IS NOT INCLUDED IN THE PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 979,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:13:23',
                'updated_at' => '2024-01-17 16:13:23',
            ),
            33 => 
            array (
                'id' => 34,
            'reason' => 'CHOSEN COURSE (POLITICAL SCIENCE) IS NOT UNDER THE DOST PRIORITY COURSES LIST.',
                'is_seened' => 0,
                'qualifier_id' => 1036,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:13:42',
                'updated_at' => '2024-01-17 16:13:42',
            ),
            34 => 
            array (
                'id' => 35,
                'reason' => 'CHOSEN COURSE IS NOT WITHIN THE LIST OF PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 1051,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:13:46',
                'updated_at' => '2024-01-17 16:13:46',
            ),
            35 => 
            array (
                'id' => 36,
                'reason' => 'NOT IN THE LIST OF PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 1055,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:13:47',
                'updated_at' => '2024-01-17 16:13:47',
            ),
            36 => 
            array (
                'id' => 37,
                'reason' => 'ACCEPTANCE OF ANOTHER SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 1067,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:13:51',
                'updated_at' => '2024-01-17 16:13:51',
            ),
            37 => 
            array (
                'id' => 38,
                'reason' => 'I AM ALREADY ENROLLED IN BACHELOR OF SCIENCE IN SOCIAL WORK AT BICOL UNIVERSITY',
                'is_seened' => 0,
                'qualifier_id' => 1098,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:14:02',
                'updated_at' => '2024-01-17 16:14:02',
            ),
            38 => 
            array (
                'id' => 39,
                'reason' => 'THE DEGREE PROGRAM I\'M ENROLLED IN IS NOT UNDER ANY DOST-SEI S&T DEGREE PROGRAMS.',
                'is_seened' => 0,
                'qualifier_id' => 1186,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:14:29',
                'updated_at' => '2024-01-17 16:14:29',
            ),
            39 => 
            array (
                'id' => 40,
                'reason' => 'COURSE IS A NON-PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 1245,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:14:47',
                'updated_at' => '2024-01-17 16:14:47',
            ),
            40 => 
            array (
                'id' => 41,
                'reason' => 'MY ENROLLED COURSE IS NOT INCLUDED IN THE PRIORITY COURSES.',
                'is_seened' => 0,
                'qualifier_id' => 1278,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:14:57',
                'updated_at' => '2024-01-17 16:14:57',
            ),
            41 => 
            array (
                'id' => 42,
                'reason' => 'ENROLLED COURSE NOT UNDER THE PRIORITY COURSES OF DOST',
                'is_seened' => 0,
                'qualifier_id' => 1326,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:15:11',
                'updated_at' => '2024-01-17 16:15:11',
            ),
            42 => 
            array (
                'id' => 43,
                'reason' => 'WILL ACCEPT THE OWWA SCHOLARHIP PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 1344,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:15:17',
                'updated_at' => '2024-01-17 16:15:17',
            ),
            43 => 
            array (
                'id' => 44,
                'reason' => 'BECAUSE I HAVE ANOTHER SCHOLARSHIP OFFERED, AND IT DOES NOT ALLOW OTHER SCHOLARSHIP ASIDE FROM THEIRS.',
                'is_seened' => 0,
                'qualifier_id' => 1360,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:15:22',
                'updated_at' => '2024-01-17 16:15:22',
            ),
            44 => 
            array (
                'id' => 45,
                'reason' => 'I AM PURSUING A NON-PRIOTY PROGRAM ',
                'is_seened' => 0,
                'qualifier_id' => 1372,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:15:25',
                'updated_at' => '2024-01-17 16:15:25',
            ),
            45 => 
            array (
                'id' => 46,
                'reason' => 'MY SCHOOL IS NOT A DOST SCHOLARSHIP ACCREDITED.',
                'is_seened' => 0,
                'qualifier_id' => 1399,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:15:34',
                'updated_at' => '2024-01-17 16:15:34',
            ),
            46 => 
            array (
                'id' => 47,
                'reason' => 'I AM PURSUING A NON S&T DEGREE COURSE ',
                'is_seened' => 0,
                'qualifier_id' => 1432,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:15:44',
                'updated_at' => '2024-01-17 16:15:44',
            ),
            47 => 
            array (
                'id' => 48,
                'reason' => 'I WAS ENROLLED IN A NON-PRIORITY COUSE',
                'is_seened' => 0,
                'qualifier_id' => 1500,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:16:05',
                'updated_at' => '2024-01-17 16:16:05',
            ),
            48 => 
            array (
                'id' => 49,
            'reason' => 'ENROLLED IN A NON PRIORITY COURSE (BS DEVCOM - UPLB)',
                'is_seened' => 0,
                'qualifier_id' => 1576,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:16:28',
                'updated_at' => '2024-01-17 16:16:28',
            ),
            49 => 
            array (
                'id' => 50,
                'reason' => 'I AM TAKING BS IN MEDICAL TECHNOLOGY AT MANUEL S. ENVERGA UNIVERSITY FOUNDATION. BSMET OF MSEUF IS NOT INCLUDED IN THE PACUCOA\'S LIST OF ACCREDITED PROGRAMS/INSTITUTIONS.',
                'is_seened' => 0,
                'qualifier_id' => 1581,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:16:30',
                'updated_at' => '2024-01-17 16:16:30',
            ),
            50 => 
            array (
                'id' => 51,
                'reason' => 'DEGREE COURSE NOT APPROVED',
                'is_seened' => 0,
                'qualifier_id' => 1588,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:16:32',
                'updated_at' => '2024-01-17 16:16:32',
            ),
            51 => 
            array (
                'id' => 52,
                'reason' => 'MY SCHOOL IS NOT ACCREDITED OF DOST SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 1622,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:16:43',
                'updated_at' => '2024-01-17 16:16:43',
            ),
            52 => 
            array (
                'id' => 53,
                'reason' => 'DUE TO MY CHOSEN COURSE, BS IN NURSING, WHICH IS NOT INCLUDED IN THE PRIORITIZED COURSES OF THE SCHOLARSHIP ',
                'is_seened' => 0,
                'qualifier_id' => 1632,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:16:46',
                'updated_at' => '2024-01-17 16:16:46',
            ),
            53 => 
            array (
                'id' => 54,
                'reason' => 'PLV / SCHOOL DOES NOT HAVE A FAAP LEVEL III CERTIFICATE',
                'is_seened' => 0,
                'qualifier_id' => 1696,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:17:06',
                'updated_at' => '2024-01-17 16:17:06',
            ),
            54 => 
            array (
                'id' => 55,
            'reason' => 'ENROLLED IN ATENEO DE ZAMBOANGA UNIVERSITY (ADZU) UNDER BS BIO 1',
                'is_seened' => 0,
                'qualifier_id' => 1726,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:17:15',
                'updated_at' => '2024-01-17 16:17:15',
            ),
            55 => 
            array (
                'id' => 56,
                'reason' => 'I DECIDED TO TAKE BS NURSING',
                'is_seened' => 0,
                'qualifier_id' => 1732,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:17:17',
                'updated_at' => '2024-01-17 16:17:17',
            ),
            56 => 
            array (
                'id' => 57,
                'reason' => 'NOT DOST ACCREDITED SCHOOL',
                'is_seened' => 0,
                'qualifier_id' => 1750,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:17:22',
                'updated_at' => '2024-01-17 16:17:22',
            ),
            57 => 
            array (
                'id' => 58,
                'reason' => 'I AM ALREADY ENROLLED IN COURSE THAT IS NOT A PRIORITY OF THE SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 1783,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:17:33',
                'updated_at' => '2024-01-17 16:17:33',
            ),
            58 => 
            array (
                'id' => 59,
                'reason' => 'CHOSEN SCHOOL IS NOT ACCREDITED FAAP LEVEL III',
                'is_seened' => 0,
                'qualifier_id' => 1907,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:18:11',
                'updated_at' => '2024-01-17 16:18:11',
            ),
            59 => 
            array (
                'id' => 60,
                'reason' => 'AVAILED THE CHED SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 1914,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:18:13',
                'updated_at' => '2024-01-17 16:18:13',
            ),
            60 => 
            array (
                'id' => 61,
                'reason' => 'I HAVE ALREADY ENROLLED AT SILLIMAN UNIVERSITY FOR BS ARCHITECURE AND UNFORTUNATELY, I JUST FOUND OUT THAT MY PROGRAM IS NOT ACCREDITED BY THE SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 1943,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:18:22',
                'updated_at' => '2024-01-17 16:18:22',
            ),
            61 => 
            array (
                'id' => 62,
                'reason' => 'MY UNIVERSITY DOES NOT SATISFY THE STUDY PLACEMENT REQUIREMENTS ',
                'is_seened' => 0,
                'qualifier_id' => 1949,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:18:24',
                'updated_at' => '2024-01-17 16:18:24',
            ),
            62 => 
            array (
                'id' => 63,
                'reason' => 'GOT INTO A DEGREE PROGRAM NOT UNDER DOST PRIORITY PROGRAMS THAT I DECIDED TO PURSUE DUE TO THE FULL SCHOLARSHIP IT OFFERED AND IS THE APPLICANT\'S DESIRED DEGREE PROGRAM.',
                'is_seened' => 0,
                'qualifier_id' => 1971,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:18:30',
                'updated_at' => '2024-01-17 16:18:30',
            ),
            63 => 
            array (
                'id' => 64,
                'reason' => 'I FAILED TO ENROLL IN AN APPROVED UNIVERSITY. ',
                'is_seened' => 0,
                'qualifier_id' => 1997,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:18:38',
                'updated_at' => '2024-01-17 16:18:38',
            ),
            64 => 
            array (
                'id' => 65,
                'reason' => 'I ALREADY ENROLLED IN UNIVERSITY OF CEBU WHICH IS A NON AFFILIATED INSTITUTION OF THIS SCHOLARSHIP AND THE OTHER SCHOOL THAT IS AFFILIATED WITH DOST SCHOLARSHIP IS TOO FAR FROM OUR HOME.',
                'is_seened' => 0,
                'qualifier_id' => 2058,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:18:57',
                'updated_at' => '2024-01-17 16:18:57',
            ),
            65 => 
            array (
                'id' => 66,
                'reason' => 'ENROLLED COURSE, AB PSYCHOLOGY, IS NOT LISTED IN THE DOST-SEI S&T PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 2068,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:19:00',
                'updated_at' => '2024-01-17 16:19:00',
            ),
            66 => 
            array (
                'id' => 67,
                'reason' => 'MY SCHOLARSHIP IS NOT APPLICABLE FOR MY CHOSEN COURSE IN MY SCHOOL.',
                'is_seened' => 0,
                'qualifier_id' => 2076,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:19:02',
                'updated_at' => '2024-01-17 16:19:02',
            ),
            67 => 
            array (
                'id' => 68,
                'reason' => 'MY COURSE IS NOT COVERED UNDER THE DOST SCHOLARSHIP. NEVERTHELESS, THANK YOU VERY MUCH. ',
                'is_seened' => 0,
                'qualifier_id' => 2077,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:19:03',
                'updated_at' => '2024-01-17 16:19:03',
            ),
            68 => 
            array (
                'id' => 69,
            'reason' => 'MY CHOSEN COURSE (BS ECE) DOES NOT HAVE THE LEVEL III FAAP ACCREDITATION IN MY CHOSEN SCHOOL (DE LA SALLE LIPA).',
                'is_seened' => 0,
                'qualifier_id' => 2127,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:19:18',
                'updated_at' => '2024-01-17 16:19:18',
            ),
            69 => 
            array (
                'id' => 70,
                'reason' => 'COURSE IS NOT A S&T PRIORITY ',
                'is_seened' => 0,
                'qualifier_id' => 2184,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:19:35',
                'updated_at' => '2024-01-17 16:19:35',
            ),
            70 => 
            array (
                'id' => 71,
                'reason' => 'WE CHANGED OUR MINDS ABOUT THIS SCHOLARSHIP AND BECAUSE I WOULD LIKE TO PURSUE MY ENTIRE COLLEGE EDUCATION AT A NON-DOST ACCREDITED SCHOOL.',
                'is_seened' => 0,
                'qualifier_id' => 2277,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:20:04',
                'updated_at' => '2024-01-17 16:20:04',
            ),
            71 => 
            array (
                'id' => 72,
                'reason' => 'THE DEGREE PROGRAM I AM PURSUING IS NOT IN THE DOST-SEI PRIORITY PROGRAM ',
                'is_seened' => 0,
                'qualifier_id' => 2383,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:20:38',
                'updated_at' => '2024-01-17 16:20:38',
            ),
            72 => 
            array (
                'id' => 73,
                'reason' => 'MY COURSE IS NOT IN THE DOST PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 2404,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:20:45',
                'updated_at' => '2024-01-17 16:20:45',
            ),
            73 => 
            array (
                'id' => 74,
                'reason' => 'MY CHOSEN COURSE IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 2425,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:20:51',
                'updated_at' => '2024-01-17 16:20:51',
            ),
            74 => 
            array (
                'id' => 75,
                'reason' => 'I CANNOT AVAIL THE SCHOLARSHIP FOR MY CHOSEN COURSE',
                'is_seened' => 0,
                'qualifier_id' => 2434,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:20:54',
                'updated_at' => '2024-01-17 16:20:54',
            ),
            75 => 
            array (
                'id' => 76,
            'reason' => 'MY UNIVERSITY (UNIVERSITY OF CABUYAO) AND MY COURSE (BS NURSING) IS NOT ACCREDITED BY THE CHED',
                'is_seened' => 0,
                'qualifier_id' => 2436,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:20:55',
                'updated_at' => '2024-01-17 16:20:55',
            ),
            76 => 
            array (
                'id' => 77,
                'reason' => 'COURSE IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 2448,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:20:58',
                'updated_at' => '2024-01-17 16:20:58',
            ),
            77 => 
            array (
                'id' => 78,
                'reason' => 'I AM NOT AVAILING THE SCHOLARSHIP DUE TO THE REASON THAT THERE IS NO ACCREDITED SCHOOL THAT OFFERS MY COURSE NEAR MY RESIDENCE.',
                'is_seened' => 0,
                'qualifier_id' => 2471,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:06',
                'updated_at' => '2024-01-17 16:21:06',
            ),
            78 => 
            array (
                'id' => 79,
                'reason' => 'CURRENTLY ENROLLED IN A NON-PRIORITY PROGRAM ELIGIBLE FOR SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 2543,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:28',
                'updated_at' => '2024-01-17 16:21:28',
            ),
            79 => 
            array (
                'id' => 80,
                'reason' => 'CHOSEN COLLEGE COURSE IS NOT APPLICABLE',
                'is_seened' => 0,
                'qualifier_id' => 2545,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:29',
                'updated_at' => '2024-01-17 16:21:29',
            ),
            80 => 
            array (
                'id' => 81,
                'reason' => 'I AM TAKING BS NURSING',
                'is_seened' => 0,
                'qualifier_id' => 2566,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:36',
                'updated_at' => '2024-01-17 16:21:36',
            ),
            81 => 
            array (
                'id' => 82,
                'reason' => 'PENDING IMMIGRATION APPLICATION',
                'is_seened' => 0,
                'qualifier_id' => 2595,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:45',
                'updated_at' => '2024-01-17 16:21:45',
            ),
            82 => 
            array (
                'id' => 83,
                'reason' => 'MY COURSE IS NOT AMONG THE PRIORITY COURSES OF DOST-SEI.',
                'is_seened' => 0,
                'qualifier_id' => 2617,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:52',
                'updated_at' => '2024-01-17 16:21:52',
            ),
            83 => 
            array (
                'id' => 84,
                'reason' => 'ENROLLED IN A NOT PRIORITY COURSE ',
                'is_seened' => 0,
                'qualifier_id' => 2623,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:53',
                'updated_at' => '2024-01-17 16:21:53',
            ),
            84 => 
            array (
                'id' => 85,
                'reason' => 'I\'M REALLY EAGER TO RECEIVE THE DOST SCHOLARSHIP, BUT UNFORTUNATELY, MY CHOSEN COURSE, BS NAVAL ARCHITECTURE AND MARINE ENGINEERING, IS NOT LISTED AMONG YOUR PRIORITY COURSES.',
                'is_seened' => 0,
                'qualifier_id' => 2627,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:55',
                'updated_at' => '2024-01-17 16:21:55',
            ),
            85 => 
            array (
                'id' => 86,
                'reason' => 'WILL BE GOING ABROAD AFTER GRADUATING',
                'is_seened' => 0,
                'qualifier_id' => 2642,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:21:59',
                'updated_at' => '2024-01-17 16:21:59',
            ),
            86 => 
            array (
                'id' => 87,
                'reason' => 'THE SCHOOL I AM ENROLLED AT IS NOT AN ACCREDITED SCHOOL FOR DOST',
                'is_seened' => 0,
                'qualifier_id' => 2662,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:22:05',
                'updated_at' => '2024-01-17 16:22:05',
            ),
            87 => 
            array (
                'id' => 88,
            'reason' => 'LESSER NEED FOR THE FINANCIAL ASSISTANCE, AS THE COLLEGE I HAVE ENROLLED IN (UNIVERSITY OF THE PHILIPPINES - LOS BAÑOS) HAS FREE TUITION FEE.',
                'is_seened' => 0,
                'qualifier_id' => 2682,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:22:11',
                'updated_at' => '2024-01-17 16:22:11',
            ),
            88 => 
            array (
                'id' => 89,
                'reason' => 'ACCEPTANCE OF ADMISSION TO A STATE UNIVERSITY THAT IS ALREADY FREE OF TUITION',
                'is_seened' => 0,
                'qualifier_id' => 2707,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:22:19',
                'updated_at' => '2024-01-17 16:22:19',
            ),
            89 => 
            array (
                'id' => 90,
                'reason' => 'I HAVE A PENDING APPLICATION TO STUDY IN ANOTHER SCHOOL. ',
                'is_seened' => 0,
                'qualifier_id' => 2728,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:22:26',
                'updated_at' => '2024-01-17 16:22:26',
            ),
            90 => 
            array (
                'id' => 91,
                'reason' => 'I HAVE ALREADY ENROLLED IN BS NURSING WHICH IS A NON S&T PRIORITY PROGRAM OF DOST SINCE I HAVE NOT PASSED THE COURSE I INITIALLY APPLIED FOR IN MY DOST APPLICATION. ',
                'is_seened' => 0,
                'qualifier_id' => 2760,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:22:36',
                'updated_at' => '2024-01-17 16:22:36',
            ),
            91 => 
            array (
                'id' => 92,
                'reason' => 'THE DEGREE COURSE I WILL BE PURSUING IS A NON-DOST PRIORITY DEGREE COURSE',
                'is_seened' => 0,
                'qualifier_id' => 2770,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:22:39',
                'updated_at' => '2024-01-17 16:22:39',
            ),
            92 => 
            array (
                'id' => 93,
                'reason' => 'THE COUSE I WILL BE TAKING IS NOT CREDITED ',
                'is_seened' => 0,
                'qualifier_id' => 2867,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:23:09',
                'updated_at' => '2024-01-17 16:23:09',
            ),
            93 => 
            array (
                'id' => 94,
                'reason' => 'STUDYING ABROAD',
                'is_seened' => 0,
                'qualifier_id' => 2873,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:23:11',
                'updated_at' => '2024-01-17 16:23:11',
            ),
            94 => 
            array (
                'id' => 95,
                'reason' => 'EVEN THOUGH MY COURSE IS STEM THE COURSE IS NOT INCLUDED IN THE DOST SCHOLARSHIP ',
                'is_seened' => 0,
                'qualifier_id' => 2885,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:23:15',
                'updated_at' => '2024-01-17 16:23:15',
            ),
            95 => 
            array (
                'id' => 96,
                'reason' => 'MY COURSE IS NOT IN THE PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 2905,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:23:21',
                'updated_at' => '2024-01-17 16:23:21',
            ),
            96 => 
            array (
                'id' => 97,
                'reason' => 'UST ARCHITECTURE IS NOT ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 3040,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:03',
                'updated_at' => '2024-01-17 16:24:03',
            ),
            97 => 
            array (
                'id' => 98,
                'reason' => 'WILL PURSUE BS NURSING',
                'is_seened' => 0,
                'qualifier_id' => 3059,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:08',
                'updated_at' => '2024-01-17 16:24:08',
            ),
            98 => 
            array (
                'id' => 99,
                'reason' => 'THE COURSE I WANT TO PURSUE IS NOT A PRIORITY COURSE OF DOST-SEI SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 3079,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:14',
                'updated_at' => '2024-01-17 16:24:14',
            ),
            99 => 
            array (
                'id' => 100,
                'reason' => 'THE COURSE I INTEND TO PURSUE IS NOT A PRIORITY PROGRAM OF DOST SEI AND IS NOT A SCIENCE RELATED COURSE.',
                'is_seened' => 0,
                'qualifier_id' => 3085,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:16',
                'updated_at' => '2024-01-17 16:24:16',
            ),
            100 => 
            array (
                'id' => 101,
                'reason' => 'I ENROLLED IN A NON-PRIORITY COURSE ',
                'is_seened' => 0,
                'qualifier_id' => 3093,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:19',
                'updated_at' => '2024-01-17 16:24:19',
            ),
            101 => 
            array (
                'id' => 102,
                'reason' => 'The university scholarship that I applied to cannot be availed with the DOST scholarship.',
                'is_seened' => 0,
                'qualifier_id' => 3169,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:42',
                'updated_at' => '2024-01-17 16:24:42',
            ),
            102 => 
            array (
                'id' => 103,
                'reason' => 'THE SCHOOL I WILL BE ENROLLING TO DOES NOT NEED DOST SCHOLARSHIP A. I HOPE I CAN USE IT IN THE FUTURE.ND THE COURSE IS NOT ALIGNED WITH THE PRIORITY PROGRAM OF DOST',
                'is_seened' => 0,
                'qualifier_id' => 3201,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:52',
                'updated_at' => '2024-01-17 16:24:52',
            ),
            103 => 
            array (
                'id' => 104,
                'reason' => 'I AM PURSUING A NON-BACHELOR OF SCIENCE DEGREE PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 3203,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:24:52',
                'updated_at' => '2024-01-17 16:24:52',
            ),
            104 => 
            array (
                'id' => 105,
                'reason' => 'I WAS UNABLE TO PASS AND APPLY TO A PRIORITY COURSE STATED ON THE WEBSITE.',
                'is_seened' => 0,
                'qualifier_id' => 3223,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:25:00',
                'updated_at' => '2024-01-17 16:25:00',
            ),
            105 => 
            array (
                'id' => 106,
                'reason' => 'SCHOLARSHIP BENEFITS IS NOT ENOUGH TO COVER THE TUITION FEES OF ACCREDITED UNIVERSITIES; LACKING FINANCIALLY TO COVER THE REST',
                'is_seened' => 0,
                'qualifier_id' => 3231,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:25:02',
                'updated_at' => '2024-01-17 16:25:02',
            ),
            106 => 
            array (
                'id' => 107,
                'reason' => 'MY CHOSEN COURSE IS NOT ACCREDITED IN THE UNIVERSITY I ENROLLED IN.',
                'is_seened' => 0,
                'qualifier_id' => 3249,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:25:08',
                'updated_at' => '2024-01-17 16:25:08',
            ),
            107 => 
            array (
                'id' => 108,
                'reason' => 'I WILL BE PURSUING MY COLLEGE IN ATENEO DE MANILA UNIVERSITY. THE COURSE I HAVE IN ADMU IS AB PSYCHOLOGY, AND IT\'S NOT LISTED AS ONE OF THE PRIORITY COURSES FOR THE SAID SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 3275,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:25:16',
                'updated_at' => '2024-01-17 16:25:16',
            ),
            108 => 
            array (
                'id' => 109,
                'reason' => 'I AM NOT AVAILING THE SCHOLARSHIP DUE TO MY DESIRED COURSE AND SCHOOL WHICH BS MEDICAL LABORATORY SCIENCE AND PHINMA UPANG DOES NOT COMPLY WITH THE DOST STUDY PLACEMENT.',
                'is_seened' => 0,
                'qualifier_id' => 3296,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:25:23',
                'updated_at' => '2024-01-17 16:25:23',
            ),
            109 => 
            array (
                'id' => 110,
                'reason' => 'CANNOT COMPLY WITH THE CONDITIONS',
                'is_seened' => 0,
                'qualifier_id' => 3365,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:25:44',
                'updated_at' => '2024-01-17 16:25:44',
            ),
            110 => 
            array (
                'id' => 111,
            'reason' => 'I WILL PURSUE BACHELOR OF SCIENCE IN NURSING (BSN), WHICH IS NOT ONE OF YOUR PRIORITY PROGRAMS.',
                'is_seened' => 0,
                'qualifier_id' => 3521,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:26:34',
                'updated_at' => '2024-01-17 16:26:34',
            ),
            111 => 
            array (
                'id' => 112,
                'reason' => 'ADMISSION TO NON-PRIORITY PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 3547,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:26:43',
                'updated_at' => '2024-01-17 16:26:43',
            ),
            112 => 
            array (
                'id' => 113,
                'reason' => 'CHOSEN COURSE IS NOT PART OF THE PRIORTIY DEGREE PROGRAMS',
                'is_seened' => 0,
                'qualifier_id' => 3573,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:26:51',
                'updated_at' => '2024-01-17 16:26:51',
            ),
            113 => 
            array (
                'id' => 114,
                'reason' => 'COLLEGE COURSE NOT INCLUDED IN DOST-SEI PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 3611,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:27:03',
                'updated_at' => '2024-01-17 16:27:03',
            ),
            114 => 
            array (
                'id' => 115,
                'reason' => 'PREFERRED COURSE AT NATIONAL UNIVERSITY IS NOT UNDER DOST SCHOLARSHIP PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 3645,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:27:14',
                'updated_at' => '2024-01-17 16:27:14',
            ),
            115 => 
            array (
                'id' => 116,
                'reason' => 'NOT ENROLLED IN PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 3722,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:27:38',
                'updated_at' => '2024-01-17 16:27:38',
            ),
            116 => 
            array (
                'id' => 117,
                'reason' => 'MY CHOSEN COURSE IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 3738,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:27:43',
                'updated_at' => '2024-01-17 16:27:43',
            ),
            117 => 
            array (
                'id' => 118,
                'reason' => 'SHIFT OF COURSE TO ONE THAT IS NOT IN SUPPORTED LIST',
                'is_seened' => 0,
                'qualifier_id' => 3751,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:27:48',
                'updated_at' => '2024-01-17 16:27:48',
            ),
            118 => 
            array (
                'id' => 119,
                'reason' => 'I PLAN TO ENROLL IN A NON-PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 3756,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:27:49',
                'updated_at' => '2024-01-17 16:27:49',
            ),
            119 => 
            array (
                'id' => 120,
            'reason' => 'BS IET-GD2 INTERACTIVE ENTERTAINMENT MAJOR IN GAME DEVELOPMENT)',
            'is_seened' => 0,
            'qualifier_id' => 3822,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:28:10',
            'updated_at' => '2024-01-17 16:28:10',
        ),
        120 => 
        array (
            'id' => 121,
            'reason' => 'UNABLE TO SECURE ENROLLMENT IN AN APPROVED DEGREE COURSE OR UNIVERSITY',
            'is_seened' => 0,
            'qualifier_id' => 3844,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:28:16',
            'updated_at' => '2024-01-17 16:28:16',
        ),
        121 => 
        array (
            'id' => 122,
            'reason' => 'ENROLLED IN A DOST NON-PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 3847,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:28:17',
            'updated_at' => '2024-01-17 16:28:17',
        ),
        122 => 
        array (
            'id' => 123,
            'reason' => 'MY CHOSEN COURSE IS NOT UNDER THE PRIORITY PROGRAMS OFFERED.',
            'is_seened' => 0,
            'qualifier_id' => 3866,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:28:23',
            'updated_at' => '2024-01-17 16:28:23',
        ),
        123 => 
        array (
            'id' => 124,
            'reason' => 'NOT INCLUDED IN THE PRIORITY COURSES',
            'is_seened' => 0,
            'qualifier_id' => 3897,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:28:32',
            'updated_at' => '2024-01-17 16:28:32',
        ),
        124 => 
        array (
            'id' => 125,
            'reason' => 'CHOSEN COLLEGE COURSE IS NOT A PRIORITY COURSE OF DOST.',
            'is_seened' => 0,
            'qualifier_id' => 4024,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:12',
            'updated_at' => '2024-01-17 16:29:12',
        ),
        125 => 
        array (
            'id' => 126,
            'reason' => 'MY SCHOOL DOES NOT SATISFY STUDY PLACEMENT REQUIREMENTS',
            'is_seened' => 0,
            'qualifier_id' => 4031,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:14',
            'updated_at' => '2024-01-17 16:29:14',
        ),
        126 => 
        array (
            'id' => 127,
            'reason' => 'UNABLE TO MEET THE REQUIREMENTS OF THE DEFERMENT',
            'is_seened' => 0,
            'qualifier_id' => 4091,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:33',
            'updated_at' => '2024-01-17 16:29:33',
        ),
        127 => 
        array (
            'id' => 128,
            'reason' => 'COURSE IS NOT DOST-SEI ACCREDITED',
            'is_seened' => 0,
            'qualifier_id' => 4093,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:33',
            'updated_at' => '2024-01-17 16:29:33',
        ),
        128 => 
        array (
            'id' => 129,
            'reason' => 'NOT IN PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 4109,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:38',
            'updated_at' => '2024-01-17 16:29:38',
        ),
        129 => 
        array (
            'id' => 130,
            'reason' => 'SHIFTED TO BS NURSING, WHICH IS NOT IN THE PRIORITY COURSES OF DOST SEI',
            'is_seened' => 0,
            'qualifier_id' => 4165,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:55',
            'updated_at' => '2024-01-17 16:29:55',
        ),
        130 => 
        array (
            'id' => 131,
            'reason' => 'COURSE IS NOT ACCREDITED AND DOES NOT WANT TO TRANSFER ON ANOTHER SCHOOL',
            'is_seened' => 0,
            'qualifier_id' => 4173,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:58',
            'updated_at' => '2024-01-17 16:29:58',
        ),
        131 => 
        array (
            'id' => 132,
            'reason' => 'COURSE IS NOT QUALIFIED FOR DOST SCHOLARSHIP GRANT',
            'is_seened' => 0,
            'qualifier_id' => 4178,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:29:59',
            'updated_at' => '2024-01-17 16:29:59',
        ),
        132 => 
        array (
            'id' => 133,
            'reason' => 'I WILL BE AVAILING OTHER SCHOLARSHIP PROGRAM. ',
            'is_seened' => 0,
            'qualifier_id' => 4188,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:30:03',
            'updated_at' => '2024-01-17 16:30:03',
        ),
        133 => 
        array (
            'id' => 134,
            'reason' => 'THE SCHOOL THAT I WILL GO TO IS NOT ACCREDITED FOR THE SCHOLARSHIP ',
            'is_seened' => 0,
            'qualifier_id' => 4202,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:30:07',
            'updated_at' => '2024-01-17 16:30:07',
        ),
        134 => 
        array (
            'id' => 135,
            'reason' => 'I ALREADY HAVE A SCHOLARSHIP',
            'is_seened' => 0,
            'qualifier_id' => 4203,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:30:07',
            'updated_at' => '2024-01-17 16:30:07',
        ),
        135 => 
        array (
            'id' => 136,
        'reason' => 'THE S&T PROGRAM( BS CHE )I AM CURRENTLY ENROLLED IN IS NOT INCLUDED IN THE LIST OF DOST ACCREDITED PROGRAMS IN THE UNIVERSITY( CEBU INSTITUTE OF TECHNOLOGY- UNIVERSITY) I AM ENROLLED IN.',
            'is_seened' => 0,
            'qualifier_id' => 4228,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:30:15',
            'updated_at' => '2024-01-17 16:30:15',
        ),
        136 => 
        array (
            'id' => 137,
            'reason' => 'COURSE IS NOT SUPPORTED BY DOST',
            'is_seened' => 0,
            'qualifier_id' => 4299,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:30:38',
            'updated_at' => '2024-01-17 16:30:38',
        ),
        137 => 
        array (
            'id' => 138,
            'reason' => 'I QUALIFIED FOR A SCHOLARSHIP IN MY CHOSEN UNIVERSITY.',
            'is_seened' => 0,
            'qualifier_id' => 4336,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:30:50',
            'updated_at' => '2024-01-17 16:30:50',
        ),
        138 => 
        array (
            'id' => 139,
            'reason' => 'COURSE CHOICE',
            'is_seened' => 0,
            'qualifier_id' => 4358,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:30:56',
            'updated_at' => '2024-01-17 16:30:56',
        ),
        139 => 
        array (
            'id' => 140,
            'reason' => 'PREFERRED COURSE IN NOT ACCREDITED BY THE DOST-SEI SCHOLARSHIP.',
            'is_seened' => 0,
            'qualifier_id' => 4496,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:31:40',
            'updated_at' => '2024-01-17 16:31:40',
        ),
        140 => 
        array (
            'id' => 141,
        'reason' => 'The desired course (BS Petroleum Engineering) at the chosen university (Adamson University) is not recognized as CHED COE/COD nor has least Level III FAAP Accreditation for the S&T degree pro',
            'is_seened' => 0,
            'qualifier_id' => 4533,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:31:51',
            'updated_at' => '2024-01-17 16:31:51',
        ),
        141 => 
        array (
            'id' => 142,
            'reason' => 'ALREADY ENROLLED ON A NON-PRIORITY COURSE & IN A DOST NON-ACCREDITED  SCHOOL.',
            'is_seened' => 0,
            'qualifier_id' => 4571,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:03',
            'updated_at' => '2024-01-17 16:32:03',
        ),
        142 => 
        array (
            'id' => 143,
            'reason' => 'MY PREFERRED COURSE IS NOT PART OF THE PRIORITY COURSE LIST.',
            'is_seened' => 0,
            'qualifier_id' => 4580,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:06',
            'updated_at' => '2024-01-17 16:32:06',
        ),
        143 => 
        array (
            'id' => 144,
            'reason' => 'I AM ALREADY ENROLLED IN A NON-DOST APPROVED INSTITUTION.',
            'is_seened' => 0,
            'qualifier_id' => 4589,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:08',
            'updated_at' => '2024-01-17 16:32:08',
        ),
        144 => 
        array (
            'id' => 145,
            'reason' => 'MY CHOSEN COLLEGE COURSE IS NOT LISTED IN THE PRIORITY COURSES OF THE DOST SCHOLARSHIP.',
            'is_seened' => 0,
            'qualifier_id' => 4600,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:12',
            'updated_at' => '2024-01-17 16:32:12',
        ),
        145 => 
        array (
            'id' => 146,
            'reason' => 'I ENROLLED IN A NON S&T PRIORITY PROGRAMS',
            'is_seened' => 0,
            'qualifier_id' => 4645,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:26',
            'updated_at' => '2024-01-17 16:32:26',
        ),
        146 => 
        array (
            'id' => 147,
            'reason' => 'THE COURSE I HAVE CHOSEN IS NOT AMONG THE PRIORITY COURSES.',
            'is_seened' => 0,
            'qualifier_id' => 4652,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:28',
            'updated_at' => '2024-01-17 16:32:28',
        ),
        147 => 
        array (
            'id' => 148,
        'reason' => 'DECIDED TO PURSUE A PROGRAM (ECONOMICS AND ACCOUNTANCY) NOT PRIORITIZED BY DOST',
            'is_seened' => 0,
            'qualifier_id' => 4676,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:35',
            'updated_at' => '2024-01-17 16:32:35',
        ),
        148 => 
        array (
            'id' => 149,
            'reason' => 'The reason for deferring the scholarship is that I have chosen dentistry as my program, which is not on DOST’s priority program. However, I’m optimistic that in the future, or possibly next y',
            'is_seened' => 0,
            'qualifier_id' => 4681,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:37',
            'updated_at' => '2024-01-17 16:32:37',
        ),
        149 => 
        array (
            'id' => 150,
            'reason' => 'SCHOOL NOT INCLUDED IN LIST ',
            'is_seened' => 0,
            'qualifier_id' => 4682,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:32:37',
            'updated_at' => '2024-01-17 16:32:37',
        ),
        150 => 
        array (
            'id' => 151,
            'reason' => 'ENROLLED IN A NON-PRIORITY COURSE. OF DOST AND WAS NOT ABLE TO SHIFT TO ANOTHER PROGRAM ',
            'is_seened' => 0,
            'qualifier_id' => 4814,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:33:18',
            'updated_at' => '2024-01-17 16:33:18',
        ),
        151 => 
        array (
            'id' => 152,
            'reason' => 'SWU IS NOT INCLUDED IN THE CHED ACCREDITED SCHOOLS OF DOST',
            'is_seened' => 0,
            'qualifier_id' => 4823,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:33:21',
            'updated_at' => '2024-01-17 16:33:21',
        ),
        152 => 
        array (
            'id' => 153,
            'reason' => 'AVAILMENT OF A DIFFERENT GOVERNMENT SCHOLARSHIP AWARD',
            'is_seened' => 0,
            'qualifier_id' => 4840,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:33:26',
            'updated_at' => '2024-01-17 16:33:26',
        ),
        153 => 
        array (
            'id' => 154,
        'reason' => 'WILL PURSUE A NON-PRIORITY COURSE (BA COMMUNICATION)',
            'is_seened' => 0,
            'qualifier_id' => 4844,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:33:28',
            'updated_at' => '2024-01-17 16:33:28',
        ),
        154 => 
        array (
            'id' => 155,
            'reason' => 'MY COURSE IS NOT ON THE LISTED PRIORITY PROGRAMS TO AVAIL THE SCHOLARSHIP.',
            'is_seened' => 0,
            'qualifier_id' => 4886,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:33:41',
            'updated_at' => '2024-01-17 16:33:41',
        ),
        155 => 
        array (
            'id' => 156,
            'reason' => 'MY FAMILY DECIDED THAT I WOULD BE STUDYING IN ANOTHER COUNTRY.',
            'is_seened' => 0,
            'qualifier_id' => 4963,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:34:05',
            'updated_at' => '2024-01-17 16:34:05',
        ),
        156 => 
        array (
            'id' => 157,
            'reason' => 'COURSE NOT ALIGNED WITH DOST PRIORITY PROGRAMS/COURSES',
            'is_seened' => 0,
            'qualifier_id' => 5001,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:34:17',
            'updated_at' => '2024-01-17 16:34:17',
        ),
        157 => 
        array (
            'id' => 158,
            'reason' => 'THE PROGRAM I ENROLLED FOR IS NOT A PRIORITY PROGRAM OF THE SCHOLARSHIP AWARD',
            'is_seened' => 0,
            'qualifier_id' => 5106,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:34:49',
            'updated_at' => '2024-01-17 16:34:49',
        ),
        158 => 
        array (
            'id' => 159,
            'reason' => 'GRANTING OTHER SCHOLARSHIP ',
            'is_seened' => 0,
            'qualifier_id' => 5134,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:34:58',
            'updated_at' => '2024-01-17 16:34:58',
        ),
        159 => 
        array (
            'id' => 160,
            'reason' => 'INSTITUTION OF CHOICE IS NOT ACCREDITED',
            'is_seened' => 0,
            'qualifier_id' => 5161,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:35:06',
            'updated_at' => '2024-01-17 16:35:06',
        ),
        160 => 
        array (
            'id' => 161,
            'reason' => 'DO NOT HAVE A SCHOOL',
            'is_seened' => 0,
            'qualifier_id' => 5172,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:35:10',
            'updated_at' => '2024-01-17 16:35:10',
        ),
        161 => 
        array (
            'id' => 162,
            'reason' => 'NOT PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 5324,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:35:57',
            'updated_at' => '2024-01-17 16:35:57',
        ),
        162 => 
        array (
            'id' => 163,
            'reason' => 'THE CHOSEN HIGHER EDUCATION INSTITUTE IS NOT ACCREDITED BY THE UNDERGRADUATE DOST-SEI SCHOLARSHIP',
            'is_seened' => 0,
            'qualifier_id' => 5371,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:11',
            'updated_at' => '2024-01-17 16:36:11',
        ),
        163 => 
        array (
            'id' => 164,
            'reason' => 'MY COURSE IS NOT ONE OF THE PRIORITY COURSES, AND THEREFORE CANNOT USE IT.',
            'is_seened' => 0,
            'qualifier_id' => 5380,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:14',
            'updated_at' => '2024-01-17 16:36:14',
        ),
        164 => 
        array (
            'id' => 165,
        'reason' => 'COURSE (BS IN NURSING) IS NOT A PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 5382,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:15',
            'updated_at' => '2024-01-17 16:36:15',
        ),
        165 => 
        array (
            'id' => 166,
            'reason' => 'MY CURRENT PROGRAM, BS FAMILY LIFE AND CHILD DEVELOPMENT, IS NOT PART OF THE PRIORITY PROGRAMS OF THE SCHOLARSHIP.',
            'is_seened' => 0,
            'qualifier_id' => 5457,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:40',
            'updated_at' => '2024-01-17 16:36:40',
        ),
        166 => 
        array (
            'id' => 167,
            'reason' => 'My course, Bachelor of Landscape Architecture, is not included among the priority programs, despite my school, UP Diliman, being a state university.',
            'is_seened' => 0,
            'qualifier_id' => 5464,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:42',
            'updated_at' => '2024-01-17 16:36:42',
        ),
        167 => 
        array (
            'id' => 168,
            'reason' => 'MY CHOSEN COURSE/PROGRAM IS NOT ACCREDITED BY THE SCHOLARSHIP.',
            'is_seened' => 0,
            'qualifier_id' => 5470,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:44',
            'updated_at' => '2024-01-17 16:36:44',
        ),
        168 => 
        array (
            'id' => 169,
            'reason' => 'DOST DOES NOT ACCREDIT BS NURSING ',
            'is_seened' => 0,
            'qualifier_id' => 5501,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:55',
            'updated_at' => '2024-01-17 16:36:55',
        ),
        169 => 
        array (
            'id' => 170,
            'reason' => 'IMMIGRATION',
            'is_seened' => 0,
            'qualifier_id' => 5503,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:56',
            'updated_at' => '2024-01-17 16:36:56',
        ),
        170 => 
        array (
            'id' => 171,
            'reason' => 'I AM A CHED SCHOLAR ALREADY',
            'is_seened' => 0,
            'qualifier_id' => 5510,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:36:58',
            'updated_at' => '2024-01-17 16:36:58',
        ),
        171 => 
        array (
            'id' => 172,
            'reason' => 'The approved schools by DOST for my course were too far from my home town.',
            'is_seened' => 0,
            'qualifier_id' => 5521,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:37:01',
            'updated_at' => '2024-01-17 16:37:01',
        ),
        172 => 
        array (
            'id' => 173,
        'reason' => 'SCHOLARSHIP IS NOT ACCREDITED IN SPECIFIC COLLEGE (VELEZ COLLEGE)',
            'is_seened' => 0,
            'qualifier_id' => 5556,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:37:12',
            'updated_at' => '2024-01-17 16:37:12',
        ),
        173 => 
        array (
            'id' => 174,
            'reason' => 'MY CHOSEN COURSE, WHICH IS BS BASIC HUMAN STUDIES, IN THE UNIVERSITY OF SANTO TOMAS IS NOT INCLUDED ON THE LIST OF PRIORITY COURSES.',
            'is_seened' => 0,
            'qualifier_id' => 5618,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:37:31',
            'updated_at' => '2024-01-17 16:37:31',
        ),
        174 => 
        array (
            'id' => 175,
            'reason' => 'CURRENT AVAILABLE COURSE IS NOT A DOST PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 5659,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:37:44',
            'updated_at' => '2024-01-17 16:37:44',
        ),
        175 => 
        array (
            'id' => 176,
            'reason' => 'DECIDING TO CHOOSE TO ENROLL IN NURSING WHICH IS NOT A PRIORITY COURSE OF THE DOST SCHOLARSHIP',
            'is_seened' => 0,
            'qualifier_id' => 5662,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:37:45',
            'updated_at' => '2024-01-17 16:37:45',
        ),
        176 => 
        array (
            'id' => 177,
            'reason' => 'MY CHOSEN COURSE IS NOT INCLUDED IN THE LIST OF PRIORITY COURSES, AND   MY SCHOOL IS NOT RECOGNIZED  AS CHED COE/COD ',
            'is_seened' => 0,
            'qualifier_id' => 5668,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:37:47',
            'updated_at' => '2024-01-17 16:37:47',
        ),
        177 => 
        array (
            'id' => 178,
            'reason' => 'ENROLLED IN A NON-PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 5692,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:37:54',
            'updated_at' => '2024-01-17 16:37:54',
        ),
        178 => 
        array (
            'id' => 179,
            'reason' => 'MY COURSE IS NOT INCLUDED ON THE PRIORITY',
            'is_seened' => 0,
            'qualifier_id' => 5727,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:38:05',
            'updated_at' => '2024-01-17 16:38:05',
        ),
        179 => 
        array (
            'id' => 180,
            'reason' => 'MIGRATION ABROAD',
            'is_seened' => 0,
            'qualifier_id' => 5757,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:38:15',
            'updated_at' => '2024-01-17 16:38:15',
        ),
        180 => 
        array (
            'id' => 181,
            'reason' => 'I WISH NOT TO AVAIL THE SCHOLARSHIP AWARD FOR PERSONAL REASONS.',
            'is_seened' => 0,
            'qualifier_id' => 5804,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:38:29',
            'updated_at' => '2024-01-17 16:38:29',
        ),
        181 => 
        array (
            'id' => 182,
            'reason' => 'I WILL BE TAKING BACHELOR OF SCIENCE IN NURSING WHICH IS NOT IN THE PRIORITY COURSES OF DOST',
            'is_seened' => 0,
            'qualifier_id' => 5805,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:38:29',
            'updated_at' => '2024-01-17 16:38:29',
        ),
        182 => 
        array (
            'id' => 183,
            'reason' => 'THE COURSE I HAVE CHOSEN IS NOT A PART OF THE 2023-2024 PRIORITY COURSES TO ENROLL IN.',
            'is_seened' => 0,
            'qualifier_id' => 5817,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:38:33',
            'updated_at' => '2024-01-17 16:38:33',
        ),
        183 => 
        array (
            'id' => 184,
            'reason' => 'ACCEPTED AT PMMA',
            'is_seened' => 0,
            'qualifier_id' => 5896,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:38:57',
            'updated_at' => '2024-01-17 16:38:57',
        ),
        184 => 
        array (
            'id' => 185,
            'reason' => 'I HAVE ALR ENROLLED IN A PROGRAM THAT IS NOT COVERED BY THE SCHOLARSHIP',
            'is_seened' => 0,
            'qualifier_id' => 5901,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:38:59',
            'updated_at' => '2024-01-17 16:38:59',
        ),
        185 => 
        array (
            'id' => 186,
            'reason' => 'MEDICAL COURSES OFFERED BY OUR LOCAL INSTITUTIONS DO NOT HAVE FAAP LEVEL III ACCREDITATION. IF DEFERMENT IS POSSIBLE, I WILL APPLY TO UNIVERSITIES OUTSIDE OF OUR CITY IN THE FOLLOWING ACADEMI',
            'is_seened' => 0,
            'qualifier_id' => 5938,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:39:11',
            'updated_at' => '2024-01-17 16:39:11',
        ),
        186 => 
        array (
            'id' => 187,
            'reason' => 'ENROLLED COURSE IS NOT S&T PRIORITY PROGRAM.',
            'is_seened' => 0,
            'qualifier_id' => 5956,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:39:16',
            'updated_at' => '2024-01-17 16:39:16',
        ),
        187 => 
        array (
            'id' => 188,
            'reason' => 'THE SCHOOL I\'M PLANNING TO ATTEND IS NOT ACCREDITED BY DOST ',
            'is_seened' => 0,
            'qualifier_id' => 5971,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:39:21',
            'updated_at' => '2024-01-17 16:39:21',
        ),
        188 => 
        array (
            'id' => 189,
            'reason' => 'I ALREADY ENROLLED IN THE UNIVERSITY OF CEBU WHICH IS A NON-AFFILIATED INSTITUTION OF THIS SCHOLARSHIP AND THE OTHER SCHOOL THAT HAS A BACHELOR OF COMPUTER SCIENCE AND IS AFFILIATED WITH DOST',
            'is_seened' => 0,
            'qualifier_id' => 6012,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:39:34',
            'updated_at' => '2024-01-17 16:39:34',
        ),
        189 => 
        array (
            'id' => 190,
            'reason' => 'THE SCHOOL THAT I AM ENROLLED TO IS NOT CONSIDERED AS A CENTER OF EXCELLENCE ',
            'is_seened' => 0,
            'qualifier_id' => 6016,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:39:35',
            'updated_at' => '2024-01-17 16:39:35',
        ),
        190 => 
        array (
            'id' => 191,
            'reason' => 'CHOSEN COURSE IS NOT PART OF DOST\'S PRIORITY COURSES',
            'is_seened' => 0,
            'qualifier_id' => 6049,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:39:45',
            'updated_at' => '2024-01-17 16:39:45',
        ),
        191 => 
        array (
            'id' => 192,
            'reason' => 'MY COLLEGE PROGRAM IS NOT ACCREDITED.',
            'is_seened' => 0,
            'qualifier_id' => 6074,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:39:53',
            'updated_at' => '2024-01-17 16:39:53',
        ),
        192 => 
        array (
            'id' => 193,
            'reason' => 'MY PREFERRED COURSE IN MY SCHOOL IS VERY UNFORTUNATELY NOT CHED/COD CERTIFIED.',
            'is_seened' => 0,
            'qualifier_id' => 6095,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:00',
            'updated_at' => '2024-01-17 16:40:00',
        ),
        193 => 
        array (
            'id' => 194,
            'reason' => 'I AM ENROLLED IN SOUTHERN LUZON STATE UNIVERSITY, WITH BS RADTECH AS MY PROGRAM, WHICH IS NOT A PRIORITY PROGRAM OF DOST.',
            'is_seened' => 0,
            'qualifier_id' => 6114,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:06',
            'updated_at' => '2024-01-17 16:40:06',
        ),
        194 => 
        array (
            'id' => 195,
            'reason' => 'CHOSE A DIFFERENT SCHOLARSHIP',
            'is_seened' => 0,
            'qualifier_id' => 6162,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:20',
            'updated_at' => '2024-01-17 16:40:20',
        ),
        195 => 
        array (
            'id' => 196,
        'reason' => 'COURSE (BS BASIC HUMAN STUDIES) NOT LISTED IN PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 6165,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:21',
            'updated_at' => '2024-01-17 16:40:21',
        ),
        196 => 
        array (
            'id' => 197,
            'reason' => 'COURSE IS NOT ALIGNED WITH PRIORITY COURSE',
            'is_seened' => 0,
            'qualifier_id' => 6211,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:35',
            'updated_at' => '2024-01-17 16:40:35',
        ),
        197 => 
        array (
            'id' => 198,
            'reason' => 'PLANNING TO MIGRATE',
            'is_seened' => 0,
            'qualifier_id' => 6259,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:50',
            'updated_at' => '2024-01-17 16:40:50',
        ),
        198 => 
        array (
            'id' => 199,
        'reason' => 'I AM ENROLLED IN A NON-PRIORITY COURSE (BS IN NURSING).',
            'is_seened' => 0,
            'qualifier_id' => 6271,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:54',
            'updated_at' => '2024-01-17 16:40:54',
        ),
        199 => 
        array (
            'id' => 200,
            'reason' => 'ENROLLED IN A NON-PRIORITY COURSE OF DOST-SEI.',
            'is_seened' => 0,
            'qualifier_id' => 6281,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:40:57',
            'updated_at' => '2024-01-17 16:40:57',
        ),
        200 => 
        array (
            'id' => 201,
            'reason' => 'I WILL BE PURSUING BS IN ACCOUNTANCY. ',
            'is_seened' => 0,
            'qualifier_id' => 6326,
            'user_id' => 1,
            'created_at' => '2024-01-17 16:41:11',
            'updated_at' => '2024-01-17 16:41:11',
        ),
        201 => 
        array (
            'id' => 202,
            'reason' => 'MY COURSE IS NOT DOST-ACCREDITED :(',
                'is_seened' => 0,
                'qualifier_id' => 6377,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:41:27',
                'updated_at' => '2024-01-17 16:41:27',
            ),
            202 => 
            array (
                'id' => 203,
                'reason' => 'THE CHOSEN COURSE IS NOT INCLUDED IN THE PRIORITY COURSES.',
                'is_seened' => 0,
                'qualifier_id' => 6399,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:41:33',
                'updated_at' => '2024-01-17 16:41:33',
            ),
            203 => 
            array (
                'id' => 204,
                'reason' => 'CURRENTLY ENROLLED AS A STUDENT UNDER THE PROGRAM OF BS NURSING IN CEU-MALOLOS.',
                'is_seened' => 0,
                'qualifier_id' => 6420,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:41:40',
                'updated_at' => '2024-01-17 16:41:40',
            ),
            204 => 
            array (
                'id' => 205,
                'reason' => 'PURSUING ANOTHER COURSE NOT PRIORITIZED BY THE SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 6447,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:41:48',
                'updated_at' => '2024-01-17 16:41:48',
            ),
            205 => 
            array (
                'id' => 206,
                'reason' => 'THE COURSE THAT I WILL BE TAKING IS NOT INCLUDED IN THE PRIORITY PROGRAMS OF DOST SCGOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 6449,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:41:49',
                'updated_at' => '2024-01-17 16:41:49',
            ),
            206 => 
            array (
                'id' => 207,
                'reason' => 'STUDY PLACEMENT DOES NOT BELONG TO ACCREDITED SCHOOLS',
                'is_seened' => 0,
                'qualifier_id' => 6451,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:41:49',
                'updated_at' => '2024-01-17 16:41:49',
            ),
            207 => 
            array (
                'id' => 208,
                'reason' => 'AFTER REVIEWING THE ONLINE ORIENTATION, I HAVE DECIDED NOT TO AVAIL THE SCHOLARSHIP BECAUSE THE CONDITIONS WERE DIFFERENT THAN WHAT WE HOPED FOR. HOWEVER, WE I AM TRULY GREATFUL OF THE OPPORT',
                'is_seened' => 0,
                'qualifier_id' => 6483,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:41:59',
                'updated_at' => '2024-01-17 16:41:59',
            ),
            208 => 
            array (
                'id' => 209,
                'reason' => 'I AM ENROLLED IN A NON-PRIORITY COURSE OF THE DOST-SEI SCHOLARSHIP PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 6558,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:42:22',
                'updated_at' => '2024-01-17 16:42:22',
            ),
            209 => 
            array (
                'id' => 210,
                'reason' => 'NON COE/COD COURSE ',
                'is_seened' => 0,
                'qualifier_id' => 6562,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:42:23',
                'updated_at' => '2024-01-17 16:42:23',
            ),
            210 => 
            array (
                'id' => 211,
                'reason' => 'PROGRAM OUTSIDE PRIORITY LIST, UNSUCCESSFUL APPLICATION TO PROSPECTIVE UNIVERSITIES,FUTURE PLANS TO STUDY ABROAD, AND MENTAL HEALTH CONSIDERATIONS',
                'is_seened' => 0,
                'qualifier_id' => 6639,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:42:47',
                'updated_at' => '2024-01-17 16:42:47',
            ),
            211 => 
            array (
                'id' => 212,
                'reason' => 'I WILL ENROL IN A NON-PRIORITY COURSE.',
                'is_seened' => 0,
                'qualifier_id' => 6645,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:42:49',
                'updated_at' => '2024-01-17 16:42:49',
            ),
            212 => 
            array (
                'id' => 213,
                'reason' => 'CHOSEN COURSE IS NOT A PRIORITY COURSE OF DOST AND IS NOT A COE OR COD.',
                'is_seened' => 0,
                'qualifier_id' => 6660,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:42:53',
                'updated_at' => '2024-01-17 16:42:53',
            ),
            213 => 
            array (
                'id' => 214,
                'reason' => 'UNFORTUNATELY, I ENROLLED IN BS NURSING WHICH IS NOT YET INCLUDED IN THE PRIORITY PROGRAMS.',
                'is_seened' => 0,
                'qualifier_id' => 6669,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:42:56',
                'updated_at' => '2024-01-17 16:42:56',
            ),
            214 => 
            array (
                'id' => 215,
                'reason' => 'MY FIRST CHOICE OF COURSE IS NOT COVERED BY DOST',
                'is_seened' => 0,
                'qualifier_id' => 6672,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:42:57',
                'updated_at' => '2024-01-17 16:42:57',
            ),
            215 => 
            array (
                'id' => 216,
                'reason' => 'DID NOT QUALIFY FOR BS HUMAN BIOLOGY AND WAS REDIRECTED TO AB BEHAVIORAL SCIENCES MAJOR IN ORGANIZATIONAL AND SOCIAL SYSTEMS DEVELOPMENT AT DLSU - MANILA',
                'is_seened' => 0,
                'qualifier_id' => 6767,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:43:27',
                'updated_at' => '2024-01-17 16:43:27',
            ),
            216 => 
            array (
                'id' => 217,
                'reason' => 'MY CHOSEN PROGRAM, WHICH IS BS NURSING, IS NOT INCLUDED IN THE PRIORITY PROGRAM LIST OF THE DOST SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 6782,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:43:32',
                'updated_at' => '2024-01-17 16:43:32',
            ),
            217 => 
            array (
                'id' => 218,
                'reason' => 'PROGRAM IS NOT A PRIORITY PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 6799,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:43:37',
                'updated_at' => '2024-01-17 16:43:37',
            ),
            218 => 
            array (
                'id' => 219,
                'reason' => 'THE ACCREDITED INSTITUTION AVAILABLE FOR MY DESIRED COURSE WAS TOO FAR FROM MY HOMETOME ANDI WAS ALREADY ENROLLED WITH A NON-ACCREDITED INSTITUTION',
                'is_seened' => 0,
                'qualifier_id' => 6854,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:43:54',
                'updated_at' => '2024-01-17 16:43:54',
            ),
            219 => 
            array (
                'id' => 220,
                'reason' => 'BS ELECTRONICS ENGINEERING AT SLU DID NOT MEET THE LEVEL OF ACCREDITATION FOR PRIVATE INSTITUTION.',
                'is_seened' => 0,
                'qualifier_id' => 6917,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:44:14',
                'updated_at' => '2024-01-17 16:44:14',
            ),
            220 => 
            array (
                'id' => 221,
                'reason' => 'I HAVE NOT CHOSEN A PRIORITY COURSE OF DOST AND THE SCHOOL IS NOT ACCREDITED BY DOST',
                'is_seened' => 0,
                'qualifier_id' => 6922,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:44:15',
                'updated_at' => '2024-01-17 16:44:15',
            ),
            221 => 
            array (
                'id' => 222,
                'reason' => 'MY DESIRED COURSE/PROGRAM IS NOT INCLUDED IN THE LIST OF PRIORITY PROGRAMS OF THE SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 6977,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:44:33',
                'updated_at' => '2024-01-17 16:44:33',
            ),
            222 => 
            array (
                'id' => 223,
            'reason' => 'ENROLLED IN SCHOOL (SWU PHINMA) THAT HAS NO FAAP ACCREDITATION',
                'is_seened' => 0,
                'qualifier_id' => 7009,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:44:44',
                'updated_at' => '2024-01-17 16:44:44',
            ),
            223 => 
            array (
                'id' => 224,
                'reason' => 'I AM PURSUING BS NURSING WHICH IS NOT AMONG THE PRIORITY PROGRAMS OF THE SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 7015,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:44:46',
                'updated_at' => '2024-01-17 16:44:46',
            ),
            224 => 
            array (
                'id' => 225,
                'reason' => 'THE SCHOOL WHERE I PASSED IS A STATE COLLEGE AND A DISTANT RELATIVE OFFERED TO SUPPORT ME WITH MY EXPENSES',
                'is_seened' => 0,
                'qualifier_id' => 7181,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:45:37',
                'updated_at' => '2024-01-17 16:45:37',
            ),
            225 => 
            array (
                'id' => 226,
                'reason' => 'COLLEGE COURSE IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 7234,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:45:53',
                'updated_at' => '2024-01-17 16:45:53',
            ),
            226 => 
            array (
                'id' => 227,
            'reason' => 'ENROLLED COURSE IS NOT INCLUDED IN DOST-SEI\'S PRIORITY COURSE (BS INTERIOR DESIGN)',
                'is_seened' => 0,
                'qualifier_id' => 7270,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:46:04',
                'updated_at' => '2024-01-17 16:46:04',
            ),
            227 => 
            array (
                'id' => 228,
                'reason' => 'MY CHOSEN SCHOOL IS NOT COVERED BY DOST',
                'is_seened' => 0,
                'qualifier_id' => 7345,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:46:27',
                'updated_at' => '2024-01-17 16:46:27',
            ),
            228 => 
            array (
                'id' => 229,
                'reason' => 'THE UST COLLEGE OF ARCHITECTURE DOES NOT ACCREDIT THE SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 7389,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:46:40',
                'updated_at' => '2024-01-17 16:46:40',
            ),
            229 => 
            array (
                'id' => 230,
                'reason' => 'CHOSEN COURSE IS NOT IN THE PRIORITY LIST',
                'is_seened' => 0,
                'qualifier_id' => 7427,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:46:52',
                'updated_at' => '2024-01-17 16:46:52',
            ),
            230 => 
            array (
                'id' => 231,
                'reason' => 'TOOK ANOTHER SCHOLARSHIP OPPORTUNITY',
                'is_seened' => 0,
                'qualifier_id' => 7564,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:47:34',
                'updated_at' => '2024-01-17 16:47:34',
            ),
            231 => 
            array (
                'id' => 232,
                'reason' => 'NOT ENROLLED ',
                'is_seened' => 0,
                'qualifier_id' => 7588,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:47:42',
                'updated_at' => '2024-01-17 16:47:42',
            ),
            232 => 
            array (
                'id' => 233,
                'reason' => 'VELEZ COLLEGE IS NOT AN ACCREDITED SCHOOL.',
                'is_seened' => 0,
                'qualifier_id' => 7702,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:48:17',
                'updated_at' => '2024-01-17 16:48:17',
            ),
            233 => 
            array (
                'id' => 234,
                'reason' => 'THE SCHOLARSHIP DOES NOT COVER THE PROGRAM THAT I HAVE CHOSEN',
                'is_seened' => 0,
                'qualifier_id' => 7733,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:48:26',
                'updated_at' => '2024-01-17 16:48:26',
            ),
            234 => 
            array (
                'id' => 235,
                'reason' => 'CHOSEN COURSE IS NOT ACCREDITED BY DOST',
                'is_seened' => 0,
                'qualifier_id' => 7742,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:48:29',
                'updated_at' => '2024-01-17 16:48:29',
            ),
            235 => 
            array (
                'id' => 236,
                'reason' => 'THE SCHOOL I AM ENROLLED IN IS NOT IN THE CHED CENTER OF  EXCELLENCE AND DO NOT HAVE FAAP LEVEL III',
                'is_seened' => 0,
                'qualifier_id' => 7770,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:48:37',
                'updated_at' => '2024-01-17 16:48:37',
            ),
            236 => 
            array (
                'id' => 237,
                'reason' => 'I AM ALREADY ENROLLED AND CURRENTLY STUDYING AT MARITIME ACADEMY OF ASIA AND THE PACIFIC.',
                'is_seened' => 0,
                'qualifier_id' => 7783,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:48:41',
                'updated_at' => '2024-01-17 16:48:41',
            ),
            237 => 
            array (
                'id' => 238,
                'reason' => 'COURSE IS NOT A PRIORITY PROGRAM: BS ACCOUNTANCY ',
                'is_seened' => 0,
                'qualifier_id' => 7806,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:48:48',
                'updated_at' => '2024-01-17 16:48:48',
            ),
            238 => 
            array (
                'id' => 239,
                'reason' => 'NOT APPLICABLE / QUALIFICATIONS NOT MET',
                'is_seened' => 0,
                'qualifier_id' => 7862,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:06',
                'updated_at' => '2024-01-17 16:49:06',
            ),
            239 => 
            array (
                'id' => 240,
                'reason' => 'I WILL BE PURSUING BS PHYSICAL THERAPY',
                'is_seened' => 0,
                'qualifier_id' => 7869,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:08',
                'updated_at' => '2024-01-17 16:49:08',
            ),
            240 => 
            array (
                'id' => 241,
                'reason' => 'PREFERRED COLLEGE PROGRAM IS NOT UNDER THE PRIORITY LIST OF THE SCHOLARSHIP. ',
                'is_seened' => 0,
                'qualifier_id' => 7872,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:09',
                'updated_at' => '2024-01-17 16:49:09',
            ),
            241 => 
            array (
                'id' => 242,
                'reason' => 'I AM NOT AVAILING THE DOST SCHOLARSHIP DUE TO THE BS ARCHITECTURE COURSE AT UST LACKING THE REQUIRED RECOGNITIONS, SUCH AS "CENTER OF EXCELLENCE" AND "CENTER OF DEVELOPMENT" STATUS, AS WELL A',
                'is_seened' => 0,
                'qualifier_id' => 7879,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:11',
                'updated_at' => '2024-01-17 16:49:11',
            ),
            242 => 
            array (
                'id' => 243,
                'reason' => 'COURSE ISN\'T ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 7941,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:30',
                'updated_at' => '2024-01-17 16:49:30',
            ),
            243 => 
            array (
                'id' => 244,
                'reason' => 'ENROLLED TO A NON-PRIORITY PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 8029,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:56',
                'updated_at' => '2024-01-17 16:49:56',
            ),
            244 => 
            array (
                'id' => 245,
                'reason' => 'COURSE IS NOT COVERED BY THE SCHOLARSHIP ',
                'is_seened' => 0,
                'qualifier_id' => 8031,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:57',
                'updated_at' => '2024-01-17 16:49:57',
            ),
            245 => 
            array (
                'id' => 246,
                'reason' => 'I WAS OFFERED A SCHOLARSHIP AT MY CHOSEN UNIVERSITY.',
                'is_seened' => 0,
                'qualifier_id' => 8036,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:49:58',
                'updated_at' => '2024-01-17 16:49:58',
            ),
            246 => 
            array (
                'id' => 247,
                'reason' => 'MAY NOT BE ABLE TO FULFILL CONTRACTUAL OBLIGATIONS AND DUTIES AFTER GRADUATION',
                'is_seened' => 0,
                'qualifier_id' => 8068,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:50:08',
                'updated_at' => '2024-01-17 16:50:08',
            ),
            247 => 
            array (
                'id' => 248,
                'reason' => 'THE COURSE I EMROLLED AT THE DEL LA SALLE UNIVERSITY - DASMARINAS, BS CIVIL ENGINEERING, IS NOT FAAP III ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 8110,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:50:21',
                'updated_at' => '2024-01-17 16:50:21',
            ),
            248 => 
            array (
                'id' => 249,
                'reason' => 'PROGRAM IS NOT A PRIORITY',
                'is_seened' => 0,
                'qualifier_id' => 8152,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:50:34',
                'updated_at' => '2024-01-17 16:50:34',
            ),
            249 => 
            array (
                'id' => 250,
                'reason' => 'RELIGIOUS; OBLIGATIONS AND COMPLIANCE REQUIREMENT',
                'is_seened' => 0,
                'qualifier_id' => 8159,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:50:36',
                'updated_at' => '2024-01-17 16:50:36',
            ),
            250 => 
            array (
                'id' => 251,
                'reason' => 'ENROLLED IN A NON-PRIORITY PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 8259,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:06',
                'updated_at' => '2024-01-17 16:51:06',
            ),
            251 => 
            array (
                'id' => 252,
                'reason' => 'NON PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 8304,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:20',
                'updated_at' => '2024-01-17 16:51:20',
            ),
            252 => 
            array (
                'id' => 253,
            'reason' => 'enrolled in a non dost accredited branch (nu fairview)',
                'is_seened' => 0,
                'qualifier_id' => 8327,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:27',
                'updated_at' => '2024-01-17 16:51:27',
            ),
            253 => 
            array (
                'id' => 254,
                'reason' => 'I AM ENROLLED IN A NON-PRIORITY COURSE.',
                'is_seened' => 0,
                'qualifier_id' => 8336,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:30',
                'updated_at' => '2024-01-17 16:51:30',
            ),
            254 => 
            array (
                'id' => 255,
                'reason' => 'THE COURSE THAT I AM ALREADY ENROLLED IN IS NOT A PRIORITY COURSE OF THE SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 8365,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:40',
                'updated_at' => '2024-01-17 16:51:40',
            ),
            255 => 
            array (
                'id' => 256,
                'reason' => 'THERE’S NO MARINE ENGINEERING IN THE LIST',
                'is_seened' => 0,
                'qualifier_id' => 8369,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:41',
                'updated_at' => '2024-01-17 16:51:41',
            ),
            256 => 
            array (
                'id' => 257,
                'reason' => 'I OPTED TO AVAIL THE SCHOLARSHIP GIVEN BY THE UNIVERSITY I AM ATTENDING TO.',
                'is_seened' => 0,
                'qualifier_id' => 8401,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:51',
                'updated_at' => '2024-01-17 16:51:51',
            ),
            257 => 
            array (
                'id' => 258,
                'reason' => 'BECAUSE THE COURSE I HAVE CHOSEN IS NOT A PRIORITY COURSE IN THE SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 8427,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:51:59',
                'updated_at' => '2024-01-17 16:51:59',
            ),
            258 => 
            array (
                'id' => 259,
                'reason' => 'NOT ENROLLED IN A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 8452,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:52:07',
                'updated_at' => '2024-01-17 16:52:07',
            ),
            259 => 
            array (
                'id' => 260,
                'reason' => 'CHOSEN UNDERGRADUATE COURSE IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 8508,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:52:24',
                'updated_at' => '2024-01-17 16:52:24',
            ),
            260 => 
            array (
                'id' => 261,
                'reason' => 'PERSONAL INTEREST AND PLAN',
                'is_seened' => 0,
                'qualifier_id' => 8525,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:52:30',
                'updated_at' => '2024-01-17 16:52:30',
            ),
            261 => 
            array (
                'id' => 262,
                'reason' => 'ALREADY AVAILED OWWA EDSP ',
                'is_seened' => 0,
                'qualifier_id' => 8581,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:52:48',
                'updated_at' => '2024-01-17 16:52:48',
            ),
            262 => 
            array (
                'id' => 263,
            'reason' => 'CHOSE A NON-PRIORITY COURSE OF DOST (BS NURSING)',
                'is_seened' => 0,
                'qualifier_id' => 8621,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:53:01',
                'updated_at' => '2024-01-17 16:53:01',
            ),
            263 => 
            array (
                'id' => 264,
                'reason' => 'RECEIVED ANOTHER OFFER',
                'is_seened' => 0,
                'qualifier_id' => 8645,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:53:08',
                'updated_at' => '2024-01-17 16:53:08',
            ),
            264 => 
            array (
                'id' => 265,
                'reason' => 'I WILL BE AVAILING THE CHED MERIT SCHOLARSHIP SINCE BS ACCOUNTANCY IS INCLUDED IN THEIR LIST OF PRIORITY PROGRAM.',
                'is_seened' => 0,
                'qualifier_id' => 8729,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:53:35',
                'updated_at' => '2024-01-17 16:53:35',
            ),
            265 => 
            array (
                'id' => 266,
                'reason' => 'PERSONAL REASONS',
                'is_seened' => 0,
                'qualifier_id' => 8737,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:53:38',
                'updated_at' => '2024-01-17 16:53:38',
            ),
            266 => 
            array (
                'id' => 267,
                'reason' => 'My course is BS Nursing and it was not in the priority course of the DOST Scholarship',
                'is_seened' => 0,
                'qualifier_id' => 8752,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:53:42',
                'updated_at' => '2024-01-17 16:53:42',
            ),
            267 => 
            array (
                'id' => 268,
                'reason' => 'ENROLLE IN A NON-PRIORITY DEGREE PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 8756,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:53:44',
                'updated_at' => '2024-01-17 16:53:44',
            ),
            268 => 
            array (
                'id' => 269,
                'reason' => 'CHOSEN COURSE IS NOT INCLUDED IN DOST SEI\'S PRIORITY PROGRAMS',
                'is_seened' => 0,
                'qualifier_id' => 8786,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:53:53',
                'updated_at' => '2024-01-17 16:53:53',
            ),
            269 => 
            array (
                'id' => 270,
                'reason' => 'MY PROGRAM, BSOT, IS NOT INCLUDED ON THE LIST OF PRIORITY PROGRAMS.',
                'is_seened' => 0,
                'qualifier_id' => 8873,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:54:21',
                'updated_at' => '2024-01-17 16:54:21',
            ),
            270 => 
            array (
                'id' => 271,
                'reason' => 'CHOSEN DEGREE IS NOT UNDER DOST SCHOLARSHIP AT UDD',
                'is_seened' => 0,
                'qualifier_id' => 8881,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:54:23',
                'updated_at' => '2024-01-17 16:54:23',
            ),
            271 => 
            array (
                'id' => 272,
                'reason' => 'ENROLLED IN BS PHYSICAL THERAPY IN PLM WHICH IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 8916,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:54:34',
                'updated_at' => '2024-01-17 16:54:34',
            ),
            272 => 
            array (
                'id' => 273,
                'reason' => 'ENROLLED IN NON-PRIORITY UNIVERSITY',
                'is_seened' => 0,
                'qualifier_id' => 8952,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:54:46',
                'updated_at' => '2024-01-17 16:54:46',
            ),
            273 => 
            array (
                'id' => 274,
                'reason' => 'STUDY ABROAD ',
                'is_seened' => 0,
                'qualifier_id' => 9002,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:55:03',
                'updated_at' => '2024-01-17 16:55:03',
            ),
            274 => 
            array (
                'id' => 275,
                'reason' => 'MY FAMILY AND I CAREFULLY CONSIDERED WHAT I SHOULD STUDY IN COLLEGE AND WE DECIDED THAT IT IS BETTER FOR ME TO STUDY ANOTHER COURSE THAT IS NOT INCLUDED IN DOST\'S PROGRAM AS IT IS MORE CONVEN',
                'is_seened' => 0,
                'qualifier_id' => 9065,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:55:23',
                'updated_at' => '2024-01-17 16:55:23',
            ),
            275 => 
            array (
                'id' => 276,
                'reason' => 'UNIVERSITY IS NOT ACCREDITED.',
                'is_seened' => 0,
                'qualifier_id' => 9135,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:55:45',
                'updated_at' => '2024-01-17 16:55:45',
            ),
            276 => 
            array (
                'id' => 277,
                'reason' => 'THE SCHOOL THAT I INTENDED TO ENROLL IN GAVE A COURSE THAT IS NOT ALIGNED WITH THE PRIORITY COURSED OF DOST-SEI SCHOLARSHIS',
                'is_seened' => 0,
                'qualifier_id' => 9145,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:55:48',
                'updated_at' => '2024-01-17 16:55:48',
            ),
            277 => 
            array (
                'id' => 278,
                'reason' => 'THE COURSE TAKEN IS NOT IN THE PRIORITY OF COURSES ',
                'is_seened' => 0,
                'qualifier_id' => 9194,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:56:03',
                'updated_at' => '2024-01-17 16:56:03',
            ),
            278 => 
            array (
                'id' => 279,
            'reason' => 'AVAILMENT OF OTHER GOVERNMENT SCHOLARSHIP (CHED)',
                'is_seened' => 0,
                'qualifier_id' => 9262,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:56:25',
                'updated_at' => '2024-01-17 16:56:25',
            ),
            279 => 
            array (
                'id' => 280,
            'reason' => 'NOT ACCREDITED UNIVERSITY (BSMLS-OLFU-AC)',
                'is_seened' => 0,
                'qualifier_id' => 9290,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:56:34',
                'updated_at' => '2024-01-17 16:56:34',
            ),
            280 => 
            array (
                'id' => 281,
                'reason' => 'NON-PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 9298,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:56:37',
                'updated_at' => '2024-01-17 16:56:37',
            ),
            281 => 
            array (
                'id' => 282,
                'reason' => 'WILL ACCEPT PRIVATE SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 9311,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:56:41',
                'updated_at' => '2024-01-17 16:56:41',
            ),
            282 => 
            array (
                'id' => 283,
                'reason' => 'INELIGIBLE FOR CURRENT COURSE',
                'is_seened' => 0,
                'qualifier_id' => 9366,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:56:58',
                'updated_at' => '2024-01-17 16:56:58',
            ),
            283 => 
            array (
                'id' => 284,
                'reason' => 'ANOTHER SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 9367,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:56:58',
                'updated_at' => '2024-01-17 16:56:58',
            ),
            284 => 
            array (
                'id' => 285,
                'reason' => 'SM SCHOLARSHIP GRANTEE',
                'is_seened' => 0,
                'qualifier_id' => 9391,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:57:06',
                'updated_at' => '2024-01-17 16:57:06',
            ),
            285 => 
            array (
                'id' => 286,
            'reason' => 'THE DEGREE PROGRAM THAT I ENROLLED IN (BS NURSING) IS NOT A PRIORITY PROGRAM OF THE DOST SCHOLARSHIP. ',
                'is_seened' => 0,
                'qualifier_id' => 9458,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:57:26',
                'updated_at' => '2024-01-17 16:57:26',
            ),
            286 => 
            array (
                'id' => 287,
                'reason' => 'SCHOOL IS NOT ACCREDITED AND NOT ON THE PRIORITY COURSE ',
                'is_seened' => 0,
                'qualifier_id' => 9463,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:57:28',
                'updated_at' => '2024-01-17 16:57:28',
            ),
            287 => 
            array (
                'id' => 288,
                'reason' => 'COURSE NOT UNDER THE PRIORITY COURSESS. I\'LL BEBE TAKING BS NURSING FOR COLLEGE ',
                'is_seened' => 0,
                'qualifier_id' => 9482,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:57:34',
                'updated_at' => '2024-01-17 16:57:34',
            ),
            288 => 
            array (
                'id' => 289,
                'reason' => 'THE PRIORITY COURSES FOR THE SCHOLARSHIP DOES NOT INCLUDE MY CHOSEN COURSE',
                'is_seened' => 0,
                'qualifier_id' => 9506,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:57:41',
                'updated_at' => '2024-01-17 16:57:41',
            ),
            289 => 
            array (
                'id' => 290,
            'reason' => 'MY ENROLLED COURSE IS NOT PART OF THE PRIORITY PROGRAMS (BS PHYSICAL THERAPY). I HUMBLY REQUEST FOR A RECONSIDERATION.',
                'is_seened' => 0,
                'qualifier_id' => 9526,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:57:47',
                'updated_at' => '2024-01-17 16:57:47',
            ),
            290 => 
            array (
                'id' => 291,
                'reason' => 'COURSE IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 9537,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:57:50',
                'updated_at' => '2024-01-17 16:57:50',
            ),
            291 => 
            array (
                'id' => 292,
                'reason' => 'ENROLLED IN A COURSE THAT IS NOT PART OF DOST\'S PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 9582,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:58:06',
                'updated_at' => '2024-01-17 16:58:06',
            ),
            292 => 
            array (
                'id' => 293,
                'reason' => 'MY COURSE, BS DATA SCIENCE, IS NOT A PRIORITY PROGRAM OF THE DOST-SEI.',
                'is_seened' => 0,
                'qualifier_id' => 9598,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:58:11',
                'updated_at' => '2024-01-17 16:58:11',
            ),
            293 => 
            array (
                'id' => 294,
                'reason' => 'I PASSED THE SCHOLARSHIP EXAM OF A SCHOOL WHICH OFFERS A FULL TUITION AND I WILL TAKE THE COURSE BS NURSING.',
                'is_seened' => 0,
                'qualifier_id' => 9643,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:58:27',
                'updated_at' => '2024-01-17 16:58:27',
            ),
            294 => 
            array (
                'id' => 295,
                'reason' => 'THE COURSE I HAVE CHOSEN IS NOT IN THE PRIORITY LIST FOR THE SCHOOL I HAVE CHOSEN',
                'is_seened' => 0,
                'qualifier_id' => 9672,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:58:37',
                'updated_at' => '2024-01-17 16:58:37',
            ),
            295 => 
            array (
                'id' => 296,
                'reason' => 'THE UNIVERSITY I ENROLLED IN ISNT ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 9677,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:58:38',
                'updated_at' => '2024-01-17 16:58:38',
            ),
            296 => 
            array (
                'id' => 297,
                'reason' => 'THE COLLEGE I WILL BE ENROLLING IN IS NOT ACCREDITED BY DOST AND HAS NOT REACHD THE MINIMUM STANDARD TO BE ELIGIBLE FOR THE DOST SCHOLASRHIP',
                'is_seened' => 0,
                'qualifier_id' => 9717,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:58:51',
                'updated_at' => '2024-01-17 16:58:51',
            ),
            297 => 
            array (
                'id' => 298,
                'reason' => 'I AM TAKING BS ACCOUNTANCY IN COLLEGE.',
                'is_seened' => 0,
                'qualifier_id' => 9725,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:58:54',
                'updated_at' => '2024-01-17 16:58:54',
            ),
            298 => 
            array (
                'id' => 299,
                'reason' => 'I CHOSE TO STUDY A BACHELOR OF ARTS COURSE.',
                'is_seened' => 0,
                'qualifier_id' => 9755,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:03',
                'updated_at' => '2024-01-17 16:59:03',
            ),
            299 => 
            array (
                'id' => 300,
                'reason' => 'SCHOOL IS NOT ACCREDITED ',
                'is_seened' => 0,
                'qualifier_id' => 9769,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:08',
                'updated_at' => '2024-01-17 16:59:08',
            ),
            300 => 
            array (
                'id' => 301,
                'reason' => 'CHOSE TO PURSUE A NON-PRIORITY S&T PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 9791,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:16',
                'updated_at' => '2024-01-17 16:59:16',
            ),
            301 => 
            array (
                'id' => 302,
                'reason' => 'ENROLLED TO A SCHOOL THAT IS NON-ACCREDITED BY DOST AND PURSUING A PROGRAM THAT ISN\'T UNDER THE SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 9818,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:24',
                'updated_at' => '2024-01-17 16:59:24',
            ),
            302 => 
            array (
                'id' => 303,
                'reason' => 'THE PRIORITY PROGRAM I ENROLLED IN IS NOT DOST-SEI APPROVED.',
                'is_seened' => 0,
                'qualifier_id' => 9851,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:35',
                'updated_at' => '2024-01-17 16:59:35',
            ),
            303 => 
            array (
                'id' => 304,
                'reason' => 'PURSUED A NON-DOST PRIORITY DEGREE COURSE',
                'is_seened' => 0,
                'qualifier_id' => 9853,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:35',
                'updated_at' => '2024-01-17 16:59:35',
            ),
            304 => 
            array (
                'id' => 305,
                'reason' => 'WE MAY NOT BE ABLE TO FULFILL THE CONTRACT REQUIREMENTS.',
                'is_seened' => 0,
                'qualifier_id' => 9884,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:45',
                'updated_at' => '2024-01-17 16:59:45',
            ),
            305 => 
            array (
                'id' => 306,
                'reason' => 'I ALREADY ENROLLED FOR THE PROGRAM OF BACHELOR OF SCIENCE IN NURSING IN OUR LOCAL UNIVERSITY, WHICH UNFORTUNATELY THE PROGRAM I\'VE CHOSEN WASN\'T IN THE PRIORITY LIST OF THE DOST-SEI SCHOLARSH',
                'is_seened' => 0,
                'qualifier_id' => 9901,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:50',
                'updated_at' => '2024-01-17 16:59:50',
            ),
            306 => 
            array (
                'id' => 307,
                'reason' => 'REGRETTABLY, I WON\'T BE ABLE TO AVAIL THE SCHOLARSHIP DUE TO THE UNIVERSITY I WILL BE ATTENDING NOT MEETING THE SCHOLARSHIP\'S CRITERIA FOR A STUDY PLACEMENT. ',
                'is_seened' => 0,
                'qualifier_id' => 9928,
                'user_id' => 1,
                'created_at' => '2024-01-17 16:59:58',
                'updated_at' => '2024-01-17 16:59:58',
            ),
            307 => 
            array (
                'id' => 308,
            'reason' => 'MY COURSE (AVIATION ELECTRONICS TECHNOLOGY) IS NOT PRIORITIZED BY DOST. MOREOVER, THE SCHOOL I APPLIED TO (PHILSCA) IS NOT ACCREDITED BY DOST AS WELL.',
                'is_seened' => 0,
                'qualifier_id' => 10000,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:00:20',
                'updated_at' => '2024-01-17 17:00:20',
            ),
            308 => 
            array (
                'id' => 309,
                'reason' => 'CURRENTLY ENROLLED IN A PROGRAM NOT ACCREDITED BY DOST',
                'is_seened' => 0,
                'qualifier_id' => 10093,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:00:49',
                'updated_at' => '2024-01-17 17:00:49',
            ),
            309 => 
            array (
                'id' => 310,
            'reason' => 'CHOSEN COURSE (BS PHYSICAL THERAPY) NOT INCLUDED',
                'is_seened' => 0,
                'qualifier_id' => 10101,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:00:52',
                'updated_at' => '2024-01-17 17:00:52',
            ),
            310 => 
            array (
                'id' => 311,
                'reason' => 'NO AVAILABLE SCHOOL',
                'is_seened' => 0,
                'qualifier_id' => 10128,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:00',
                'updated_at' => '2024-01-17 17:01:00',
            ),
            311 => 
            array (
                'id' => 312,
                'reason' => 'I AM ENROLLED IN A NON-PRIORITY COURSE.',
                'is_seened' => 0,
                'qualifier_id' => 10139,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:03',
                'updated_at' => '2024-01-17 17:01:03',
            ),
            312 => 
            array (
                'id' => 313,
                'reason' => 'MY DESIRED COURSE AND SCHOOL WAS NOT INCLUDED IN THE LIST OF ACCREDITED COURSES AND SCHOOLS OF DOST AND I DID NOT LIKE THE ACCREDITED COURSES AVAILABLE',
                'is_seened' => 0,
                'qualifier_id' => 10148,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:06',
                'updated_at' => '2024-01-17 17:01:06',
            ),
            313 => 
            array (
                'id' => 314,
                'reason' => 'COURSE',
                'is_seened' => 0,
                'qualifier_id' => 10151,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:07',
                'updated_at' => '2024-01-17 17:01:07',
            ),
            314 => 
            array (
                'id' => 315,
                'reason' => 'COURSE IS NOT A DOST-PRIORITY',
                'is_seened' => 0,
                'qualifier_id' => 10189,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:19',
                'updated_at' => '2024-01-17 17:01:19',
            ),
            315 => 
            array (
                'id' => 316,
                'reason' => 'THERE ARE NO ACCREDITED SCHOOLS NEAR MY AREA THAT OFFER MY DESIRED COURSE WHICH IS MEDICAL TECHNOLOGY',
                'is_seened' => 0,
                'qualifier_id' => 10202,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:23',
                'updated_at' => '2024-01-17 17:01:23',
            ),
            316 => 
            array (
                'id' => 317,
                'reason' => 'I PASSED THE CTU-CCMC BS IN NURSING',
                'is_seened' => 0,
                'qualifier_id' => 10204,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:24',
                'updated_at' => '2024-01-17 17:01:24',
            ),
            317 => 
            array (
                'id' => 318,
                'reason' => 'THE COURSE THAT I AM ENROLLED IN IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 10248,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:38',
                'updated_at' => '2024-01-17 17:01:38',
            ),
            318 => 
            array (
                'id' => 319,
                'reason' => 'MY COURSE PREFERENCE IS NOT IN THE PRIORITY LIST',
                'is_seened' => 0,
                'qualifier_id' => 10257,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:40',
                'updated_at' => '2024-01-17 17:01:40',
            ),
            319 => 
            array (
                'id' => 320,
                'reason' => 'I\'M CURRENTLY ENROLLED IN A NON-ACCREDITED SCHOOL AND I\'M NOT PLANNING TO TRANSFER.',
                'is_seened' => 0,
                'qualifier_id' => 10290,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:51',
                'updated_at' => '2024-01-17 17:01:51',
            ),
            320 => 
            array (
                'id' => 321,
                'reason' => 'N/A',
                'is_seened' => 0,
                'qualifier_id' => 10306,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:01:56',
                'updated_at' => '2024-01-17 17:01:56',
            ),
            321 => 
            array (
                'id' => 322,
                'reason' => 'MY ENROLLED SCHOOL IS NOT ACCREDITED',
                'is_seened' => 0,
                'qualifier_id' => 10336,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:05',
                'updated_at' => '2024-01-17 17:02:05',
            ),
            322 => 
            array (
                'id' => 323,
                'reason' => 'I WASN\'T ABLE TO ENROLL THIS YEAR BECAUSE MY FAMILY CAN\'T AFFORD IT.',
                'is_seened' => 0,
                'qualifier_id' => 10346,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:08',
                'updated_at' => '2024-01-17 17:02:08',
            ),
            323 => 
            array (
                'id' => 324,
                'reason' => 'Conflict with the affiliation with the school currently enrolled',
                'is_seened' => 0,
                'qualifier_id' => 10370,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:15',
                'updated_at' => '2024-01-17 17:02:15',
            ),
            324 => 
            array (
                'id' => 325,
                'reason' => 'PERSONAL HEALTH REASONS',
                'is_seened' => 0,
                'qualifier_id' => 10385,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:20',
                'updated_at' => '2024-01-17 17:02:20',
            ),
            325 => 
            array (
                'id' => 326,
                'reason' => 'I AM QUALIFIED FOR BA PSYCHOLOGY, A COURSE THAT IS NOT PART OF THE S&T PRIORITY COURSES FOR FRESHMEN',
                'is_seened' => 0,
                'qualifier_id' => 10386,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:20',
                'updated_at' => '2024-01-17 17:02:20',
            ),
            326 => 
            array (
                'id' => 327,
                'reason' => 'DENTISTRY IS NOT PART OF THE PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 10404,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:25',
                'updated_at' => '2024-01-17 17:02:25',
            ),
            327 => 
            array (
                'id' => 328,
                'reason' => 'COURSE IS NOT INCLUDED IN THE PRIORITY PROGRAMS',
                'is_seened' => 0,
                'qualifier_id' => 10449,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:39',
                'updated_at' => '2024-01-17 17:02:39',
            ),
            328 => 
            array (
                'id' => 329,
            'reason' => 'MY CHOSEN COURSE (BACHELOR OF SCIENCE IN ACCOUNTANCY) WAS NOT PRIORITY FOR THE SCHOLARSHIP. ',
                'is_seened' => 0,
                'qualifier_id' => 10458,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:42',
                'updated_at' => '2024-01-17 17:02:42',
            ),
            329 => 
            array (
                'id' => 330,
                'reason' => 'ENVIRONMENTAL PLANNING IS NOT ONE OF THE PRIORITY COURSES',
                'is_seened' => 0,
                'qualifier_id' => 10462,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:43',
                'updated_at' => '2024-01-17 17:02:43',
            ),
            330 => 
            array (
                'id' => 331,
                'reason' => 'COURSE IS NOT A PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 10495,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:02:53',
                'updated_at' => '2024-01-17 17:02:53',
            ),
            331 => 
            array (
                'id' => 332,
                'reason' => 'THE DEGREE PROGRAM THAT I AM CURRENTLY TAKING IS NOT INCLUDED ON THE PRIORITY S&T PROGRAMS COVERED BY THE SCHOLARSHIP.',
                'is_seened' => 0,
                'qualifier_id' => 10555,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:03:12',
                'updated_at' => '2024-01-17 17:03:12',
            ),
            332 => 
            array (
                'id' => 333,
                'reason' => 'MY CHOSEN COURSE IS NOT A PRIORITY PROGRAM OF THE SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 10619,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:03:32',
                'updated_at' => '2024-01-17 17:03:32',
            ),
            333 => 
            array (
                'id' => 334,
                'reason' => 'MY PROGRAM IS NOT A PRIORITY PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 10627,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:03:35',
                'updated_at' => '2024-01-17 17:03:35',
            ),
            334 => 
            array (
                'id' => 335,
                'reason' => 'MY PROGRAM IS NOT INCLUDED IN THE PRIORITY COURSES.',
                'is_seened' => 0,
                'qualifier_id' => 10660,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:03:45',
                'updated_at' => '2024-01-17 17:03:45',
            ),
            335 => 
            array (
                'id' => 336,
                'reason' => 'MY CHOSEN COURSE IS UNDER BACHELOR OF ARTS.',
                'is_seened' => 0,
                'qualifier_id' => 10676,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:03:50',
                'updated_at' => '2024-01-17 17:03:50',
            ),
            336 => 
            array (
                'id' => 337,
                'reason' => 'DESIRED COURSE IS NOT INCLUDED IN THE LIST OF PRIORITY PROGRAMS',
                'is_seened' => 0,
                'qualifier_id' => 10684,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:03:54',
                'updated_at' => '2024-01-17 17:03:54',
            ),
            337 => 
            array (
                'id' => 338,
                'reason' => 'I WILL AVAIL A PRIVATE SCHOLARSHIP PROGRAM THAT DOES NOT ALLOW THE ACCEPTANCE OF DOST PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 10703,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:00',
                'updated_at' => '2024-01-17 17:04:00',
            ),
            338 => 
            array (
                'id' => 339,
                'reason' => 'AVAILING OWWA-EDSP SCHOLARSHIP AND UST IS NOT A DOST ACCREDITED INSTITUTION',
                'is_seened' => 0,
                'qualifier_id' => 10712,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:02',
                'updated_at' => '2024-01-17 17:04:02',
            ),
            339 => 
            array (
                'id' => 340,
                'reason' => 'I AM ENROLLED IN A NON-PRIORITY DEGREE PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 10733,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:09',
                'updated_at' => '2024-01-17 17:04:09',
            ),
            340 => 
            array (
                'id' => 341,
                'reason' => 'I\'M A CHED SCHOLAR.',
                'is_seened' => 0,
                'qualifier_id' => 10739,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:11',
                'updated_at' => '2024-01-17 17:04:11',
            ),
            341 => 
            array (
                'id' => 342,
                'reason' => 'NON-DOST PRIORITY COURSE',
                'is_seened' => 0,
                'qualifier_id' => 10750,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:14',
                'updated_at' => '2024-01-17 17:04:14',
            ),
            342 => 
            array (
                'id' => 343,
                'reason' => 'I WAS NOT QUALIFIED IN A PRIORITY COURSE OF DOST. ',
                'is_seened' => 0,
                'qualifier_id' => 10762,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:18',
                'updated_at' => '2024-01-17 17:04:18',
            ),
            343 => 
            array (
                'id' => 344,
                'reason' => 'SCHOOL IS NOT QUALIFIED FOR DOST SCHOLARSHIP',
                'is_seened' => 0,
                'qualifier_id' => 10842,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:42',
                'updated_at' => '2024-01-17 17:04:42',
            ),
            344 => 
            array (
                'id' => 345,
                'reason' => 'DESIRED COURSE IS NOT A PART OF THE DOST PRIORITY PROGRAMS: BACHELOR OF SCIENCE IN NURSING',
                'is_seened' => 0,
                'qualifier_id' => 10843,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:42',
                'updated_at' => '2024-01-17 17:04:42',
            ),
            345 => 
            array (
                'id' => 346,
                'reason' => 'I WAS NOT ABLE TO PASS A DOST PRIORITY PROGRAM',
                'is_seened' => 0,
                'qualifier_id' => 10853,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:45',
                'updated_at' => '2024-01-17 17:04:45',
            ),
            346 => 
            array (
                'id' => 347,
                'reason' => 'THE COURSE THAT I WILL BE TAKING IN COLLEGE IS NOT INCLUDED IN THE LIST OF PRIORITY COURSES.',
                'is_seened' => 0,
                'qualifier_id' => 10856,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:04:46',
                'updated_at' => '2024-01-17 17:04:46',
            ),
            347 => 
            array (
                'id' => 348,
                'reason' => 'MY COURSE IS NOT LISTED IN DOST’S PRIORITY COURSES LIST',
                'is_seened' => 0,
                'qualifier_id' => 10953,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:05:16',
                'updated_at' => '2024-01-17 17:05:16',
            ),
            348 => 
            array (
                'id' => 349,
                'reason' => 'I AM GOING TO TAKE A MAJOR THAT IS NOT PART OF THE LIST OF S&T PRIORITY COURSES.',
                'is_seened' => 0,
                'qualifier_id' => 10991,
                'user_id' => 1,
                'created_at' => '2024-01-17 17:05:29',
                'updated_at' => '2024-01-17 17:05:29',
            ),
        ));
        
        
    }
}