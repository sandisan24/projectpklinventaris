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
                    <div class="card-header">Edit Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Peminjam</label>
                                <input type="text" name="peminjam" value="{{ $peminjaman->peminjam }}"
                                    class="form-control @error('peminjam') is-invalid @enderror">
                                @error('peminjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin :</label> <br>
                         <div class="form-check form-check-inline">
                        <label for="jenis_kelamin">
                            <input type="radio" name="jk" value="L" id="jk" {{$peminjaman->jk == 'L'? 'checked' : ''}} >Laki-Laki
                            <input type="radio" name="jk" value="P" id="jk" {{$peminjaman->jk == 'P'? 'checked' : ''}} >Perempuan
                        </label>
                        </div>
                        <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_tlp" value="{{ $peminjaman->no_tlp }}"
                                    class="form-control @error('no_tlp') is-invalid @enderror">
                                @error('no_tlp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        <div class="form-group">
                                <label for="">Jumblah</label>
                                <input type="number" name="jumlah" value="{{ $peminjaman->jumlah }}"
                                    class="form-control @error('jumlah') is-invalid @enderror">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror">
                                    @foreach ($stok as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $peminjaman->id_barang ? 'selected="selected"' : '' }}>
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
                                <label for="">Merek</label>
                                <input type="text" name="Merek" value="{{ $peminjaman->Merek }}"
                                    class="form-control @error('Merek') is-invalid @enderror">
                                @error('Merek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="">Tanggal Pinjam</label>
                                <input type="Date" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}"
                                    class="form-control @error('tgl_pinjam') is-invalid @enderror">
                                @error('tgl_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="">Tanggal Kembali</label>
                                <input type="Date" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}"
                                    class="form-control @error('tgl_kembali') is-invalid @enderror">
                                @error('tgl_kembali')
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