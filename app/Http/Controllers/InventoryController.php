<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Inventory;
use App\Models\Supplier;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $res = DB::table('categories')->get();
        $result = json_decode(json_encode($res), true);

        $category= array();
        foreach($result as $key => $val){
            $category[$val['id']]   = $val['nama_category'];
        }
        
        $inv = DB::table('inventory')->get();
        $inventory = json_decode(json_encode($inv), true);
        foreach($inventory as $key => $val){
            $inventory[$key]['category_name']   = $category[$val['category_id']];
        }
        return view('inventory/index',compact('inventory'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = DB::table('categories')->get();
        $result = json_decode(json_encode($res), true);
        $list_category= array();
        foreach($result as $key => $val){
            $list_category[$val['id']]   = $val['nama_category'];
        }
        
        $inv = DB::table('inventory')->where('id', $id)->first();

        return view('inventory/show',compact('list_category', 'inv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->get();
        $inventory = DB::table('inventory')->where('id', $id)->first();
        return view('inventory/edit',compact('category', 'inventory'));
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
            'category_id' => 'required',
            'product_name' => 'required',
            'status' => 'required',
            'stock' => 'required',
        ],[
            'category_id.required' => 'Nama Category tidak boleh kosong',
            'product_name.required' => 'Nama Product tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            'stock.required' => 'Stock tidak boleh kosong',
        ]);
        // return $request;

        DB::table('inventory')->where('id', $id)
        ->update(
            [
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'status' => $request->status,
            'stock' => $request->stock,
            ]
        );

    return redirect('inventory')->with('status', 'Inventory Berhasil Di Perbaiki');   
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('categories')->get();
        return view('inventory/create',compact('category'));
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
            'category_id' => 'required',
            'product_name' => 'required',
            'status' => 'required',
            'stock' => 'required',
        ],[
            'category_id.required' => 'Nama Category tidak boleh kosong',
            'product_name.required' => 'Nama Category tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            'stock.required' => 'Stock tidak boleh kosong',
        ]);
        // return $request;
        DB::table('inventory')-> insert(
            ['category_id' => $request->category_id,
             'product_name' => $request->product_name,
             'status' => $request->status,
             'stock' => $request->stock,
            ]
        );   
        return redirect('inventory')->with('status', 'Inventory Berhasil Ditambahkan');  

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('inventory')->where('id',$id)->delete();
        return redirect('inventory')->with('status', 'Inventory Berhasil Dihapus'); 
    }

    public function delete($id)
    {
        DB::table('inventory')->where('id',$id)->delete();
        /*DB::table('inventory')->where('id', $id)
        ->update(
            [
            'status' => "DELETED",
            ]
        );*/

        return redirect('inventory')->with('status', 'Inventory Berhasil Dihapus');
    }
}
