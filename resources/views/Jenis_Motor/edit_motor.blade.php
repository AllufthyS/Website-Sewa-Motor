@extends('index')
@section('title', 'Motor')
@section('content')
<p></p>
<div class="container">
    <div class="jumbotron" style="margin-top: 5vh">
<div class="panel panel-default">
  <div class="panel-heading">
  <center><h2>EDIT JENIS MOTOR</h2></center>
</div>
<br>
      {!! Form::open(array(
        'method'=>'POST',
        'class'=>'container','url'=>'/prosesupdatemotor')) !!}
       <input type="text" name="id_jenis_motor" value="{{$jenis_motor->id_jenis_motor}}" hidden id=""> 

<table>

<div class="panel-body">
<tr>
<tr>
  <td>{!! Form::label('motor', 'Nama Motor') !!}</td>
  <td> : </td>
  <td>{!! Form::text('motor', $jenis_motor->nama_motor,array('class'=>'form-control')) !!}</td>
</tr>

 <tr>
  <td>{!! Form::label('harga_sewa', 'Harga Sewa') !!}</td>
  <td> : </td>
  <td>{!! Form::text('harga_sewa', $jenis_motor->harga_sewa,array('class'=>'form-control')) !!}</td>
</tr>

<tr>
  <td colspan="4">{!! Form::submit('Simpan', array('class'=>'btn btn-success')) !!} </td>
</tr>
</tr>
</table>

{!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection