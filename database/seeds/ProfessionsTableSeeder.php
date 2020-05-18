<?php

use Illuminate\Database\Seeder;
use App\Profession;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professions = [
            '公務員','経営者・役員', '会社員', '自営業', '自由業',
            '専業主婦', 'パート・アルバイト', '学生', 'その他',
        ];
        foreach ($professions as $profession) Profession::create(['profession_name' => $profession]);
    }
}
