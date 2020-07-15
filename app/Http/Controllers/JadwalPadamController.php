<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalPadam;
use Illuminate\Support\Facades\Auth;
use DB;
class JadwalPadamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
         
             // $padamAdmin = JadwalPadam::findOrFail($id);
             // $padamAdmin = JadwalPadam::all();
         $user = Auth::user();

         $padam = DB::table('jadwal_padams')->where('tim', $user->username)->simplePaginate(5);
         $padamAdmin = DB::table('jadwal_padams')->simplePaginate(5);


   // $padam = JadwalPadam::where('tim', $user->username)->get();
         
       
         return view('padam.padam',compact('padam','padamAdmin'));
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
          $i_kom =  array(
         "jadwal_padam" => $request->jadwal_padam,
         'awal_padam'=> $request->awal_padam,
         'akhir_padam'=> $request->akhir_padam,
         'wilayah_padam'=> $request->wilayah_padam,
         'deskripsi_pekerjaan'=> $request->deskripsi_pekerjaan,
         'unit_kerja'=> 'pln ulp jajag',
         'penyulang'=> $request->penyulang,
         'tim'=> $request->tim,


   


            

          );
        JadwalPadam::create($i_kom);
        return redirect('padam');
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
   
    public function edit($id)
    {
             $padamAdmin = JadwalPadam::findOrFail($id);
         $user = Auth::user();


   $padam = JadwalPadam::where('tim', $user->username)->get();
         return view('padam.edit',compact('padam','padamAdmin'));
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
         $i_kom =  array(
              "jadwal_padam" => $request->jadwal_padam,
         'awal_padam'=> $request->awal_padam,
         'akhir_padam'=> $request->akhir_padam,
         'wilayah_padam'=> $request->wilayah_padam,
         'deskripsi_pekerjaan'=> $request->deskripsi_pekerjaan,
         'unit_kerja'=> 'pln ulp jajag',
         'penyulang'=> $request->penyulang,
         'tim'=> $request->tim,

   


            

          );
        JadwalPadam::whereId($id)->update($i_kom);
        return redirect('padam');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat=JadwalPadam::where('id',$id)->delete();
 return redirect('padam'); 
    }
}
