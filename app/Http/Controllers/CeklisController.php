<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalPadam;
use App\KebutuhanMaterial;
use App\Material;
use DB;
use Illuminate\Support\Facades\Auth;
class CeklisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $tra = Trafo::all();
         // $pet = Petugas::all();
        // $cektim = Auth::user()->tim;
        // $padam = JadwalPadam::select('tim')->where('tim',$cektim);


$user = Auth::user();


   $padam = JadwalPadam::where('tim', $user->username)->get();


 
return view('ceklis',compact('padam'));
        
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

$KetMat = '';
$StsMat = 'baik';
$jumlahMat = '0';
$i=1;
$j=1;
$a='a';
$hariIni = date('y-m-d');;
for ($i; $i < 30; $i++) { 
   
if (isset($_POST['a'.$i])) {
   $StsMat = $_POST['a'.$i];

   if (isset($_POST['jumlah'.$i])) {
       $jumlahMat = $_POST['jumlah'.$i];

       if (isset($_POST['keterangan'.$i])) {
       $KetMat = $_POST['keterangan'.$i];

    $simpan = array(
        'tanggal' => $hariIni,
'id_material'=> $i,
    'keterangan' => $KetMat,
'status'=> $StsMat,
'jumlah'=> $jumlahMat,

     );
    KebutuhanMaterial::create($simpan);
   }
}
else{
echo "Data Tidak Dapat Disimpan";    
}
}
if ($simpan==true) {
   return redirect('ceklis')->with('Success Insert Data');
}

    }
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
         $tra = Trafo::all();
         $pet = Petugas::all();
        $padam = JadwalPadam::findOrFail($id);
         return view('padam.padam',compact('padam','pet','tra'));
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
         'wilayah_trafo'=> $request->wilayah_trafo,
         'deskripsi_pekerjaan'=> $request->deskripsi_pekerjaan,
         'unit_kerja'=> $request->unit_kerja,
   


            

          );
        JadwalPadam::whereId($id)->update($i_kom);
        return redirect('ceklis');
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
 return redirect('ceklis'); 
    }
}
