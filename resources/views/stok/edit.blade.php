@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Data Stok</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('stok.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" name="nama_barang" value="{{ $stok->nama_barang }}"
                                    class="form-control @error('nama_barang') is-invalid @enderror">
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Barang</label>
                                <input type="text" name="kategori_barang" value="{{ $stok->kategori_barang }}"
                                    class="form-control @error('kategori_barang') is-invalid @enderror">
                                @error('kategori_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Merek Barang</label>
                                <input type="text" name="merek" value="{{ $stok->merek }}"
                                    class="form-control @error('merek') is-invalid @enderror">
                                @error('merek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Stok Asal Barang</label>
                                <input type="text" name="stokasal" value="{{ $stok->stokasal }}"
                                    class="form-control @error('stokasal') is-invalid @enderror">
                                @error('stokasal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumblah Barang Masuk</label>
                                <input type="text" name="jumblahbarangmasuk" value="{{ $stok->jumblahbarangmasuk }}"
                                    class="form-control @error('jumblahbarangmasuk') is-invalid @enderror">
                                @error('jumblahbarangmasuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumblah Barang Keluar</label>
                                <input type="text" name="jumblahbarangkeluar" value="{{ $stok->jumblahbarangkeluar }}"
                                    class="form-control @error('jumblahbarangkeluar') is-invalid @enderror">
                                @error('jumblahbarangkeluar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Peminjaman</label>
                                <input type="text" name="peminjaman" value="{{ $stok->peminjaman }}"
                                    class="form-control @error('peminjaman') is-invalid @enderror">
                                @error('peminjaman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumblah Stok</label>
                                <input type="text" name="jumblahstok" value="{{ $stok->jumblahstok }}"
                                    class="form-control @error('jumblahstok') is-invalid @enderror">
                                @error('jumblahstok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-default">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
