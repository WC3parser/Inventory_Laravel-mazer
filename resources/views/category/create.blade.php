@extends('main')

@section('title', 'Category')
    

@section('page-heading')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Category</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Category</a></li>
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
                <strong>Tambah Category</strong>
            </div>
            <div class="float-end">
                <a href="{{url('category')}}" class="btn btn-success btn-sm">
                    <i class="fas fa-undo">back</i>
                    
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offser-md-4">
                    <form action="{{url('category/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select name="supplier_id" id="" class="form-control @error('nama_supplier') is-invalid @enderror" autofocus>
                                <option value="">-- Pilih --</option>
                                @foreach ($suppliers as $item)
                                    <option value="{{$item->id}}" {{ old('supplier_id') == $item->id ? 'selected' : null}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                            @error('nama_supplier')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div v class="form-group">
                            <label for="nama_produk">Nama Category</label>
                            <input type="text" name="nama_category" id="nama_produk" value="{{old('nama_category')}}" class="form-control @error('nama_produk') is-invalid @enderror">
                            @error('nama_category')
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
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
</div>  
 </section>
@endsection