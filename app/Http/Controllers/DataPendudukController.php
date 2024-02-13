<?php

namespace App\Http\Controllers;

use App\Models\data_penduduk;
use App\Models\Berita;
use App\Models\Category;

use Illuminate\Http\Request;



class DataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function dashboard() {
        return view('admin.dashboard',[
        'total_dusun' => data_penduduk::count(),
        'total_laki_laki' => data_penduduk::sum('laki_laki'),
        'total_perempuan' => data_penduduk::sum('perempuan'),
        'total_kk' => data_penduduk::sum('jumlah_kk'),
       ]);
     }
    public function index()
    {
       return view('admin.data_penduduk',[
            'datas'=> data_penduduk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahDataPenduduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedata_pendudukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
         $validData = $request->validate([
            'nama_dusun'=>'required|max:255',
            'laki_laki'=>'required',
            'perempuan'=>'required',
            'jumlah_kk'=>'required',
        ]);
         if (data_penduduk::create($validData)) {
            return redirect("/data_penduduks")->with('berhasil','Berhasil Menambahkan Data Penduduk');            
        }  
        return redirect("/data_penduduks")->with('gagal','Gagal Menambahkan Data Penduduk');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(data_penduduk $data_penduduk)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(data_penduduk $data_penduduk)
    {
        // dd($data_penduduk);
        return view('admin.updateDataPenduduk',[
            'data_penduduk'=>$data_penduduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedata_pendudukRequest  $request
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_penduduk $data_penduduk)
    {
        $rules = [
            'nama_dusun'=>'required|max:255',
            'laki_laki'=>'required',
            'perempuan'=>'required',
            'jumlah_kk'=>'required'
        ];
        $validData = $request->validate($rules);
        // return($validData);
         if (data_penduduk::where('dp_id',$data_penduduk->dp_id)->update($validData)) {
            return redirect("/data_penduduks")->with('berhasil','Berhasil Mengupdate Data Penduduk');            
        }  
        return redirect("/data_penduduks")->with('gagal','Gagal Mengupdate Data Penduduk');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_penduduk $data_penduduk)
    {
        // dd($data_penduduk);
        
        if (data_penduduk::destroy($data_penduduk->dp_id)) {
            return redirect("/data_penduduks")->with('berhasil','Berhasil Menghapus Data Penduduk');            
        }  
        return redirect("/data_penduduks")->with('gagal','Gagal Menghapus Data Penduduk');
    }
}
