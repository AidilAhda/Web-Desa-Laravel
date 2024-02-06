<?php

namespace App\Http\Controllers;

use App\Models\data_penduduk;
use App\Models\Berita;
use App\Models\Category;
use App\Http\Requests\Storedata_pendudukRequest;
use App\Http\Requests\Updatedata_pendudukRequest;

class DataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.dashboard',[
        'total_dusun' => data_penduduk::count(),
        'total_laki_laki' => data_penduduk::sum('laki_laki'),
        'total_perempuan' => data_penduduk::sum('perempuan'),
        'total_kk' => data_penduduk::sum('jumlah_kk'),
       ]);
    }
    public function blog()
    {
      
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
     * @param  \App\Http\Requests\Storedata_pendudukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedata_pendudukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(data_penduduk $data_penduduk)
    {
        return view('admin.data_penduduk',[
            'datas'=> data_penduduk::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(data_penduduk $data_penduduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedata_pendudukRequest  $request
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedata_pendudukRequest $request, data_penduduk $data_penduduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_penduduk  $data_penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_penduduk $data_penduduk)
    {
        //
    }
}
