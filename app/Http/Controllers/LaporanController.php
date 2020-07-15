<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komponen;
use App\Material;
use App\KebutuhanMaterial;
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
           
        $ori_kom = Komponen::all();
        $ori_mat = Material::all();
        $lap = KebutuhanMaterial::all();
         return view('laporan.laporan', compact('lap', 'ori_mat','ori_kom'));
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
         'id_komponen' => $request->id_komponen,
         'id_material'=> $request->id_material,
         'nomor_sap'=> $request->nomor_sap,
         'satuan'=> $request->satuan,
         'jumlah' => $request->jumlah,
         'keterangan' => $request->keterangan,        
          );
        KebutuhanMaterial::create($i_kom);
        return redirect('laporan');
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
