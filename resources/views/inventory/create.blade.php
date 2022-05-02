@extends('main')

@section('title', 'Inventory')
    

@section('page-heading')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Inventory</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Inventory</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection


@section('content')
<section class="content bg-white">
<div class="animated fadeIn">

    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <strong>Tambah Invnetory</strong>
            </div>
            <div class="float-end">
                <a href="{{url('inventory')}}" class="btn btn-success btn-sm">
                    <i class="fas fa-undo">back</i>
                    
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offser-md-4">
                    <form action="{{url('inventory/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror" autofocus>
                                <option value="">-- Pilih --</option>
                                @foreach ($category as $item)
                                    <option value="{{$item->id}}" {{ old('category_id') == $item->id ? 'selected' : null}}>{{$item->nama_category}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div v class="form-group">
                            <label for="nama_produk">Nama Product</label>
                            <input type="text" name="product_name" id="product_name" value="{{old('product_name')}}" class="form-control @error('product_name') is-invalid @enderror">
                            @error('product_name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" id="status" value="{{old('status')}}" class="form-control @error('status') is-invalid @enderror" >
                            @error('status')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Stock</label>
                            <input type="text" name="stock" id="stock" value="{{old('stock')}}" class="form-control @error('stock') is-invalid @enderror" >
                            @error('stock')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
</div>  
 </section>
@endsection