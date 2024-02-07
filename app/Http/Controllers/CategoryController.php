<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::latest()->get();
       return view('admin.kategori',[
        'category' => $category,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahKategori');
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
        ]);
         if (Category::create($validData)) {
            return redirect("/categories")->with('berhasil','Berhasil Menambahkan Kategori');            
        }  
        return redirect("/categories")->with('gagal','Gagal Menambahkan Kategori');            

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       return view('detailKategori',[
            'category'=> $category->load('berita'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.updateKategori',[
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // dd($request);
         $rules = [
            'nama'=>'required|max:255',
        ];
        $validData = $request->validate($rules);
         if (Category::where('id',$category->id)->update($validData)) {
            return redirect("/categories")->with('berhasil','Berhasil Mengupdate Kategori');            
        }  
        return redirect("/categories")->with('gagal','Gagal Mengupdate Kategori');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (Category::destroy($category->id)) {
            return redirect("/categories")->with('berhasil','Berhasil Menghapus Kategori');            
        }  
        return redirect("/categories")->with('gagal','Gagal Menghapus Kategori');
    
    }
}
