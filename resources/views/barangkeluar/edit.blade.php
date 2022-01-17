@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Barang Keluar</div>
                    <div class="card-body">
                        <form action="{{ route('barangkeluar.update', $barangkeluar->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror">
                                    @foreach ($stok as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $barangkeluar->id_barang ? 'selected="selected"' : '' }}>
                                            {{ $data->nama_barang }}</option>
                                    @endforeach
                                </select>
                                @error('id_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumblah</label>
                                <input type="number" name="jumlah" value="{{ $barangkeluar->jumlah }}"
                                    class="form-control @error('jumlah') is-invalid @enderror">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Keluar</label>
                                <input type="Date" name="tgl_keluar" value="{{ $barangkeluar->tgl_keluar }}"
                                    class="form-control @error('tgl_keluar') is-invalid @enderror">
                                @error('tgl_keluar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Barang</label>
                                <input type="text" name="kategori_barang" value="{{ $barangkeluar->kategori_barang }}"
                                    class="form-control @error('kategori_barang') is-invalid @enderror">
                                @error('kategori_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Merek</label>
                                <input type="text" name="Merek" value="{{ $barangkeluar->Merek }}"
                                    class="form-control @error('Merek') is-invalid @enderror">
                                @error('Merek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kondisi</label>
                                <input type="text" name="kondisi" value="{{ $barangkeluar->kondisi }}"
                                    class="form-control @error('kondisi') is-invalid @enderror">
                                @error('kondisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop

@section('css')

@stop

@section('js')

@stop