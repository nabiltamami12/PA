<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trafo;
use App\Photo;
class TrafoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $trafo = Trafo::all();
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


 $input =  array(
         "kode_trafo" => $request->kode_trafo,
         'lokasi_trafo'=> $request->lokasi_trafo,
         'rancangan_trafo'=> $imageName,

            

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
       $trafo=Trafo::where('id',$id)->delete();
 return redirect('trafo'); 
    }
}
