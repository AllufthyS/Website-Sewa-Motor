@extends('index')
@section('title', 'Motor')
@section('content')
<p></p>
<div class="panel panel-default">
  <div class="panel-heading">
  <center><h2>EDIT DATA MOTOR</h2></center>
</div>

{!! Form::open(array(
        'method'=>'POST',
        'class'=>'container','url'=>'prosesupdatedetailmotor')) !!}
{!! Form::hidden('id_motor',$jenis_motor->id_motor, ['class' => 'form-control'])!!}       
        <table>

<div class="panel-body">

<tr>
  <td>{!! Form::label('id_jenis_motor', 'Nama Motor') !!}</td>
  <td> : &nbsp;</td> 

  <td><select name="id_jenis_motor" class="form-control">

<option value="{{$jenis_motor->id_jenis_motor}}">{{$jenis_motor->nama_motor}}</option>

</select></td>
</tr>

<tr>
  <td>{!! Form::label('nopol', 'Nomor Polisi') !!}</td>
  <td> : </td>
  <td>{!! Form::text('nopol', $jenis_motor->no_polisi,array('class'=>'form-control')) !!}</td>
</tr>

<tr>
  <td>{!! Form::label('warna', 'Warna Motor') !!}</td>
  <td> : </td>
  <td>{!! Form::text('warna', $jenis_motor->warna,array('class'=>'form-control')) !!}</td>
</tr>

<tr>
  <td>{!! Form::label('tglstnk', 'Masa Aktif STNK') !!}</td>
  <td> : </td>
  <td>{!! Form::date('tglstnk', $jenis_motor->masa_berlaku_stnk,array('class'=>'form-control')) !!}</td>
</tr>

<tr>
  <td>{!! Form::label('status', 'Kondisi Motor') !!}</td>
  <td> : </td>
  <td>{!! Form::text('status', $jenis_motor->status,array('class'=>'form-control')) !!}</td>
</tr>

<tr>
  <td colspan="4">{!! Form::submit('Simpan', array('class'=>'btn btn-success')) !!} </td>
</tr>

</table>

{!! Form::close() !!}
</div>
</div>
@endsection