
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>@yield('title')</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .navbar{
    background: linear-gradient(to bottom, #0000ff 0%, #0099ff 100%);
  }
  * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  border:1px solid black;
  margin:10px
}

/* Clearfix (clear floats) */
/* .row::after {
  content: "";
  clear: both;
  display: table;
} */
  </style>

</head>


<body class="data-spy="scroll" data-target=".navbar" data-offset="50"">



  <nav class="navbar navbar-expand-lg navbar-dark py-2 text-white fixed-top" style="border:1px solid black; background-color : transparent">

    <div class="container">


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-center collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav  font-weight-bold ">
          <a class="navbar-brand" href="/" style="width:60px; height:50px">
            <img src="/img/logoPPMU2.png" alt="Logo" style="width:100%; height:40px;" class="rounded img-thumbnail mb-4 container">
          </a>
          <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <a class="nav-item nav-link px-3" href="#kegiatan">KEGIATAN</a>
          <a class="nav-item nav-link px-3" href="#profil">PROFIL <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link px-3" href="#artikel" rel="page-scroll">ARTIKEL</a>
          <a class="nav-item nav-link px-3" href="#uks" rel="page-scrolls">U K S</a>
          <a class="nav-item nav-link px-3" href="#organisasi" rel="page-scroll">ORGANISASI</a>
          <a class="nav-item nav-link px-3" href="#galeri">GALERI</a>
          <a class="nav-item nav-link px-3" href="#about">ABOUT</a>

        </div>
      </div>
    </div>
      @if(Auth::user())
      <form class="nav-item" action="/logout" method="post" style="padding-top:9px">
        @csrf
        <div class="row float-right">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <button type="submit" name="button">Logout</button>
          </div>
        </div>

      </form>
      @endif

    </div>
  </nav>



  @yield('content')

 \

</body>


</html>
