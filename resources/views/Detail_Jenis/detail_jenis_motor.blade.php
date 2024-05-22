<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SETOR</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <style>
    body{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<img style="width:100px" src="{{asset('/asset/image/1.png')}}"> 
        <div class="container-fluid">
        <a class="navbar-brand" href="home">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="menupelanggan">Customer</a>  
              <a class="nav-item nav-link" href="motor">Motor</a> 
              <a class="nav-item nav-link" href="jenismotor">Informasi Motor</a> 
              <a class="nav-item nav-link" href="transaksi">Transaksi</a>
            </div>
          </div>
        </div>
      </nav>
      
      
      <div class="container">
    <div class="jumbotron" style="margin-top: 5vh">
    <h2 style="text-align: center">Form Informasi Motor</h2><br>
      <br>
      {!! Form::open(array(
        'method'=>'POST',
        'class'=>'container','url'=>'tambahdetailmotor')) !!}
        
        <table>

        <div class="panel-body">

          <tr>
            <td>{!! Form::label('id_jenis_motor', 'Nama Motor') !!}</td>
            <td> : &nbsp;</td> 

            <td><select name="id_jenis_motor" class="form-control">
      @foreach ($jenis_motor as $item)
      <option value="{{$item->id_jenis_motor}}">{{$item->nama_motor}}</option>
      @endforeach --}}
    </select></td>
          </tr>

          <tr>
            <td>{!! Form::label('nopol', 'Nomor Polisi') !!}</td>
            <td> : </td>
            <td>{!! Form::text('nopol', '',array('class'=>'form-control')) !!}</td>
          </tr>

          <tr>
            <td>{!! Form::label('warna', 'Warna Motor') !!}</td>
            <td> : </td>
            <td>{!! Form::text('warna', '',array('class'=>'form-control')) !!}</td>
          </tr>

          <tr>
            <td>{!! Form::label('tglstnk', 'Masa Aktif STNK') !!}</td>
            <td> : </td>
            <td>{!! Form::date('tglstnk', '',array('class'=>'form-control')) !!}</td>
          </tr>

          <tr>
            <td>{!! Form::label('status', 'Kondisi Motor') !!}</td>
            <td> : </td>
            <td>{!! Form::text('status', '',array('class'=>'form-control')) !!}</td>
          </tr>

          <tr>
            <td colspan="4">{!! Form::submit('Simpan', array('class'=>'btn btn-success')) !!}  <a href="detailmotor" class="btn btn-primary">Lihat Data</a></td>
          </tr>

        </table>

      {!! Form::close() !!}
    </div>
  </div>
</body>
</html>