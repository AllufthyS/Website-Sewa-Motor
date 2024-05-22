@extends('index')
@section('title', 'motor')
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
                <th>Nama Motor</th>
                <th>Harga Sewa</th>
                <th>Tools</th>
            </tr>
            <?php $no=1; ?>
            @foreach ($jenis_motor as $data)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $data->nama_motor}}</td>
                    <td>{{ $data->harga_sewa}}</td>
                   
                    <td><a href="hapusdatamotor/{{ $data->id_jenis_motor}}"class="btn btn-primary btn-md">Hapus</a>
                    <a href="editdatamotor/{{ $data->id_jenis_motor}}" class="btn btn-primary btn-md">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
    @stop