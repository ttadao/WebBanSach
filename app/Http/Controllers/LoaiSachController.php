<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoaiSachController extends Controller
{

    public static function getLoaiSach(){
        $loaisach = DB::table('tbl_loaisach')
            ->select('*')->get();
        return view('loaisach.danhsach',['loaisach'=>$loaisach]);
    }
    public function getThem()
    {
        return view('loaisach.them');
    }
    public function postThem(Request $request)
    {
        // Kiểm tra
        $this->validate($request, [
            'TenLoai' => 'required|string|max:255',
        ]);

        DB::table('tbl_loaisach')->insert([
            'TenLoai' => $request->TenLoai
        ]);

        return redirect('loaisach');
    }

    public function getSua($id)
    {
        $loaisach = DB::table('tbl_loaisach')->where('MaLoai', '=', $id)->first();
        return view('loaisach.sua', ['loaisach' => $loaisach]);
    }
    public function postSua(Request $request)
    {
        //$this->validate($request, [
        //    'TenLoai' => 'required|string|max:100' . $request->id,
        //]);

        DB::table('tbl_loaisach')->where('MaLoai', $request->id)->update(['TenLoai' => $request->TenLoai]);

        return redirect('loaisach');
    }
    public function getXoa($id)
    {
        DB::table('tbl_loaisach')->where('MaLoai', '=', $id)->delete();
        return redirect('loaisach');
    }
}
