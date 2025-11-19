<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allproduk = produk::all();
        return view('produk.index', compact('allproduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required|max:100',
            'merk' => 'required|max:100',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
        ]);
        produk::create($validateData);
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        return view('produk.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $produk)
    {

        $validateData = $request->validate([
            'nama_produk' => 'required|max:100',
            'merk' => 'required|max:100',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
        ]);
        $produk->update($validateData);
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
