@extends('index')
@section('title', 'motor')
@section('content')

<div class="container">
@if (Session::has('message'))
    <span class="label label-success" >{!!Session::get('message')!!}</span>
@endif
<p></p>
<div class="table-responsive">
        <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>Nama Motor</th>
            <th>No Polisi</th>
            <th>Warna</th>
            <th>Masa Aktif STNK Sebelum Tanggal</th>
            <th>Status</th>
            <th>Tools</th>

        </tr>
        <?php $no=1; ?>
        @foreach ($detail_jenis_motor as $data)
            <tr>
                <td>{{ $no++}}</td>
                <td>{{ $data->nama_motor}}</td>
                <td>{{ $data->no_polisi}}</td>
                <td>{{ $data->warna}}</td>
                <td>{{ $data->masa_berlaku_stnk}}</td>
                <td>{{ $data->status}}</td>
                <td><a href="hapusdetailmotor/{{ $data->id_motor}}" class="btn btn-primary btn-md">Hapus</a>
                    <a href="editdetailmotor/{{ $data->id_motor}}" class="btn btn-primary btn-md">Edit</a></td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-outline-light btn-lg" href="mobil" role="button">+</a>
</div>
</div>
@stop