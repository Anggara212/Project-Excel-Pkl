<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Exports\SantriExport;
use Maatwebsite\Excel\Facades\Excel;
use \Illuminate\Pagination\Paginator;

class SantriController extends Controller
{
    
    public function index(){
        $data = santri::paginate(5);
        return view('santri/santri',compact('data'));
    }
    public function tambahsantri(){

        return view('santri/TambahSantri');
    }
    public function store(request $request){
        $this-> validate($request, [
            'nama_lengkap',
            'nik',
            'alamat',
            'jenis_kelamin',
            'tempat_lahir',
        ]);
        santri::create($request->all());
        return redirect(route('santri'));
        }
    
    

    public function tampilandata($id){
        $data = santri::find ($id);
    return view('santri\EditSantri',compact('data'));
   }
   public function update(request $request, $id){

    $data = santri::find($id);
    $data->update($request->all());
    return redirect()->route('santri');
}   
    public function destroy($id){
    $data = santri::find($id);
    $data->delete();
    return redirect()->route('santri');
}   
public function export()
{
    return Excel::download(new SantriExport, 'Santri.xlsx');
}
}
