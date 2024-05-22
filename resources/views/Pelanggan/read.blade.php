@extends('index')
@section('title', 'Customer')
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
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Tools</th>
            </tr>
            <?php $no=1; ?>
            @foreach ($users_table as $data)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>{{ $data->jenis_kelamin}}</td>
                    <td>{{ $data->alamat}}</td>
                    <td>{{ $data->no_telp}}</td>
                    <td>{{ $data->email}}</td>
                   
                    <td><a href="hapus/{{ $data->id_customer}}"class="btn btn-primary btn-md">Hapus</a>
                    <a href="edit/{{ $data->id_customer}}"class="btn btn-primary btn-md">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
    @stop