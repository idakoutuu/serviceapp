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
            'password' => 'shin19940205',
            'gender' => 'man',
            'birth' => 19940205,
            'picture' => 'logo.png',
            'address_id' => 11,
            'hobby_id' => 1,
            'profession_id' => 3
        ];
        user::insert($param);
    }
}