<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function category()
    {
        return $this ->belongsTo('App\Category');
        // belongsTo　shopモデルはcategoryモデルに所属するということを定義できる
        // 自動的に対応するカラムを検索してくれる
    }   
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

