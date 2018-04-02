<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function(){

	Route::group(['prefix'=>'QuanLyBenhNhan'],function(){

		Route::get('danhsach','BenhnhanController@getDanhsach');

		Route::get('sua/{id}','BenhnhanController@getSua');
		Route::post('sua/{id}','BenhnhanController@postSua');

		Route::get('them','BenhnhanController@getThem');
		Route::post('them','BenhnhanController@postThem');

		Route::get('xoa/{id}','BenhnhanController@getXoa');	
	});
	Route::group(['prefix'=>'QuanLyNhanVien'],function(){
		Route::get('danhsach','NhanvienController@getDanhsach');

		Route::get('sua/{id}','NhanvienController@getSua');
		Route::post('sua/{id}','NhanvienController@getSua');

		Route::get('them','NhanvienController@getThem');
		Route::post('them','NhanvienController@postThem');

		Route::get('xoa/{id}','NhanvienController@getXoa');

	});
	Route::group(['prefix'=>'QuanLyThuoc'],function(){
		Route::get('danhsach','ThuocController@getDanhsach');

		Route::get('sua/{id}','ThuocController@getSua');
		Route::post('sua/{id}','ThuocController@getSua');

		Route::get('them','ThuocController@getThem');
		Route::post('them','ThuocController@postThem');

		Route::get('xoa/{id}','ThuocController@getXoa');

	});
});
Auth::routes();
