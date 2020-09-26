<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param =[
        'name' => 'パイザ亭',
        'address' => '東京都港区南青山三丁目',
        'category_id' => 1,
      ];
      DB::table('shops')->insert($param);
      
      $param =[
        'name' => 'ラーメンlaravel',
        'address' => '東京都港区東青山',
        'category_id' => 2,
      ];
      DB::table('shops')->insert($param);
      
      $param =[
        'name' => 'そばの霧島',
         'address' => '東京都足立区東千住',
         'category_id' => 3,
      ];
      DB::table('shops')->insert($param);
      
      
    }
}