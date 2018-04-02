<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thuoc;
class ThuocController extends Controller
{
    public function getDanhsach(){
    	$benhnhan= Thuoc::all();
    	return view('admin.QuanLyThuoc.danhsach',['benhnhan'=>$benhnhan]);
    }
     public function getThem(){
    	return view('admin.QuanLyThuoc.them');
    }
    public function getXoa($id){
		$benhnhan=Thuoc::find($id);
        $benhnhan->delete();
        return redirect('admin/QuanLyThuoc/danhsach')->with("thongbao",'Xóa thành công');
    
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
        $benhnhan = new Thuoc;
        $benhnhan->ten=$request->ten;
        $benhnhan->soluong=$request->soluong;
     
        $benhnhan->status=$request->hoatdong;
        $benhnhan->save();
        return redirect('admin/QuanLyThuoc/danhsach')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $benhnhan=Thuoc::find($id);
        return view ('admin.QuanLyThuoc.sua',['benhnhan'=>$benhnhan]);
    }
     public function postSua(Request $request,$id){
        $benhnhan =Thuoc::find($id);
         $benhnhan = new Thuoc;
        $benhnhan->ten=$request->ten;
        $benhnhan->soluong=$request->soluong;
        $benhnhan->status=$request->hoatdong;
        $benhnhan->save();
        return redirect('admin/QuanLyThuoc/danhsach')->with('thongbao','Thêm thành công');
    }

}
