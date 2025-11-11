<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks= Produk::all();
        return view ('produk.index',compact('produks'));
    }
    public function create(){
        return view('produk.create');
    }
     public function store(Request $request)
    {
        DB::table('produks')->insert([
            'nama' => $request->nama,
            'merk' => $request->merk,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
        return redirect('/');
   
    }
}