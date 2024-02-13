<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('admin.jabatan',[
                'jabatan' => $jabatan,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahJabatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validData = $request->validate([
            'jabatan'=>'required|max:255',
        ]);
         if (Jabatan::create($validData)) {
            return redirect("/jabatans")->with('berhasil','Berhasil Menambahkan Jabatan');            
        }  
        return redirect("/jabatans")->with('gagal','Gagal Menambahkan Jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        return view('admin.updateJabatan',[
            'jabatan'=>$jabatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        //  dd($request);
         $rules = [
            'jabatan'=>'required|max:255',
        ];
        $validData = $request->validate($rules);
         if (Jabatan::where('id',$jabatan->id)->update($validData)) {
            return redirect("/jabatans")->with('berhasil','Berhasil Mengupdate Jabatan');            
        }  
        return redirect("/jabatans")->with('gagal','Gagal Mengupdate Jabatan');   
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        if (Jabatan::destroy($jabatan->id)) {
            return redirect("/jabatans")->with('berhasil','Berhasil Menghapus Jabatan');            
        }  
        return redirect("/jabatans")->with('gagal','Gagal Menghapus Jabatan');
    }
}
