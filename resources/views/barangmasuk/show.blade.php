@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0"><b>Tambah Data Barang Masuk</b></h1>
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
                        <div class="form-group">
                            <label for="">Id Barang</label>
                            <input type="text" name="id_barang" value="{{ $barangmasuk->id_barang }}"
                                class="form-control @error('id_barang') is-invalid @enderror" readonly>
                            @error('id_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{ $barangmasuk->nama_barang }}"
                                class="form-control @error('nama_barang') is-invalid @enderror" readonly>
                            @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kategori Barang</label>
                            <input type="text" name="kategori_barang" value="{{ $barangmasuk->kategori_barang }}"
                                class="form-control @error('kategori_barang') is-invalid @enderror" readonly>
                            @error('kategori_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Merek</label>
                            <input type="text" name="merek" value="{{ $barangmasuk->merek }}"
                                class="form-control @error('merek') is-invalid @enderror" readonly>
                            @error('merek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumblah Barang</label>
                            <input type="text" name="jumlah_barang" value="{{ $barangmasuk->jumlah_barang }}"
                                class="form-control @error('jumlah_barang') is-invalid @enderror" readonly>
                            @error('jumlah_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" value="{{ $barangmasuk->tgl_masuk }}"
                                class="form-control @error('tgl_masuk') is-invalid @enderror" readonly>
                            @error('tgl_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kondisi</label>
                            <input type="text" name="kondisi" value="{{ $barangmasuk->kondisi }}"
                                class="form-control @error('kondisi') is-invalid @enderror" readonly>
                            @error('kondisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" value="{{ $barangmasuk->keterangan }}"
                                class="form-control @error('keterangan') is-invalid @enderror" readonly>
                            @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-default">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
