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
    return view('home');
});

Auth::routes();

Route::get('/home', 'SachController@Index');

Route::get('/sach', 'SachController@getSach');
Route::get('/sach/chitiet/{id}', 'SachController@getChiTiet');
Route::get('/sach/them', 'SachController@getThem');
Route::post('/sach/them', 'SachController@postThem');
Route::get('/sach/sua/{id}', 'SachController@getSua');
Route::post('/sach/sua', 'SachController@postSua');
Route::get('/sach/xoa/{id}', 'SachController@getXoa');

Route::get('/loaisach', 'LoaiSachController@getLoaiSach');
Route::get('/loaisach/them', 'LoaiSachController@getThem');
Route::post('/loaisach/them', 'LoaiSachController@postThem');
Route::get('/loaisach/sua/{id}', 'LoaiSachController@getSua');
Route::post('/loaisach/sua', 'LoaiSachController@postSua');
Route::get('/loaisach/xoa/{id}', 'LoaiSachController@getXoa');

Route::get('/nhaxuatban', 'NhaXuatBanController@getNhaXuatBan');
Route::get('/nhaxuatban/them', 'NhaXuatBanController@getThem');
Route::post('/nhaxuatban/them', 'NhaXuatBanController@postThem');
Route::get('/nhaxuatban/sua/{id}', 'NhaXuatBanController@getSua');
Route::post('/nhaxuatban/sua', 'NhaXuatBanController@postSua');
Route::get('/nhaxuatban/xoa/{id}', 'NhaXuatBanController@getXoa');

Route::get('/chude', 'ChuDeController@postDanhSach');
Route::get('/chude/them', 'ChuDeController@getThem');
Route::post('/chude/them', 'ChuDeController@postThem');
Route::get('/chude/sua/{id}', 'ChuDeController@getSua');
Route::post('/chude/sua', 'ChuDeController@postSua');
Route::get('/chude/xoa/{id}', 'ChuDeController@getXoa');

