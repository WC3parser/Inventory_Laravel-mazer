<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class supplierController extends Controller
{
    public function data()
    {
        $suppliers = DB::table('suppliers')->get();

        // return $suppliers;
        return view('supplier.data',['suppliers' => $suppliers]);
    }

    public function add(){
        return view('supplier.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:2',
            'alamat' => 'required',
            'no_telp' => 'required',
        ],[
            'nama.required' => 'Nama suppliers tidak boleh kosong',
            'alamat.required' => 'Alamat suppliers tidak boleh kosong',
            'no_telp.required' => 'No Telephone suppliers tidak boleh kosong',
        ]);

        DB::table('suppliers')-> insert(
            ['nama' => $request->nama,
             'alamat' => $request->alamat,
             'no_telp' => $request->no_telp,
            ]
        );
        return redirect('suppliers')->with('status', 'Supplier Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $suppliers = DB::table('suppliers')->where('id', $id)->first();
        return view('supplier/edit', compact('suppliers'));
    }

    public function editProcess(Request $request , $id)
    {

        $request->validate([
            'nama' => 'required|min:2',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        DB::table('suppliers')->where('id', $id)
        ->update(
            [
            'nama' => $request->nama,
             'alamat' => $request->alamat,
             'no_telp' => $request->no_telp,
            ]
        );
        return redirect('suppliers')->with('status', 'Supplier Berhasil Diedit');
    }

    public function delete($id)
    {
        DB::table('suppliers')->where('id',$id)->delete();
        return redirect('suppliers')->with('status', 'Supplier Berhasil Dihapus');
    }
}
