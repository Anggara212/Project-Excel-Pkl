<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $data = User::paginate();
        return view('user\user',compact('data'));
    }

    public function tambahuser(){
        $user = User::all();
        return view('user.tambah',compact('user'));
    }

    public function store(request $request){
        user::create([
            'name' => $request->name,
            'nipd' => $request->nipd,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // 'expired' => Carbon::parse($request->updated_at)->format('l\, d-m-Y h:1 A'),
            // 'tanggal_awal' => Carbon::parse($request->created_at)->format('l\, d-m-Y h:1 A'),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/user');
    }

    public function tampilanUser($id){
        $data = User::find ($id);
        return view('user\user',compact('data'));
    }

    public function update(request $request, $id){  
        $data = User::find($id);
        $data->update($request->all());
        if($request->hasFile('foto_user')){
            $request->file('foto_user')->move('foto_user/', $request->file('foto_user')->getClientOriginalName());
            $data->foto_user = $request->file('foto_user')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('user');
    }   

    public function destroy($id){
        $data = User::first();
        $data->delete();
        return redirect()->route('user');
    }
}
