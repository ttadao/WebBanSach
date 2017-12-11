<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChuDeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postDanhSach()
    {
		$chude = DB::table('chude')->get();
        return view('chude.danhsach', ['chude' => $chude]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getThem()
    {
        return view('chude.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postThem(Request $request)
    {
        // Kiểm tra
		$this->validate($request, [
            'ten_chu_de' => 'required|string|max:100|unique:chude',
        ]);
		
		DB::table('chude')->insert([
			'ten_chu_de' => $request->ten_chu_de,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		return redirect('chude');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getSua($id)
    {
        $chude = DB::table('chude')->where('id', '=', $id)->first();
		return view('chude.sua', ['chude' => $chude]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getXoa($id)
    {
        DB::table('chude')->where('id', '=', $id)->delete();
		return redirect('chude');
    }
}
