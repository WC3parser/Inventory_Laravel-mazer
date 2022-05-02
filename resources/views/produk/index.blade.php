@extends('main')

@section('title', 'Produk')
    

@section('page-heading')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Product</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Produk</a></li>
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
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>

    @endif
   
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <strong>Data Product</strong>
            </div>
            <div class="float-end">
                <a href="{{url('produks/create')}}" class="btn btn-success btn-sm">
                    <i class="bi bi-plus">Tambah Data</i>
                    
                </a>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama Suppliers</th>
            <th>Nama Product</th>    
            <th>Stock</th>
            <th>Harga</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($produks as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$item->supplier->nama}}</td>
                    <td>{{ $item->nama_produk}}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->harga }}</td>
                    <td class="text-center">
                        <a href="{{ url('produks/'. $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ url('produks/'. $item->id.'/edit') }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{url('produks/'.$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>    
    </table>
        </div>
    </div>
        
</div>  
 </section>
@endsection