<?php

use Illuminate\Database\Seeder;

class WebappTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [
                'study_date' => '2022-10-07',
                'study_time' => 2,
                'study_language' => 'PHP',
                'study_content' => 'ドットインストール',
            ],
            [
                'study_date' => '2022-11-09',
                'study_time' => 2,
                'study_language' => 'JavaScript',
                'study_content' => 'ドットインストール',
            ],
            [
                'study_date' => '2022-11-13',
                'study_time' => 2,
                'study_language' => 'JavaScript',
                'study_content' => 'N予備校',
            ]
        ];

        DB::table('webapps')->insert($params);
    }
}
