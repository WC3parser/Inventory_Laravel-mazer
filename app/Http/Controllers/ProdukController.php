<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks =  Produk::all();
        // return $produks;
        return view('produk/index',compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('produk.create',compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required',
            'nama_produk' => 'required',
            'stock' => 'required',
            'harga' => 'required',
        ],[
            'supplier_id.required' => 'Nama Supplier tidak boleh kosong',
            'nama_produk.required' => 'Nama Produks tidak boleh kosong',
            'stock.required' => 'Stock tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
        ]);
        // return $request;
        $produk = new produk;
        $produk->supplier_id = $request->supplier_id;
        $produk->nama_produk = $request->nama_produk;
        $produk->stock = $request->stock;  
        $produk->harga = $request->harga; 
        $produk->save();     
        return redirect('produks')->with('status', 'Produk Berhasil Ditambahkan');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        // return $produk;
        return view('produk/show',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $suppliers = Supplier::all();  
        return view('produk.edit',compact('produk','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'supplier_id' => 'required',
            'nama_produk' => 'required',
            'stock' => 'required',
            'harga' => 'required',
        ],[
            'supplier_id.required' => 'Nama Supplier tidak boleh kosong',
            'nama_produk.required' => 'Nama Product tidak boleh kosong',
            'stock.required' => 'Stock tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
        ]);
        // return $request;
        $produk->supplier_id = $request->supplier_id;
        $produk->nama_produk = $request->nama_produk;
        $produk->stock = $request->stock;  
        $produk->harga = $request->harga; 
        $produk->save();
        return redirect('produks')->with('status', 'Produk Berhasil Diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect('produks')->with('status', 'Produk Berhasil Dihapus'); 
    }
}
