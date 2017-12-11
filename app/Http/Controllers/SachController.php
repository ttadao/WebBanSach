<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SachController extends Controller
{
   /* public function index()
    {
        $loaisach = LoaiSach::all();
        $nxb = nhaxuatban::all();
        return view("sach.them",compact('loaisach','nxb'));
    }
*/
    public function getSach(){
        $sach = DB::table('tbl_sach as s')
            ->join('tbl_loaisach as l', 's.MaLoai', '=', 'l.MaLoai')
            ->join('tbl_nhaxuatban as n', 's.NXB', '=', 'n.MaNXB' )
            ->select('s.*','l.TenLoai','n.TenNXB')->get();
        return view('sach.danhsach',['sach' => $sach]);
    }

    public function Index(){
        $sachIndex = DB::table('tbl_sach')->orderBy('MaSach', 'desc')->take(8)->get();
        return view('home',['sachIndex'=>$sachIndex]);
    }

    public function getThem()
    {
        session_start();

        $hinhanh_identity = DB::select("SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'bansach' AND TABLE_NAME = 'tbl_sach';");
        $next_id = $hinhanh_identity[0]->AUTO_INCREMENT;
        Storage::makeDirectory("image/book/" . str_pad($next_id, 6, "0", STR_PAD_LEFT));

        $path = "http://127.0.0.1/bansach/public/image/book/" . str_pad($next_id, 6, "0", STR_PAD_LEFT) . "/";
        $_SESSION['baseUrl'] = $path;

        $anhbia = "image/book/" . str_pad($next_id, 6, "0", STR_PAD_LEFT);

        $loaisach = DB::table('tbl_loaisach')->get();
        $nxb  = DB::table('tbl_nhaxuatban')->get();
        return view('sach.them', [
            'loaisach' => $loaisach,
            'nxb' =>$nxb,
            'anhbia' => $anhbia
        ]);
    }

    public function postThem(Request $request)
    {
        // Kiểm tra
        $this->validate($request, [
            'TenSach' => 'required|max:255',
            'MaLoai' => 'required',
            'TomTat' => 'required',
            'NXB' => 'required',
            'SoLuong' => 'required|numeric',
            'DonGia' => 'required|numeric',
            'AnhBia' => 'required|max:255',
        ]);

        DB::table('tbl_sach')->insert([
            'TenSach' => $request->TenSach,
            'MaLoai' => $request->MaLoai,
            'TomTat' => $request->TomTat,
            'NXB' => $request->NXB,
            'SoLuong' => $request->SoLuong,
            'DonGia' => $request->DonGia,
            'AnhBia' => $request->AnhBia
        ]);

        return redirect('sach')->with("success", "Thêm sách thành công!");
    }

    public function getChiTiet($id)
    {
        $sach = DB::table('tbl_sach as s')
            ->join('tbl_loaisach as l', 's.MaLoai', '=', 'l.MaLoai')
            ->join('tbl_nhaxuatban as n', 's.NXB', '=', 'n.MaNXB' )
            ->where('s.MaSach','=',$id)
            ->select('s.*','l.TenLoai','n.TenNXB')->first();
        return view('sach.chitiet', ['sach' => $sach]);
    }

    public function getSua($id)
    {
        $sach = DB::table('tbl_sach')->where('MaSach', '=', $id)->first();
        return view('sach.sua', ['sach' => $sach]);
    }

    public function postSua(Request $request)
    {
        $this->validate($request, [
            'TenSach' => 'required|max:255',
        ]);

        DB::table('tbl_sach')->where('MaSach', $request->id)->update([
            'TenSach' => $request->TenSach,
        ]);

        return redirect('sach');
    }

    public function getXoa($id)
    {
        DB::table('tbl_sach')->where('MaSach', '=', $id)->delete();
        return redirect('sach');
    }
}
