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
                    <ol class="breadcrumb text-right">
                        <li><a href="">Product</a></li>
                        <li><a href="">Data</a></li>
                        <li class="active">Detail</li>
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
                        <strong>Detail Produk</strong>
                    </div>
                    <div class="float-end">
                        <a href="{{url('produks')}}" class="btn btn-secondary btn-sm">
                            <i class="bi bi-plus"></i>Back
                            
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 25%">Nama Supplier</th>
                                        <td>{{ $produk->supplier->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Product</th>
                                        <td>{{ $produk->nama_produk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Stocks</th>
                                        <td>{{ $produk->stock}}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>{{ $produk->harga }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection