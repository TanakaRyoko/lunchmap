<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param =[
        'id' => '1',
        'name' => 'イタリアン',
        ];
      DB::table('categories')->insert($param);
      
      $param =[
        'id' => '2',
        'name' => '中華',
      ];
      DB::table('categories')->insert($param);
      
      $param =[
        'id' => '3',
        'name' => '日本食',
      ];
      DB::table('categories')->insert($param);
      
      //   DB::table('shops')->insert([
      //   [
      //     'name' => 'パイザ亭',
      //     'adress' => '東京都港区南青山三丁目',
      //     'category_id' => 1,
      //   ],
      //   [
      //     'name' => 'ラーメンlaravel',
      //     'adress' => '東京都港区東青山',
      //     'category_id' => 2,
      //   ],
      //   [
      //     'name' => 'そばの霧島',
      //     'adress' => '東京都足立区東千住',
      //     'category_id' => 3,
      //   ],
      // ]);
    }
}