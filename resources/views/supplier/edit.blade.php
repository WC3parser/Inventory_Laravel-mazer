@extends('main')

@section('title', 'Supplier')
    

@section('page-heading')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Supplier</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Supllier</a></li>
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
                <strong>Edit Supplier</strong>
            </div>
            <div class="float-end">
                <a href="{{url('suppliers')}}" class="btn btn-success btn-sm">
                    <i class="fas fa-undo">back</i>
                    
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offser-md-4">
                    <form action="{{url('suppliers',$suppliers->id)}}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="supplier">Nama Supplier</label>
                            <input type="text" name="nama" id="supplier" value="{{old('nama',$suppliers->nama)}}" class="form-control @error('nama') is-invalid @enderror" autofocus>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" value="{{old('alamat',$suppliers->alamat)}}" class="form-control @error('alamat') is-invalid @enderror">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telephone</label>
                            <input type="text" name="no_telp" id="telp" value="{{old('no_telp',$suppliers->no_telp)}}" class="form-control @error('no_telp') is-invalid @enderror" >
                            @error('no_telp')
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