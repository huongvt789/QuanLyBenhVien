<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Benhnhan;
class BenhnhanController extends Controller
{
    //
     public function getDanhsach(){
    	$benhnhan= Benhnhan::all();
    	return view('admin.QuanLyBenhNhan.danhsach',['benhnhan'=>$benhnhan]);
    }
     public function getThem(){
    	return view('admin.QuanLyBenhNhan.them');
    }
    public function getXoa($id){
		$benhnhan=Benhnhan::find($id);
        $benhnhan->delete();
        return redirect('admin/QuanLyBenhNhan/danhsach')->with("thongbao",'Xóa thành công');
    
    }
    public function postThem(Request $request){
       
        $benhnhan = new Benhnhan;
        $benhnhan->ten=$request->ten;
        $benhnhan->tuoi=$request->tuoi;
        $benhnhan->diachi=$request->diachi;
        $benhnhan->sodienthoai=$request->sodienthoai;
  
        $benhnhan->status=$request->hoatdong;
        $benhnhan->save();
        return redirect('admin/QuanLyBenhNhan/danhsach')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $benhnhan=Benhnhan::find($id);
        return view ('admin.QuanLyBenhNhan.sua',['benhnhan'=>$benhnhan]);
    }
     public function postSua(Request $request,$id){
        $benhnhan =Benhnhan::find($id);
        $benhnhan->ten=$request->ten;
        $benhnhan->tuoi=$request->tuoi;
        $benhnhan->diachi=$request->diachi;
        $benhnhan->sodienthoai=$request->sodienthoai;
        $benhnhan->status=$request->hoatdong;
        $benhnhan->save();
        return redirect('admin/QuanLyBenhNhan/danhsach')->with('thongbao','Thêm thành công');
    }

}
