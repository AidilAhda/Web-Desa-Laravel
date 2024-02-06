<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::latest()->paginate(3);
       return view('admin.berita',[
        'data' => $berita,
        // 'data' => Berita::latest()->get(),
        'kategory'=>Category::get(['id','nama'])
       ]);
       
    }
    function search(Request $request)  {
         $query = $request->input('query');
         
        //  $berita = Berita::latest();
         $cards = Berita::where('judul','like','%'.$query.'%')->orWhere('isi','like','%'.$query.'%')->latest()->paginate(3);
         return response()->json($cards);
    }

    function cekSlug(Request $request)  {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);
        return response()->json(['slug'=>$slug]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahBerita',[
            'kategory'=>Category::get(['id','nama'])
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
        // return $request->file('image')->store('gambar/berita');
        $validData = $request->validate([
            'judul'=>'required|max:255',
            'slug'=>'required|unique:beritas',
            'category_id'=>'required',
            'gambar'=>'required|image|file|max:1024',
            'isi'=>'required',

        ]);
        $validData['excerpt']= Str::limit(strip_tags($request->isi,100));
        $validData['gambar']= $request->file('gambar')->store('berita');
        // dd($validData);
        if (Berita::create($validData)) {
            return redirect("/beritas")->with('berhasil','Berhasil Menambahkan Berita');            
        }  
        return redirect("/beritas")->with('gagal','Gagal Menambahkan Berita');            

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
  
    //  detail berita
    public function detailBerita(Berita $berita)
    {
        // return $berita;
        return view('detailBerita',[
            'data'=> $berita,
            
        ]);
    }


    public function show(Berita $berita)
    {
        
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('admin.updateBerita',[
            'berita'=> $berita,
            'kategory'=>Category::get(['id','nama'])
        ]);
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        // ddd($request);
        $rules = [
            'judul'=>'required|max:255',
            'slug'=>'required',
            'category_id'=>'required',
            'gambar'=>'required|image|file|max:1024',
            'isi'=>'required',
        ];
        // hapus gambar lama agar tidak terjadi penumpukan file pada folder storage/berita
        if ($request->oldImage) {            
            Storage::delete($request->oldImage);
        }
        $validData = $request->validate($rules);
        
        $validData['excerpt'] = Str::limit(strip_tags($request->isi,100));
        $validData['gambar'] = $request->file('gambar')->store('berita');
        
        // ddd(Berita::where('id',$berita->id)->update($validData)->toSql()); 
        if (Berita::where('id',$berita->id)->update($validData)) {
            return redirect("/beritas")->with('berhasil','Berhasil Mengupdate Berita');            
        }  
        return redirect("/beritas")->with('gagal','Gagal Mengupdate Berita');            

        
    
    }


    public function destroy(Berita $berita)
    {
        if ($berita->gambar) {
            Storage::delete($berita->gambar);
        }
         if (Berita::destroy($berita->id)) {
            return redirect("/beritas")->with('berhasil','Berhasil Menghapus Berita');            
        }  
        return redirect("/beritas")->with('gagal','Gagal Menghapus Berita');
    }
}
