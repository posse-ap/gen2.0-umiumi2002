<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
            "name"         => '管理者',
            "email"        => 'admin@gmail.com',
            "password"     => Hash::make('password'),
            "role"      => 1,
        ],
        [
            "name"         => 'miu',
            "email"        => 'miu@gmail.com',
            "password"     => Hash::make('miu'),
            "role"      =>11,
        ],
        [
            "name"         => 'furuyamiu',
            "email"        => 'furuyamiu@gmail.com',
            "password"     => Hash::make('furuyamiu'),
            "role"      => 11,
        ],
    ];
    DB::table('users')->insert($params);
    }
}
