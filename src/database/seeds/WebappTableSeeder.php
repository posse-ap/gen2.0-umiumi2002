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
            ],
            [
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-15',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-16',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-20',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-27',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-30',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-18',
                'study_time' => 2,
            ],
            [
                'study_date' => '2022-11-16',
                'study_time' => 2,
            ]
        ];

        DB::table('webapps')->insert($params);

        $params = [
            [
                'webapp_id' => 1,
                'study_time' => 2,
                'language_name' => 'PHP',
            ],
            [
                'webapp_id' => 1,
                'study_time' => 2,
                'language_name' => 'JavaScript',
            ],
            [
                'webapp_id' => 2,
                'study_time' => 1,
                'language_name' => 'PHP',
            ],
            [
                'webapp_id' => 2,
                'study_time' => 1,
                'language_name' => 'HTML',
            ],
            [
                'webapp_id' => 4,
                'study_time' => 2,
                'language_name' => 'SQL',
            ],
            [
                'webapp_id' => 7,
                'study_time' => 2,
                'language_name' => 'SHELL',
            ],
            [
                'webapp_id' => 8,
                'study_time' => 2,
                'language_name' => 'HTML',
            ],
            [
                'webapp_id' => 10,
                'study_time' => 2,
                'language_name' => 'PHP',
            ],
            [
                'webapp_id' => 11,
                'study_time' => 1,
                'language_name' => 'PHP',
            ],
            [
                'webapp_id' => 11,
                'study_time' => 1,
                'language_name' => 'Laravel',
            ],
        ];

        DB::table('languages')->insert($params);

        $params = [
            [
                'webapp_id' => 1,
                'study_time' => 2,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 1,
                'study_time' => 2,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 2,
                'study_time' => 1,
                'content_name' => 'ドットインストール',
            ],
            [
                'webapp_id' => 2,
                'study_time' => 1,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 4,
                'study_time' => 2,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 7,
                'study_time' => 2,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 8,
                'study_time' => 2,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 10,
                'study_time' => 2,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 11,
                'study_time' => 1,
                'content_name' => 'N予備校',
            ],
            [
                'webapp_id' => 11,
                'study_time' => 1,
                'content_name' => 'POSSE課題',
            ],
        ];

        DB::table('contents')->insert($params);
    }
}
