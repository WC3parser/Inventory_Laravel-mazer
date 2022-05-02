@extends('main')

@section('title', 'Produk')
    

@section('page-heading')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Produk</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Edit</a></li>
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
                <strong>Edit Produk</strong>
            </div>
            <div class="float-end">
                <a href="{{url('produks')}}" class="btn btn-success btn-sm">
                    <i class="fas fa-undo">back</i>
                    
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offser-md-4">
                    <form action="{{url('produks/'.$produk->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Nama Supplier</label>
                            <select name="supplier_id" id="" class="form-control @error('nama_supplier') is-invalid @enderror" autofocus>
                                <option value="">-- Pilih --</option>
                                @foreach ($suppliers as $item)
                                    <option value="{{$item->id}}" {{ old('supplier_id',$produk->supplier_id) == $item->id ? 'selected' : null}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                            @error('nama_supplier')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Nama Produks</label>
                            <input type="text" name="nama_produk" id="nama_produk" value="{{old('nama_produk',$produk->nama_produk)}}" class="form-control @error('nama_produk') is-invalid @enderror">
                            @error('nama_produk')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" id="stock" value="{{old('stock',$produk->stock)}}" class="form-control @error('stock') is-invalid @enderror" >
                            @error('stock')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" value="{{old('harga',$produk->harga)}}" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
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