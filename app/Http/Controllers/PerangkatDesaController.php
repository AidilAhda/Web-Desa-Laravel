<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\PerangkatDesa;
use Illuminate\Support\Facades\Storage;

class PerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkatDesa = PerangkatDesa::all();
        // dd($perangkatDesa);
        return view('admin.PerangkatDesa',[
            'data' =>$perangkatDesa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahPerangkatDesa',[
            'jabatan'=>Jabatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validData = $request->validate([
            'nama'=>'required|max:255',
            'jabatan_id'=>'required',
            'foto'=>'required|image|file|max:1024',

        ]);
        $validData['foto']= $request->file('foto')->store('foto');
        $validData['status'] =  0;
        // dd($validData);
        if (PerangkatDesa::create($validData)) {
            return redirect("/perangkat_desas")->with('berhasil','Berhasil Menambahkan Perangkat Desa');            
        }  
        return redirect("/perangkat_desas")->with('gagal','Gagal Menambahkan Perangkat Desa'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function show(PerangkatDesa $perangkatDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(PerangkatDesa $perangkatDesa)
    {
        return view('admin.updatePerangkatDesa',[
            'perangkatDesa'=>$perangkatDesa,
            'jabatan'=>Jabatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerangkatDesa $perangkatDesa)
    {
         $rules = [
            'nama'=>'required|max:255',
            'jabatan_id'=>'required',
            'foto'=>'required|image|file|max:1024',
        ];
        // hapus gambar lama agar tidak terjadi penumpukan file pada folder storage/berita
        if ($request->oldImage) {            
            Storage::delete($request->oldImage);
        }
        $validData = $request->validate($rules);
        $validData['foto'] = $request->file('foto')->store('foto');
        // dd($perangkatDesa);
         if (PerangkatDesa::where('id',$perangkatDesa->id)->update($validData)) {
            return redirect("/perangkat_desas")->with('berhasil','Berhasil Mengupdate perangkat Desa');            
        }  
        return redirect("/perangkat_desas")->with('gagal','Gagal Mengupdate perangkat Desa');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerangkatDesa $perangkatDesa)
    {
        // menghapus juga gambar yg ada folder storage 
        if ($perangkatDesa->foto) {
            Storage::delete($perangkatDesa->foto);
        }
        if (PerangkatDesa::destroy($perangkatDesa->id)) {
            return redirect("/perangkat_desas")->with('berhasil','Berhasil Menghapus Perangkat Desa');            
        }  
        return redirect("/perangkat_desas")->with('gagal','Gagal Menghapus Perangkat Desa');
    }
    

    function updateStatus(PerangkatDesa $perangkatDesa) {        
        $perangkatDesa->status = $perangkatDesa->status ? 0:1;
        $perangkatDesa->save();
        return back();
        
    }
}
