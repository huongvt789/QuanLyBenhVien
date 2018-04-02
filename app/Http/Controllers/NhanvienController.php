<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhanvien;
class NhanvienController extends Controller
{
    public function getDanhsach(){
    	$benhnhan= Nhanvien::all();
    	return view('admin.QuanLyNhanVien.danhsach',['benhnhan'=>$benhnhan]);
    }
     public function getThem(){
    	return view('admin.QuanLyNhanVien.them');
    }
    public function getXoa($id){
		$benhnhan=Nhanvien::find($id);
        $benhnhan->delete();
        return redirect('admin/QuanLyNhanVien/danhsach')->with("thongbao",'Xóa thành công');
    
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:100'
            ],
            [
            'name.required'=>'Bạn chưa nhập tên thể loại',
            'name.min'=>'Tên thể lọa có độ dài từ 3 cho đến 100 ký tự',
            'name.max'=>'Tên thể loại phải có độ dài từ cho đến 100 ký tự',
            ]);
        $benhnhan = new Nhanvien;
        $benhnhan->ten=$request->ten;
        $benhnhan->tuoi=$request->tuoi;
        $benhnhan->diachi=$request->diachi;
        $benhnhan->email=$request->email;
        $benhnhan->sodienthoai=$request->sodienthoai;
  
        $benhnhan->status=$request->hoatdong;
        $benhnhan->save();
        return redirect('admin/QuanLyNhanVien/danhsach')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $benhnhan=Nhanvien::find($id);
        return view ('admin.QuanLyNhanVien.sua',['benhnhan'=>$benhnhan]);
    }
     public function postSua(Request $request,$id){
        $benhnhan =Nhanvien::find($id);
         $benhnhan->ten=$request->ten;
        $benhnhan->tuoi=$request->tuoi;
        $benhnhan->diachi=$request->diachi;
        $benhnhan->sodienthoai=$request->sodienthoai;
		$benhnhan->email=$request->email;
        $benhnhan->status=$request->hoatdong;
        $benhnhan->save();
        return redirect('admin/QuanLyNhanVien/danhsach')->with('thongbao','Thêm thành công');
    }

}
