<?php

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '山田太郎',
            'address' => '京都府京都市',
            'tel' => '0123-456-789'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '佐藤花子',
            'address' => '大阪府大阪市',
            'tel' => '7894-561-230'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '鈴木一郎',
            'address' => '奈良県奈良市',
            'tel' => '0147-258-369'
        ];
        DB::table('guests')->insert($param);
        
    }
}
