<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Mail;
use Carbon\Carbon;

class HinhAnhController extends Controller
{
    public function getDanhSach()
    {
		$hinhanh = DB::table('hinhanh as h')
				->join('nguoidung as u', 'h.id_user', '=', 'u.id')
				->select('h.*', 'u.name')->get();
        return view('hinhanh.danhsach', ['hinhanh' => $hinhanh]);
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
        session_start();
		
		$hinhanh_identity = DB::select("SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'trangtin' AND TABLE_NAME = 'hinhanh';");
		$next_id = $hinhanh_identity[0]->AUTO_INCREMENT;
		Storage::makeDirectory("images/" . str_pad($next_id, 6, "0", STR_PAD_LEFT));
		
		$path = "http://127.0.0.1:8080/trangtin/storage/app/images/" . str_pad($next_id, 6, "0", STR_PAD_LEFT) . "/";
		$_SESSION['baseUrl'] = $path;
		
		$folder = "images/" . str_pad($next_id, 6, "0", STR_PAD_LEFT);
		
		return view('hinhanh.them', ['folder' => $folder]);
    }

	public function postThem(Request $request)
    {
        // Kiểm tra
		$this->validate($request, [
            'tieu_de' => 'required|max:225',
			'thu_muc' => 'required',
        ]);
		
		if(Auth::user()->level == 1)
			$kiem_duyet = 1;
		else
			$kiem_duyet = 0;
		
		DB::table('hinhanh')->insert([
			'id_user' => Auth::user()->id,
			'tieu_de' => $request->tieu_de,
			'thu_muc' => $request->thu_muc,
			'luot_xem' => 0,
			'kiem_duyet' => $kiem_duyet,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		return redirect('hinhanh/them')->with("success", "Đăng bài viết thành công!");
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
