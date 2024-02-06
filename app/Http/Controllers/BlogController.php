<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Category;
use App\Models\data_penduduk;

class BlogController extends Controller
{
    function index() {
        // dd(request('search'));
            $berita = Berita::latest();
            if (request('search')) {
                $berita->where('judul','like','%'.request('search').'%')->orWhere('isi','like','%'.request('search').'%');
            }
            // dd($berita->get());
        return view('blog',[
            'total_dusun' => data_penduduk::count(),
            'total_laki_laki' => data_penduduk::sum('laki_laki'),
            'total_perempuan' => data_penduduk::sum('perempuan'),
            'total_kk' => data_penduduk::sum('jumlah_kk'),
            'berita' =>  $berita->paginate(3),

        ]);
}
}
