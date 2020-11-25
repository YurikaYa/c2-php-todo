<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    const STATUS_NOT_YET = 0;
    const STATUS = [
        '未対応',
        '作業中',
        '完了',
        '確認中'

    ];
     

    protected $fillable = ['title', 'due_date', 'status'];

    @return string

    public function getStatusText(): string
    {
        if (empyty(self::STATUS[$this->status])){
            return "";
        }

        return self::STATUS[$this->status];
    }
}
