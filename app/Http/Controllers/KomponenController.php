<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komponen;
use App\Material;
class KomponenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $mate = Material::all();
        $komp = Komponen::all();
         return view('komponen.komponen', compact('komp','mate'));
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
        //
           $i_kom =  array(
         "id_komponen" => $request->id_komponen,
         'id_material'=> $request->id_material,
         'nama_komponen'=> $request->nama_komponen,
         'satuan'=> $request->satuan,

            

          );
        Komponen::create($i_kom);
        return redirect('komponen');
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
    {           $mat_to_kom = Komponen::all();
             $komp = Komponen::findOrFail($id);
         return view('komponen.edit', compact('komp','mat_to_kom'));
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
          $u_kom = array(
             "id_komponen" => $request->id_komponen,
         'id_material'=> $request->id_material,
         'nama_komponen'=> $request->nama_komponen,
         'satuan'=> $request->satuan,
        );

        Komponen::whereId($id)->update($u_kom);

        return redirect('komponen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kom=Komponen::where('id',$id)->delete();
 return redirect('komponen'); 
    }
}
