<!DOCTYPE html>
<html lang="en">
@if(isset(Auth::user()->email)&&Auth::user()->type=='admin')

@else
  <script>window.location = "/admin";</script>
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
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/admin/validation') }}">
              <p>Espace Validation</p>
            </a>
          </li>
          <li class="nav-item ">
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
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Entreprises</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">

            </form>
            <ul class="navbar-nav">

              <li>
                <a href="{{ url('/main/logout') }}">
                  Logout
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
                  <h4 class="card-title ">demandes de  Validation</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">

                      <th>
                        Etudiant
                      </th>
                      <th>
                        Mail de l'etudiant
                      </th>
                      <th>
                      Sujet
                      </th>
                      <th>
                        Domaine
                      </th>
                      <th>
                        Enseignant
                      </th>
                      </thead>

                      <tbody>
                      @foreach($Stageuser as $stageuser)

                        @php

                          $user=App\User::find($stageuser->user_id);

                          $stage=App\Stage::find($stageuser->stage_id);



                        @endphp


                        <tr>
                          <td>
                            {{$user->firstname}} {{$user->lastname}}
                          </td>
                          <td>
                            {{$user->email}}
                          </td>

                          <td>
                            {{$stage->title}}
                          </td>
                          <td>
                            {{$stage->domaine}}
                          </td>
                          <td>
                            @php

                              $enseignants=App\User::where('type','=','enseignant');
                            @endphp
                            <a  title="" ><button class=" btn-outline-success btn-sm" onclick=window.open("{{$stageuser->stage_id}}/{{$stageuser->user_id}}/affectation","_blank","toolbar=yes,top=500,left=500,width=600,height=600,addressbar=no")>Choisir Enseignant</button></a>

                          </td>

                        </tr>

                      @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>








            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Etat de  Validation</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">

                      <th>
                        Etudiant
                      </th>
                      <th>
                        Mail de l'etudiant
                      </th>
                      <th>
                        Sujet
                      </th>
                      <th>
                        Domaine
                      </th>
                      <th>
                        Enseignant
                      </th>
                      <th>
                        Etat
                      </th>
                      </thead>

                      <tbody>
                      @foreach($StageState as $stageuser)

                        @php

                          $user=App\User::find($stageuser->user_id);

                          $stage=App\Stage::find($stageuser->stage_id);

                          $ens=App\User::find($stageuser->validator_id);



                        @endphp


                        <tr>
                          <td>
                            {{$user->firstname}} {{$user->lastname}}
                          </td>
                          <td>
                            {{$user->email}}
                          </td>

                          <td>
                            {{$stage->title}}
                          </td>
                          <td>
                            {{$stage->domaine}}
                          </td>
                          <td>
                            {{$ens->email}}
                          </td>
                          <td>
                            {{$stageuser->validation}}
                          </td>

                        </tr>

                      @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
</body>

</html>