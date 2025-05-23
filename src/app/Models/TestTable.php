<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTable extends Model
{
    use HasFactory;

    /**
     * テーブル名の指定
     *
     * @var string
     */
    protected $table = 'test_table';

    /**
     * 主キーのカラム名
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * タイムスタンプを使用しない
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Mass Assignmentで許可する属性
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * 属性のキャスト
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];
}
