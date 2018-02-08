<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goods extends Model
{
    use SoftDeletes;
    protected $table = 'goods';

    protected $dates = ['deleted_at'];

    public function seller() {
        return $this->belongsTo('\App\User','seller_id','id');
    }

    public function photos() {
        return $this->hasMany('\App\File','goods_id','id');
    }
}
