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
                'user_id' => 1,
                'study_date' => '2022-10-07',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'user_id' => 2,
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-09',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-15',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-16',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-20',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-27',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-30',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-18',
                'study_time' => 2,
            ],
            [
                'user_id' => 1,
                'study_date' => '2022-11-16',
                'study_time' => 2,
            ]
        ];

        DB::table('webapps')->insert($params);

        $params = [
            [
                'language_name' => 'PHP',
            ],
            [
                'language_name' => 'JavaScript',
            ],
            [
                'language_name' => 'HTML',
            ],
            [
                'language_name' => 'SQL',
            ],
            [
                'language_name' => 'SHELL',
            ],
            [
                'language_name' => 'Laravel',
            ],
        ];

        DB::table('languages')->insert($params);

        $params = [
            [
                'content_name' => 'N予備校',
            ],
            [
                'content_name' => 'ドットインストール',
            ],
            [
                'content_name' => 'POSSE課題',
            ],
        ];

        DB::table('contents')->insert($params);

        $params = [
            [
                'webapp_id' => 1,
                'language_id' => 2,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 1,
                'language_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 2,
                'language_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 2,
                'language_id' => 5,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 4,
                'language_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 4,
                'language_id' => 2,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 3,
                'language_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 3,
                'language_id' => 1,
                'divided_time' => 1,
            ],  
        ];
        DB::table('language_webapp')->insert($params);

        $params = [
            [
                'webapp_id' => 1,
                'content_id' => 2,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 1,
                'content_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 2,
                'content_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 2,
                'content_id' => 5,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 4,
                'content_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 4,
                'content_id' => 2,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 3,
                'content_id' => 3,
                'divided_time' => 1,
            ],
            [
                'webapp_id' => 3,
                'content_id' => 1,
                'divided_time' => 1,
            ],  
        ];
        DB::table('content_webapp')->insert($params);
        $params = [
            [
                "name"         => '管理者',
                "email"        => 'admin@gmail.com',
                "password"     => Hash::make('password'),
                "role"      => 'admin',
            ],
            [
                "name"         => 'miu',
                "email"        => 'miu@gmail.com',
                "password"     => Hash::make('miu'),
                "role"      => 'member',
            ],
            [
                "name"         => 'furuyamiu',
                "email"        => 'furuyamiu@gmail.com',
                "password"     => Hash::make('furuyamiu'),
                "role"      => 'member',
            ],
        ];
        DB::table('users')->insert($params);
    }
}
