<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    //
    protected $table= 'ves';
    public $timestamps=false;

    // 1 vé thuộc 1 danh sách vé và 1 danh sách vé có nhiều vé
    public function DsVe()
    {
        return $this->belongsTo('App\DsVe', 'MaDsVe', 'MaDsVe');
    }

    // 1 vé thì chỉ được có 1 ghế
    public function Ghe()
    {
        return $this->belongsTo('App\Ghe', 'MaGhe', 'MaGhe');
    }
    // 1 vé có 1 lịch chiếu
    public function LichChieu()
    {
        return $this->belongsTo('App\LichChieu', 'MaLichChieu', 'MaLichChieu');
    }


}
