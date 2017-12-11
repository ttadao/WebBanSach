<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use Carbon\Carbon;

class BaiVietController extends Controller
{
    public function getDanhSach()
    {
		$baiviet = DB::table('baiviet as b')
				->join('chude as c', 'b.id_chu_de', '=', 'c.id')
				->join('nguoidung as u', 'b.id_user', '=', 'u.id')
				->select('b.*', 'c.ten_chu_de', 'u.name')->get();
        return view('baiviet.danhsach', ['baiviet' => $baiviet]);
    }
	
	public function getDanhSach_NguoiDung()
    {
		$baiviet = DB::table('baiviet as b')
				->join('chude as c', 'b.id_chu_de', '=', 'c.id')
				->where('b.id_user', '=', Auth::user()->id)
				->select('b.*', 'c.ten_chu_de')->get();
        return view('baiviet.nguoidung', ['baiviet' => $baiviet]);
    }
	
	public function getDuyet($id, $trangthai)
	{
		DB::table('baiviet')->where('id', $id)->update([
			'kiem_duyet' => $trangthai
		]);
		
		if($trangthai == 1)
		{
			$nd_bv = DB::table('nguoidung as u')
					->join('baiviet as b', 'u.id', '=', 'b.id_user')
					->where('b.id', '=', $id)
					->select('b.tieu_de', 'u.email', 'u.name')->first();
			
			// Gởi mail
			$data = [
				'name' => $nd_bv->name,
				'email' => $nd_bv->email,
				'tieu_de' => $nd_bv->tieu_de
			];
			
			Mail::send('emails.duyetbaiviet', $data, function($msg) use ($data){
				$msg->from('inews.agu@gmail.com', 'Ban quản trị iNews');
				$msg->subject('Bài viết đã duyệt');
				$msg->to($data['email'], $data['name']);
			});
		}
		
		return redirect('baiviet');
	}

    public function getThem()
    {
        $chude = DB::table('chude')->get();
		return view('baiviet.them', ['chude' => $chude]);
    }

    public function postThem(Request $request)
    {
        // Kiểm tra
		$this->validate($request, [
            'tieu_de' => 'required|max:225',
			'id_chu_de' => 'required',
			'tom_tat' => 'required',
			'noi_dung' => 'required',
        ]);
		
		if(Auth::user()->level == 1)
			$kiem_duyet = 1;
		else
			$kiem_duyet = 0;
		
		DB::table('baiviet')->insert([
			'id_chu_de' => $request->id_chu_de,
			'id_user' => Auth::user()->id,
			'tieu_de' => $request->tieu_de,
			'tom_tat' => $request->tom_tat,
			'noi_dung' => $request->noi_dung,
			'luot_xem' => 0,
			'kiem_duyet' => $kiem_duyet,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		return redirect('baiviet/them')->with("success", "Đăng bài viết thành công!");
    }

    public function getChiTiet($id, $tieude)
    {
        $baiviet = DB::table('baiviet as b')
				->join('chude as c', 'b.id_chu_de', '=', 'c.id')
				->join('nguoidung as u', 'b.id_user', '=', 'u.id')
				->where('b.id', '=', $id)
				->select('b.*', 'c.ten_chu_de', 'u.name')->first();
		return view('baiviet.chitiet', ['baiviet' => $baiviet]);
    }

    public function getSua($id)
    {
        $chude = DB::table('chude')->where('id', '=', $id)->first();
		return view('chude.sua', ['chude' => $chude]);
    }

    public function postSua(Request $request)
    {
        $this->validate($request, [
            'ten_chu_de' => 'required|string|max:100|unique:chude,ten_chu_de,' . $request->id
        ]);
		
		DB::table('chude')->where('id', $request->id)->update([
			'ten_chu_de' => $request->ten_chu_de,
			'updated_at' => Carbon::now()
		]);
		
		return redirect('chude');
    }

    public function getXoa($id)
    {
        DB::table('chude')->where('id', '=', $id)->delete();
		return redirect('chude');
    }
}
