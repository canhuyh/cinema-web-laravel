<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThoiGianChieu extends Model
{
    //
    protected $table = 'thoi_gian_chieus';
    public $timestamps=true;
     // 1 thời gian chiếu có nhiều lịch chiếu

     public function LichChieu()
     {
         return $this->hasMany('App\LichChieu', 'MaThoiGianChieu', 'MaThoiGianChieu');
     }
}