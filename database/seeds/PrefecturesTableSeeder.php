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
            'prefecture_name' => '北海道',
            'prefecture_name_kana' => 'ホッカイドウ'
        ];

        $param = [
            'prefecture_name' => '青森県',
            'prefecture_name_kana' => 'アオモリケン'
        ];

        $param = [
            'prefecture_name' => '岩手県',
            'prefecture_name_kana' => 'イワテケン'
        ];
        Prefecture::insert($param);
    }
}
