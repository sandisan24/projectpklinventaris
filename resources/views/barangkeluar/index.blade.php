@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <b>INVENTARIS LAB & BENGKEL SMK ASSALAAM</b>

@stop

@section('content')

    <b>Halaman Barang Keluar</b>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Data Barang Keluar</b>
                        <a href="{{ route('barangkeluar.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Add
                            Barang Keluar</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Kategori Barang</th>
                                    <th>Merek</th>
                                    <th>kondisi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($barangkeluar as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->stok->nama_barang() }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->tgl_keluar }}</td>
                                        <td>{{ $data->kategori_barang }}</td>
                                        <td>{{ $data->merek }}</td>
                                        <td>{{ $data->kondisi }}</td>
                                        <td>
                                            <form action="{{ route('barangkeluars.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('barangkeluars.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('barangkeluars.show', $data->id) }}"
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
