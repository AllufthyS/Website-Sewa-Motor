<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>@yield('title')</title>
    <style type="text/css">
        body
        {
          background-image: url('asset/image/2.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;	
        }</style>
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
      @yield('content')
      <div class="p-5 text-center bg-image">
    
      <div class="text-white">

	<p><h2> HI SETOR HERE </h2></p>
 <p><h4> lagi cari tempat persewaan motor yang murah, aman dan berpengalaman ?<h4></p>
 <p><h3> maka disinilah tempatnya<h3></p>
  <br>
    <br>
    <br>
    <br>
  <a class="btn btn-outline-light btn-lg" href="menupelanggan" role="button"
              >SEWA SEKARANG</a>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <p><tr>
    <center><p> <h5>Persewaan Motor Surabaya - Rent_Motocycle/SBY</h5></p><center>
    <center><p><h5>Jalan Basuki Rahmat No 11, Surabaya
        Kec Genteng
        60271
      </h5></p><center></tr></p>
      
     <center> <p><h5> 
        SURABAYA
        JAWA TIMUR
        INDONESIA<h5></p><center>
      
        </div>
        </div>
  </body>

</html>