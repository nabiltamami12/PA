<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trafo;
use App\Histori;
use App\User;
use Auth;
use Session;
use DB;
class TrafoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$trafos = DB::table(DB::raw('('.
    DB::table('trafos')->orderBy('id', 'desc')->take(10)->toSql()
.') trafos'))->orderBy('status', 'desc')->get();

                 $header = "Halaman Data Trafo";
        $header_description= "Index";
        $trafo = Trafo::paginate(10);
        // $descid = Trafo::orderBy('id', 'DESC')->get();
        // $trafos = Trafo::orderBy('status', 'DESC')->get();
        // return view('data.index', compact('data','header','header_description'));
        return view('admin.trafo.index', compact('trafo','header','header_description','trafos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function verifikasi(Request $item)
    {
        //

        $trafos = Trafo::where('id', $item->id)->update(array('verifikasi' => 'terverifikasi'));
        // $trafos=Trafo::where('id',$item->id)->delete();
        $trafo_for_padam = Trafo::where('id', $item->id)->get();
 return view('admin.padam.create', compact('trafo_for_padam')); 
    }
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

if(isset($_POST['status']))
{

    $values = $_POST['status'];
    $WarnaStatus = 0;
    for($i=0;$i<count($values);$i++)
    {
        $WarnaStatus += $values[$i];
    }
  
}
  //       if($request->status){
  //           $WarnaStatus = 0;
  //        foreach($request->status as $WarnaStatus){
        
  //      if(count($WarnaStatus>=80)){
  //       $WarnaStatus='merah';
  //      }
  //     if(count($WarnaStatus>=40)){
  //       $WarnaStatus='kuning';
  //      }
  //       if(count($WarnaStatus<=40)){
  //       $WarnaStatus='hijau';
  //      }
  //  }
  // }
  //  

// $count_ceklis = count($_POST['status']);
       //
        // $this->status[] = $ceklis;
// $ceklis = $_POST['status'];
// $count_ceklis = count($ceklis);
// $ceklis = (array)$request->status;
// $count_ceklis = count($ceklis);
// $count_ceklis = var_dump(count($ceklis));
// $count_ceklis = count($ceklis);
// $WarnaStatus = $count_ceklis;
// $user = Auth::user();
 // $users = DB::table('users')->get();
$id_user = Auth::user()->id;
$name_user  = Auth::user()->name;
$warna='';
       // $getstatus = $request->input('status');
        if ($WarnaStatus<50){
            $warna='hijau';
        }
        if ($WarnaStatus>=50){
            $warna='kuning';
        }
        if ($WarnaStatus>=70){
           $warna='merah';
        }

         $ceklis =  array(
            'id_user' => $id_user,
            'name_user' => $name_user, 
           'tanggal' => $request->tanggal,
            'kode_trafo' => $request->kode_trafo,
           'lokasi' => $request->lokasi,
            'status' =>  $warna,   
            'deskripsi' => $request->deskripsi , 
            'verifikasi' => 'belum terverifikasi',           
        );

         // $HistoriUser = DB::insert('history', $ceklis);
        Histori::create($ceklis);
        Trafo::create($ceklis);
        return redirect('ceklis');
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
    // public function destroy($id)
    // {
    public function destroy(Request $item){
    // $id = $request->input('id');
    // Trafo::find($id)->delete();
  
    //     return redirect('trafo'); 


$trafos=Trafo::where('id',$item->id)->delete();
 return redirect('trafo'); 
    }
}
