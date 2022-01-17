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
                    <div class="card-header">Tambah Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Peminjam</label>
                                <input type="text" name="peminjam" class="form-control @error('peminjam') is-invalid @enderror">
                                @error('peminjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="jk">Jenis Kelamin :</label> <br>
                            <div class="form-check form-check-inline">
                            <label for="jk">
                            <input type="radio" name="jk" value="L" id="jk" selected>Laki-Laki
                            <input type="radio" name="jk" value="P" id="jk">Perempuan
                            </label>
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror">
                                @error('no_tlp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="">Jumblah Barang</label>
                                <input type="text" name="jumlah"
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
                                    <option value="">Pilih Barang</option>
                                    @foreach ($stok as $data)
                                        <option value="{{ $data->id }}"> {{ $data->nama_barang }} </option>
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
                                <input type="text" name="Merek"
                                    class="form-control @error('Merek') is-invalid @enderror">
                                @error('Merek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Peminjaman</label>
                                <input type="date" name="tgl_pinjam"
                                    class="form-control @error('tgl_pinjam') is-invalid @enderror">
                                @error('tgl_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kembali</label>
                                <input type="Date" name="tgl_kembali"
                                    class="form-control @error('tgl_kembali') is-invalid @enderror">
                                @error('tgl_kembali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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