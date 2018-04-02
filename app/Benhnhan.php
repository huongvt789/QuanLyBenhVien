<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benhnhan extends Model
{
    //
    protected $table="Benhnhan";
 	public function nhanvien(){
 		return $this->belongTo('App\Nhanvien','id_nhanvien','id');
 	}
}
