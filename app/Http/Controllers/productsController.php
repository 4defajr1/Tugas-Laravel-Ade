<?php

namespace App\Http\Controllers;

use App\Models\products;
use guzzlehttp\psr7\Request as psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use symfony\component\httpfoundation\Request as httpfoundationRequest;

class productsController extends Controller
{
    //menyimpan data produk
    // public function store(Request $request){
    //         $products = products::create($request->all());
    //         return $products;
    //     }
    // //menampilkan semua data produk
    // public function index(){
    //     return products::all(); 
    // }
    // //update data produk
    // public function update(Request $request, $id){
    //     $products = products::findOrFail($id);
    //     $products->update($request->all());
    //     return $products;
    // }
    // //menghapus data produk
    // public function delete($id){
    //     $products = products::findOrFail($id);
    //     $products->delete();
    //     return $products;   
    // }
    
    // menampilkan data produk
    public function index(){
        $products = DB::table('products')->get();
        return view('products.index', ['products' => $products]);
    }
    // Edit data / udate data
    public function edit($id){
        $products = DB::table('products')->where('id', $id)->first();
        return view('products.edit', compact('products'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'prince' => 'required|numeric',
            'description' => 'required'
        ]);
        DB::table('products')->where('id', $id)->update([
            'nama' => $request->nama,
            'prince' => $request->prince,
            'description' => $request->description
        ]);
        return redirect()->route('products.index');;
    }
    // hapus data
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('products.index');;
    }
        //buat data
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
       
        $request->validate([
            'nama' => 'required',
            'prince' => 'required|numeric',
            'description' => 'required'
        ]);
        DB::table('products')->insert([
            'nama' => $request->nama,
            'prince' => $request->prince,
            'description' => $request->description
        ]);
    
        return redirect()->route('products.index');
    }
}
