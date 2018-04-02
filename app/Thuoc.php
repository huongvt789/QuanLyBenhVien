<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thuoc extends Model
{
    //
    protected $table="thuoc";
 	public function nhanvien(){
 		return $this->belongTo('App\Nhanvien','id_nhanvien','id');
 	}
}
