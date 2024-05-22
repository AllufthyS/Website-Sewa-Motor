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
    <h2 style="text-align: center">Form Jenis Motor</h2><br>
      <br>
      {!! Form::open(array(
        'method'=>'POST',
        'class'=>'container','url'=>'tambahmotor')) !!}
        
        <table>

        <div class="panel-body">

          <tr>
            <td>{!! Form::label('motor', 'Nama Motor') !!}</td>
            <td> : &nbsp;</td>
            <td>{!! Form::text('motor', '',array('class'=>'form-control')) !!}</td>
          </tr>

          <tr>
            <td>{!! Form::label('harga_sewa', 'Harga Sewa') !!}</td>
            <td> : </td>
            <td>{!! Form::text('harga_sewa', '',array('class'=>'form-control')) !!}</td>
          </tr>

          <tr>
            <td colspan="4">{!! Form::submit('Simpan', array('class'=>'btn btn-success')) !!}  <a href="read_motor" class="btn btn-primary">Lihat Data</a></td>
          </tr>

        </table>

      {!! Form::close() !!}
    </div>
  </div>
</body>
</html>