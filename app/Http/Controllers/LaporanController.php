<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalPadam;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Trafo;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //         $user = Auth::user();
         // $padam = JadwalPadam::where('tim', $user->username)->with('trafo_cek')->get();
        $BP = JadwalPadam::with('trafo_cek')->count();
   $padamAdmin = JadwalPadam::with('trafo_cek')->get();
         return view('laporan.pemeliharaan',compact('padamAdmin'))->with('BP', $BP);;
         // return view('laporan.pemeliharaan');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat=Laporan::where('id',$id)->delete();
 return redirect('laporan'); 
    }
    
}
