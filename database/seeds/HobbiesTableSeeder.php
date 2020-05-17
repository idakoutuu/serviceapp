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
        $hobbies = [
            'ゴルフ', '読書', 'ペット','スポーツ鑑賞'
        ];
        foreach ($hobbies as $hobby) App\Hobby::create(['hobby' => $hobby]);
    }
}
