<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Esprit-Stage
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('template/assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('template/assets/demo/demo.css') }}" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <style>

    /* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
    /* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
    .styled-select {
      background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
      height: 29px;
      overflow: hidden;
      width: 240px;
    }

    .styled-select select {
      background: transparent;
      border: none;
      font-size: 14px;
      height: 29px;
      padding: 5px; /* If you add too much padding here, the options won't show in IE */
      width: 268px;
    }



    /* -------------------- Rounded Corners */


    .semi-square {
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    /* -------------------- Colors: Background */
    .slate   { background-color: #ddd; }
    .green   { background-color: #779126; }
    .blue    { background-color: #3b8ec2; }
    .yellow  { background-color: #eec111; }
    .black   { background-color: #ff0000; }

    /* -------------------- Colors: Text */
    .slate select   { color: #000; }
    .green select   { color: #fff; }
    .blue select    { color: #000; }
    .yellow select  { color: #000; }
    .black select   { color: #000; }
    /* Add a black background color to the top navigation */
    .topnav {
      background-color: #333;
      overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }

  </style>
</head>

<body class="">
<div class="wrapper ">
  <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a class="simple-text logo-normal">
        Administration
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">

        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/newCompanys') }}">
            <p>Demandes De Nouvelles Entreprises</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/companys') }}">
            <p>Liste Des Entreprises</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/validation') }}">
            <p>Espace Validation</p>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin/uploadDocumentation') }}">
            <p>Documantation</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/users') }}">
            <p>
              Utilisateurs
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/profile') }}">
            <p>Profile</p>
          </a>
        </li>
      </ul>
    </div>
  </div>


  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute ">
      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand">Bienvenue à l'Espace Etudiant</a>
        </div>


        <div class="collapse navbar-collapse justify-content-end">

          <ul class="navbar-nav">


            <li class="nav-item">
              <a class="nav-link" href="{{ url('/main/logout') }}">
                <i>logout</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar ------------------------------------------------------------------------------------------------------------->





    <div class="content">
      <div class="container-fluid">

        {!! Form::open(array('url'=>'insertJournal','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!}
        <div class="col-md-12">
          <div class="card card-profile">

            <div class="card-body">
              <h3 class="card-category text-gray">Journal de Stage</h3>
              <h4 class="card-title">Veuillez choisir un fichier</h4>

              <input type="hidden" name="_token" value="{{ csrf_token() }}">



              <input type="file"  name="journal" class="filename">
              @if ($errors->has('journal')) <p class="help-block">{{ $errors->first('journal') }}</p> @endif
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger btn-round">Submit</button>
                </div>
              </div>
            </div>

          </div>

        </div>
        {!! Form::close() !!}


        {!! Form::open(array('url'=>'insertAttestation','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!}
        <div class="col-md-12">
          <div class="card card-profile">

            <div class="card-body">
              <h3 class="card-category text-gray">Attestattion d'assurance</h3>
              <h4 class="card-title">Veuillez choisir un fichier</h4>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">



              <input type="file"  name="attestation" class="filename">
              @if ($errors->has('attestation')) <p class="help-block">{{ $errors->first('attestation') }}</p> @endif
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger btn-round">Submit</button>
                </div>
              </div>
            </div>

          </div>

        </div>
        {!! Form::close() !!}
      </div>
    </div>













    <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://creative-tim.com/presentation">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
              document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
      </div>
    </footer>
  </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('template/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('/assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('/assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/assets/js/material-dashboard.min.js?v=2.1.0') }}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('/assets/demo/demo.js') }}"></script>

<script>
    $('select').on('change', function() {
        var convFr = document.getElementById("convFr");
        if(this.value=="fr"||this.value=="autre"){
            convFr.style.display ="block";
        }
        else{
            convFr.style.display ="none";
        }
    })
</script>
<script>
    function download(){
        var currentLocation = window.location;

window.location.href="{{"http://127.0.0.1/test/storage/demande.docx"}}";


    }


</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
          @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
</body>

</html>