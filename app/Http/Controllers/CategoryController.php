<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $category =  Category::all();
        // return $category;
        return view('category/index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('category.create',compact('suppliers'));
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
            'nama_category' => 'required',
            'status' => 'required',
            //'stock' => 'required',
        ],[
            'supplier_id.required' => 'Nama Supplier tidak boleh kosong',
            'nama_category.required' => 'Nama Category tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            //'stock.required' => 'Stock tidak boleh kosong',
        ]);
        // return $request;
        $category = new category;
        $category->supplier_id = $request->supplier_id;
        $category->nama_category = $request->nama_category;
        $category->status = $request->status;  
        //$category->stock = $request->stock;
        $category->save();     
        return redirect('category')->with('status', 'Category Berhasil Ditambahkan');  

        }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        return view('category/show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        $suppliers = Supplier::all();
        return view('category/edit',compact('category', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id' => 'required',
            'nama_category' => 'required',
            'status' => 'required',
            //'stock' => 'required',
        ],[
            'supplier_id.required' => 'Nama Supplier tidak boleh kosong',
            'nama_category.required' => 'Nama Category tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            //'stock.required' => 'Stock tidak boleh kosong',
        ]);
        // return $request;

        DB::table('categories')->where('id', $id)
        ->update(
            [
            'supplier_id' => $request->supplier_id,
            'nama_category' => $request->nama_category,
            'status' => $request->status,
            //'stock' => $request->stock,
            ]
        );

    return redirect('category')->with('status', 'Category Berhasil Di Perbaiki');   
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        /*DB::table('categories')->where('id', $id)
        ->update(
            [
            'status' => "DELETED",
            ]
        );*/

        return redirect('category')->with('status', 'Category Berhasil Dihapus');
    }
}
