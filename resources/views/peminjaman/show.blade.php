@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Data Peminjaman</h1>
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
                            <label for="">Peminjaman</label>
                            <input type="text" name="peminjaman" value="{{ $peminjaman->peminjaman }}"
                                class="form-control @error('peminjaman') is-invalid @enderror" readonly>
                            @error('peminjaman')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jk" value="{{ $peminjaman->jk }}"
                                class="form-control @error('jk') is-invalid @enderror" readonly>
                            @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" name="no_tlp" value="{{ $peminjaman->no_tlp }}"
                                class="form-control @error('no_tlp') is-invalid @enderror" readonly>
                            @error('no_tlp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" name="jumlah" value="{{ $peminjaman->jumlah }}"
                                class="form-control @error('jumlah') is-invalid @enderror" readonly>
                            @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Merek</label>
                            <input type="text" name="merek" value="{{ $peminjaman->merek }}"
                                class="form-control @error('merek') is-invalid @enderror" readonly>
                            @error('merek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Id Barang</label>
                            <input type="text" name="id_barang" value="{{ $peminjaman->id_barang }}"
                                class="form-control @error('id_barang') is-invalid @enderror" readonly>
                            @error('id_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Peminjaman</label>
                            <input type="date" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}"
                                class="form-control @error('tgl_pinjam') is-invalid @enderror" readonly>
                            @error('tgl_pinjam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}"
                                class="form-control @error('tgl_kembali') is-invalid @enderror" readonly>
                            @error('tgl_kembali')
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
