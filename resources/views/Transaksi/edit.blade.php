<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SETOR</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
    <h2 style="text-align: center">Form Sewa Motor</h2><br>
      <br>
      {!! Form::open(array(
        'method'=>'POST',
        'class'=>'container','url'=>'/prosesupdatesewa')) !!}
       <input type="text" name="id_penyewaan" value="{{$penyewaan->id_penyewaan}}" hidden id=""> 
        <table>

        <div class="panel-body">
        <tr>
            <td>{!! Form::label('pelanggan', 'Nama Customer') !!}</td>
            <td> : &nbsp;</td> 

            <td><select name="pelanggan" class="form-control">
      <option value="{{$penyewaan->id_customer}}">{{$penyewaan->nama}}</option>
    </select></td>
          </tr>

        <tr>
            <td>{!! Form::label('jenis_motor', 'Nama Motor') !!}</td>
            <td> : &nbsp;</td> 

            <td><select name="jenis_motor" class="form-control">
            <option value="{{$penyewaan->id_jenis_motor}}">{{$penyewaan->nama_motor}}</option>
                   
    </select></td>
          </tr>

          <tr>
            <td>{!! Form::label('harga', 'Harga Sewa') !!}</td>
            <td> : &nbsp;</td> 

            <td><select name="harga" class="form-control">
            <option value="{{$penyewaan->harga_sewa}}">{{$penyewaan->harga_sewa}}</option>
    </select></td>
    
          </tr>

        <tr>
            <td>{!! Form::label('tglsewa', 'Tanggal Sewa') !!}</td>
            <td> : </td>
            <td>{!! Form::date('tglsewa', 'Tanggal Sewa') !!}</td>
          </tr>

          <tr>
            <td>{!! Form::label('tglkembali', 'Tanggal Kembali') !!}</td>
            <td> : </td>
            <td>{!! Form::date('tglkembali',  'Tanggal Kembali') !!}</td>
          </tr>

          <tr>
            <td colspan="4">{!! Form::submit('Update', array('class'=>'btn btn-success')) !!}  <a href="/UAS_project/public/readsewa" class="btn btn-primary">Batal</a></td>
          </tr>

        </table>

      {!! Form::close() !!}
    </div>
  </div>
</body>
</html>