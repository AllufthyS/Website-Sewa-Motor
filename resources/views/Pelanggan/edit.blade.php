@extends('index')
@section('title', 'Customer')
@section('content')
<p></p>
<div class="panel panel-default">
<div class="container">
<div class="jumbotron" style="margin-top: 5vh">
  <div class="panel-heading">
  
  <h2 style="text-align: center">Edit Data Customer</h2><br>
  </div>
  <div class="panel-body">

    <br>
      {!! Form::open(array(
        'method'=>'POST',
        'class'=>'container','url'=>'/prosesupdate')) !!}
       <input type="text" name="id_customer" value="{{$users_table->id_customer}}" hidden id=""> 
   
   <table>
   <tr>  
   <td>
        <label for="nama">Nama Customer</label>
   </td>
        <td>:</td>
   <td>
        <input type="text" class="form-control" id="nama" name="nama" value={{$users_table->nama}} >
   </td>
   </tr>

   <tr>
   <td>
        <label for="jenis_kelamin">Jenis Kelamin</label>
   </td> 
        <td>:</td>
   <td>

    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value={{$users_table->jenis_kelamin}} >
                <option value="">---Pilih---</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
   </td>
   </tr>

   <tr>
   <td>
     <label for="alamat">Alamat</label>
   </td>
   <td>:</td>
   <td>
   <input type="text" class="form-control" id="alamat" name="alamat" value={{$users_table->alamat}} >
   </td>
   </tr>

   <tr> 
   <td>
   <label for="no_telp">No. HP</label>
   </td>
   <td>:</td>
   <td>
   <input type="text" class="form-control" id="no_telp" name="no_telp" value={{$users_table->no_telp}} >
   </td>
   </tr>

   <tr>
   <td>
   <label for="email">Alamat Email</label>
   </td>
<td>:</td>
   <td>
   <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value={{$users_table->email}} >
   </td>

   </tr>
   </table>
        <p></p>
        {!! Form::submit('Simpan', ['class'=>'btn btn-dark']) !!}
        {!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection