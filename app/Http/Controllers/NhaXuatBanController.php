<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NhaXuatBanController extends Controller
{
    public function getNhaXuatBan(){
        $nxb = DB :: table('tbl_nhaxuatban')
            ->select('*')->get();
        return view('nhaxuatban.danhsach',['nxb'=> $nxb]);
    }
    public function getThem()
    {
        return view('nhaxuatban.them');
    }
    public function postThem(Request $request)
    {
        // Kiểm tra
        $this->validate($request, [
            'TenNXB' => 'required|string|max:255',
        ]);

        DB::table('tbl_nhaxuatban')->insert([
            'TenNXB' => $request->TenNXB
        ]);

        return redirect('nhaxuatban');
    }

    public function getSua($id)
    {
        $nxb = DB::table('tbl_nhaxuatban')->where('MaNXB', '=', $id)->first();
        return view('nhaxuatban.sua', ['nxb' => $nxb]);
    }
    public function postSua(Request $request)
    {
        $this->validate($request, [
            'TenNXB' => 'required|string|max:100' . $request->id,
        ]);

        DB::table('tbl_nhaxuatban')->where('MaNXB', $request->id)->update(['TenNXB' => $request->TenNXB]);

        return redirect('nhaxuatban');
    }
    public function getXoa($id)
    {
        DB::table('tbl_nhaxuatban')->where('MaNXB', '=', $id)->delete();
        return redirect('nhaxuatban');
    }
}
