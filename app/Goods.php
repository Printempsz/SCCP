<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    public function seller() {
        return $this->belongsTo('\App\User','seller_id','id');
    }
}
