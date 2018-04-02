<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    //
    protected $table="nhanvien";
 	public function benhnhan(){
 		return $this->hasMany('App\Benhnhan','id_nhanvien','id');
 	}
 	public function thuoc(){
 		return $this->hasMany('App\Thuoc','id_nhanvien','id');
 	}

}
