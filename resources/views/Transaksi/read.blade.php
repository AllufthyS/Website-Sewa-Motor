@extends('index')
@section('title', 'Penyewaan')
@section('content')

<div class="container">
    @if (Session::has('message'))
        <span class="label label-success">{!!Session::get('message')!!}</span>
    @endif
    <p></p>
    <div class="table-responsive">
    <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Nama Customer</th>
                <th>Nama Motor</th>
                <th>Harga Sewa</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Kembali</th>
                <th>Total Harga</th>
                <th>Tools</th>
            </tr>
            <?php $no=1; ?>
            @foreach ($penyewaan as $data)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>{{ $data->nama_motor}}</td>
                    <td>{{ $data->harga_sewa}}</td>
                    <td>{{ $data->tgl_sewa}}</td>
                    <td>{{ $data->tgl_kembali}}</td>
                    <td>{{ $data->total_harga}}</td>
                    
                   
                    <td><a href="hapussewa/{{ $data->id_penyewaan}}"class="btn btn-primary btn-md">Hapus</a>
                    <a href="editsewa/{{ $data->id_penyewaan}}"class="btn btn-primary btn-md">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
    @stop