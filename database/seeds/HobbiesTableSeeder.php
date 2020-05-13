<?php

use Illuminate\Database\Seeder;
use App\Hobby;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'hobby' => 'ゴルフ'
        ];
        Hobby::insert($param);
    }
}
