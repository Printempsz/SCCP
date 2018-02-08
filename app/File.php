<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $table = 'files';
    protected $dates = ['deleted_at'];

    public function goods() {
        return $this->belongsTo('\App\Goods','goods_id','id');
    }
}
