<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use App\AkunPetugas;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
class AkunPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $pet= User::all();
        // $pet = AkunPetugas::all();
         return view('akun.akun',compact('pet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|string|max:255',
        'tim' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users',
        'password' => 'required|string|confirmed',
        'role' => 'string|max:255',

    ]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        
             User::create([
        'name' => $data['tim'],
        'username' => $data['username'],
        'password' => bcrypt($data['password']),
       'role' => 'petugas',
        
    ]);
   //        AkunPetugas::create([
   //     'tim' => $data['tim'],
   //      'username' => $data['username'],
   //      'password' => bcrypt($data['password']),
   //     'role' => 'petugas',

   // ]);

      $pet= User::all();
        // $pet = AkunPetugas::all();
         return view('akun.akun',compact('pet'));
    

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
          $pet = User::findOrFail($id);
         return view('akun.edit',compact('pet'));
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
 

    //   $u =  array([
    //     'name' => $request->tim,
    //     'username' => $request->username,
    //     'password' => hash::make($request->password),
    //    'role' => 'petugas',
        
    // ]);
   //        AkunPetugas::create([
   //     'tim' => $data['tim'],
   //      'username' => $data['username'],
   //      'password' => bcrypt($data['password']),
   //     'role' => 'petugas',

   // ]);
        // User::whereId($id)->update($data);
// $user = Auth::user($u);
// $user->update();
//       $pet= User::all();
        // $pet = AkunPetugas::all();

// $this->validate($request, [
//             'name' => 'required|string|max:255',
//         'tim' => 'required|string|max:255',
//         'username' => 'required|string|max:255|unique:users',
//         'password' => 'required|string|confirmed',
//         'role' => 'string|max:255',
       
//             ]);
// $akun = Auth::user();
//         $akun->name = $request['name'];
//         $akun->username = $request['username'];
//         $akun->password = \Hash::make($request['password']);
//         $akun->role = 'petugas';        
//          return view('akun.akun',compact('pet'));
//       User::whereId($id)->update();
      // $user=User::findOrFail($id);



$akun =  array(
  
 'name' => $request->input('tim'),
'username' => $request->input('username'),
'password' => \Hash::make($request->input('password')),
'role' => 'petugas',
     );
User::whereId($id)->update($akun);
    $pet= User::all();
        // $pet = AkunPetugas::all();
         return view('akun.akun',compact('pet'));

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            // $users = User::find($id)->delete();
            // $users->delete();
        // User::where('id',$id)->delete();
      $user=User::findOrFail($id);
      $user->delete();
        // AkunPetugas::where('id',$id)->delete();
 return redirect('akun'); 
    
    }
}
