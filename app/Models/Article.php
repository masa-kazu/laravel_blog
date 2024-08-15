<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // テーブル名
    protected $table = 'articles';

    // 各項目(データベースに登録する際に使用)
    protected $fillable = [
        'title',
        'content',
    ];
}
