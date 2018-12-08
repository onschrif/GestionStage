<!DOCTYPE html>
<html lang="en">
@if(isset(Auth::user()->email)&&Auth::user()->type=='etudiant')

@else
  <script>window.location = "/esprit";</script>
@endif
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
  <div class="sidebar" data-color="danger" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Company
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">

        <li class="nav-item active ">
          <a class="nav-link" href="{{ url('/main/EspaceEtudiant/Documentation') }}">
            <p>Documentation</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/main/EspaceEtudiant/addInternship') }}">
            <p>proposer Stage</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/main/EspaceEtudiant/internshipsRequests') }}">
            <p>Candidatures</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('main/EspaceEtudiant/internshipList') }}">
            <p>Stages</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('main/EspaceEtudiant/profileEtud') }}">
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link" href="{{ url('/main/EspaceEtudiant/Validation') }}">
            <p>Espace Validation</p>
          </a>
        </li>

      </ul>
    </div>
  </div>


  <div class="main-panel">
    <div class="topnav">

      <a  href="#demande">Demande De Stage</a>
      <a href="#convention">Convention De Stage</a>
      <a href="#lettre">Lettre D'Affectation</a>
      <a href="#journal">Journal De Stage</a>
      <a href="#attestation">Attestation De Stage</a>
      <a href="#assurance">Assurance</a>
    </div>

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

        <form method="POST" action="/main/EspaceEtudiant/demandeStage">
          {{ csrf_field() }}
        <div class="row">
          <div class="col-md-11">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title" id="demande">Demande de stage </h4>
                <p class="card-category">Pour avoir votre <b>demande de stage </b> veuillez cliquer ci-dessous</p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Prénom</label>
                      <input type="text" class="form-control" name="firstName" value="{{$user->firstname}}" disabled="true">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nom</label>
                      <input type="text" class="form-control" name="lastName" value="{{$user->lastname}}" disabled="true">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Classe</label>
                      <input type="text" class="form-control" name="class" value="{{$user->class}}" disabled="true">

                    </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <button type="submit" class="btn btn-danger pull-center">Demande de Stage</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        </form>





          <form method="POST" action="convention" >
            {{ csrf_field() }}
        <div class="row">
          <div class="col-md-11">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title" id="convention">Convention de stage</h4>
                <p class="card-category">Pour avoir votre <b>convention de stage </b> veuillez cliquer ci-dessous</p>
              </div>
              <div class="card-body">


                <div class="row">
                  <div class="col-md-6">

                      <div class="form-group">
                        <label class="bmd-label-floating">Nom de l'Entreprise</label>
                        <input type="text" class="form-control"  name="entreprise" required>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Numéro de Téléphone</label>
                      <input type="text" class="form-control"  name="numTel" required>
                    </div>
                  </div>
                </div>
                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">adresse de l'Entreprise</label>
                        <input type="text" class="form-control"  name="address" required>
                      </div>
                    </div>
                  </div>




                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nom du Représentant</label>
                      <input type="text" class="form-control"  name="repLastName" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Prénom du Représentant</label>
                      <input type="text" class="form-control"  name="repFirstName" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Adresse E-Mail Représentant</label>
                      <input type="text" class="form-control"  name="mailRep" required>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date Début</label>
                      <input type="date" class="form-control"  name="dateD" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date Fin</label>
                      <input type="date" class="form-control"  name="dateF" required>
                    </div>
                  </div>
                </div>
                <br><br>




                <div style="display:none" id="convFr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">N° SIREN ou SIRET</label>
                      <input type="text" class="form-control"  name="numSiren" required>
                    </div>
                  </div>

                </div>


                <div class="row" >
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date de naissance</label>
                      <input type="date" class="form-control"  name="dateN" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">lieu de naissance</label>
                      <input type="text" class="form-control"  name="lieu" required>
                    </div>
                  </div>
                </div>


                  <div class="row" >
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nationalité</label>
                        <input type="text" class="form-control"  name="nationalite" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Numero de Téléphone de l'étudiant</label>
                        <input type="text" class="form-control"  name="numTelE" required>
                      </div>
                    </div>

                  </div>

                  <div class="row" >
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Adresse de l'étudiant</label>
                        <input type="text" class="form-control"  name="addressE" required>
                      </div>
                    </div>


                  </div>
                </div>

               <br><br>
                <div class="row">
                  <div class="col-md-6">
                    <label class="bmd-label-floating">Veuillez sélectionner le pays de votre stage</label>
                  </div>
                  <div class="col-md-6">
                    <div class="styled-select blue semi-square">

                      <select name="select">
                        <option value="tn"selected>Stage En Tunisie</option>
                        <option value="fr">Stage En France</option>
                        <option value="autre">Autre Pays</option>
                      </select>
                  </div>
                </div>
                </div>

              </div>


              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-center">Convention de Stage</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        </form>



        <form method="POST" action="/main/EspaceEtudiant/affectation" >
          {{ csrf_field() }}
        <div class="row">
          <div class="col-md-11">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title" id="lettre">Lettre D'Affectation</h4>
                <p class="card-category">Pour avoir votre <b>lettre d'affectation</b> veuillez cliquer ci-dessous</p>
              </div>
              <div class="card-body">


                <div class="row">
                  <div class="col-md-12">

                    <div class="form-group">
                      <label class="bmd-label-floating">Nom de l'Entreprise</label>
                      <input type="text" class="form-control"  name="entreprise" required>
                    </div>
                  </div>

                </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nom</label>
                        <input type="text" class="form-control" name="firstName" value="{{$user->firstname}}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Prénom</label>
                        <input type="text" class="form-control" name="lastName" value="{{$user->lastname}}" disabled>
                      </div>
                    </div>
                  </div>



                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date Début</label>
                      <input type="date" class="form-control"  name="dateD" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date Fin</label>
                      <input type="date" class="form-control"  name="dateF" required>
                    </div>
                  </div>
                </div>



              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-center">Lettre D'Affectation</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        </form>






        <form method="POST" action="/main/EspaceEtudiant/journal" >
          {{ csrf_field() }}
        <div class="row">
          <div class="col-md-11">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title" id="journal">Journal De Stage</h4>
                <p class="card-category">Pour Télécharger votre <b>Journal</b> veuillez cliquer ci-dessous</p>
              </div>
              <div class="card-body">


              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-center">Télécharger Journal</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        </form>


        <form method="POST" action="/main/EspaceEtudiant/attestation" >
          {{ csrf_field() }}
        <div class="row">
          <div class="col-md-11">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title" id="attestation">Attestation de Stage</h4>
                <p class="card-category">Pour Télécharger votre <b>Attestation de Stage</b> veuillez cliquer ci-dessous</p>
              </div>
              <div class="card-body">


              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-center">Télécharger Attestation de Stage</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        </form>

        <form method="POST" action="/main/EspaceEtudiant/assurance" >
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" id="assurance">Assurance</h4>
                  <p class="card-category">Pour Télécharger i'<b>Assurance</b> veuillez cliquer ci-dessous</p>
                </div>
                <div class="card-body">


                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <button type="submit" class="btn btn-danger pull-center">Télécharger Assurance</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>
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