<?php

use Illuminate\Database\Seeder;
use App\Prefecture;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 2,
            'prefecture_name' => '東京都',
        ];
        Prefecture::insert($param);
    }
}
