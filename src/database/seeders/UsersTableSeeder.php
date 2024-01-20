<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'テスト太郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト次郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト三郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト四郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト五郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト六郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト七郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト八郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト九郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト十郎',
            'email' => 'text@example.com',
            'password' => '12345678'
        ];
        DB::table('users')->insert($param);
    }
}
