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
        $param = [
            'name' => 'shin',
            'email' => 'idakoutuu0205@gmail.com',
            'password' => Hash::make('shin19940205'),
            'gender' => 'male',
            'birth' => 19940205,
            'photo' => 'logo.png',
            'prefecture_id' => 11,
            'hobby_id' => 1,
            'profession_id' => 3
        ];
        user::insert($param);
    }
}
