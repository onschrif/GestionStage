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

  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<style type="text/css">
  .help-block{
    color: red;
  }
</style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Esprit Stage
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item  ">
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
          <li class="nav-item active">
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
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <p class="card-category">Veuillez Modifier Votre Profile</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="updateprofile">
                    {{ csrf_field() }}

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" disabled value="{{$user->email}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" >Nom</label>
                          <input type="text" class="form-control" name="firstname" disabled value="{{$user->firstname}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Prenom</label>
                          <input type="text" class="form-control" name="lastname" disabled value="{{$user->lastname}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Classe</label>
                          <input type="text" class="form-control" name="class" disabled value="{{$user->class}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Numéro Tel</label>
                          <input type="text" class="form-control" name="telNumber" value="{{$user->telNumber}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Compétences</label>
                          <input type="text" class="form-control" name="skills" value="{{$user->skills}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ancien Mot De Passe</label>
                          <input type="password" class="form-control" name="oldPassword" value="">
                        </div>

                      </div>


                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nouveau Mot De Passe</label>
                          <input type="password" class="form-control" name="password" value="">
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Confirmer Mot De Passe</label>
                          <input type="password" class="form-control" name="confirmPassword" value="">
                        </div>

                      </div>

                    </div>

                    <button type="submit" class="btn btn-danger pull-right">Modifier</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>


          {!! Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!}
            <div class="col-md-12">
              <div class="card card-profile">

                <div class="card-body">
                  <h3 class="card-category text-gray">Curriculum Vitae</h3>
                  <h4 class="card-title">Veuillez Mettre votre CV</h4>
                  <p class="card-description">
                    Votre Curriculum Vitae est avant tout votre carte de visite professionnelle.
                    N’oubliez pas que pour chaque offre d’emploi, l’employeur reçoit des dizaines de CV. Il est donc important d’y apporter un soin tout particulier afin de convaincre le recruteur que vous êtes la personne idéale pour la fonction vacante. Vous devez être clair et précis. </p>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">



                  <input type="file"  name="filenam" class="filename">
                  @if ($errors->has('filenam')) <p class="help-block">{{ $errors->first('filenam') }}</p> @endif
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


        </div>
      </div>

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




</body>

</html>