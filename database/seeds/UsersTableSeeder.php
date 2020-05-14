<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $param = [
            'name' => 'shin',
            'email' => 'idakoutuu0205@gmail.com',
            'password' => Hash::make('shin19940205'),
            'gender' => 'male',
            'birth' => 19940205,
            'photo' => 'logo.png',
            'prefecture' => '東京都',
            'profession' => '会社員'
        ];
        User::insert($param);
    }
}
