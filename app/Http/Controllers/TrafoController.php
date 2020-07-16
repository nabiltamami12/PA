<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trafo;
use App\Photo;
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
         $trafo = DB::table('Trafos')->simplePaginate(5);
           // $trafo = Trafo::all();
         return view('trafo.trafo', compact('trafo'));
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

  $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = time().'.'.$request->image->extension();  

   

        $request->image->move(public_path('images'), $imageName);
        
// json_encode($values)

 $input =  array(
         "kode_trafo" => $request->kode_trafo,
         'alamat'=> $request->alamat,
         'seksen'=> $request->seksen,
         'deskripsi'=> $request->deskripsi,
         'gambar'=> $imageName,
         'latitude'=> $request->latitude,
         'longitude'=> $request->longitude,

         

          );


        // $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

    
    
   Trafo::create($input);
return redirect('trafo')
            ->with('image',$imageName);
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
      
             $trafo = Trafo::findOrFail($id);
         return view('trafo.edit', compact('trafo'));
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
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = time().'.'.$request->image->extension();  

   

        $request->image->move(public_path('images'), $imageName);
        
// json_encode($values)

 $input =  array(
         'kode_trafo' => $request->kode_trafo,
         'alamat'=> $request->alamat,
         'seksen'=> $request->seksen,
         'deskripsi'=> $request->deskripsi,
         'gambar'=> $imageName,
         'latitude'=> $request->latitude,
         'longitude'=> $request->longitude,

          

          );


        // $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

    
    
        Trafo::whereId($id)->update($input);
return redirect('trafo')
            ->with('image',$imageName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $trafo=Trafo::where('id',$id)->delete();
 return redirect('trafo'); 
    }
}
