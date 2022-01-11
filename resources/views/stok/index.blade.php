@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <b>INVENTARIS LAB & BENGKEL SMK ASSALAAM</b>

@stop

@section('content')

    <b>Halaman Stok</b>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Data Stok</b>
                        <a href="{{ route('stok.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Add
                            Stok</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomer</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori Barang</th>
                                    <th>Merek</th>
                                    <th>Stok Asal</th>
                                    <th>Jumblah Barang Masuk</th>
                                    <th>Jumblah Barang Keluar</th>
                                    <th>Peminjaman</th>
                                    <th>Jumlah Stok</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($stok as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->kategori_barang }}</td>
                                        <td>{{ $data->merek }}</td>
                                        <td>{{ $data->stokasal }}</td>
                                        <td>{{ $data->jumblahbarangmasuk }}</td>
                                        <td>{{ $data->jumblahbarangkeluar }}</td>
                                        <td>{{ $data->peminjaman }}</td>
                                        <td>{{ $data->jumblahstok }}</td>
                                        <td>
                                            <form action="{{ route('stok.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('stok.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('stok.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
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
