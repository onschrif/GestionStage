<!DOCTYPE html>
<html lang="en">
@if(isset(Auth::user()->email)&&Auth::user()->type=='enseignant')

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
        Esprit Stage
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">

        <li class="nav-item active ">
          <a class="nav-link" href="{{ url('/main/EspaceEnseignant/internshipValidation') }}">
            <p>Espace Validation</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/main/EspaceEnseignant/addInternship') }}">
            <p>Ajouter Stage</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/main/EspaceEnseignant/internshipsRequests') }}">
            <p>Candidatures</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('main/EspaceEnseignant/internshipList') }}">
            <p>Stages</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('main/EspaceEnseignant/profile') }}">
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
          <a class="navbar-brand" href="#pablo">Bienvenue à l'Espace Enseignant</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
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
        <div class="row">
          <div class="col-md-11">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Espace Validation</h4>
                <p class="card-category">Veuillez Valider Soigneusement Ces Etudiants </p>
              </div>
              <div class="card-body">

                <table class="table">
                  <thead class=" text-primary">

                  <th>
                    Stage
                  </th>
                  <th>
                    Etudiant
                  </th>
                  <th>
                    Mail de l'etudiant
                  </th>
                  <th>
                    Journal de stage
                  </th>
                  <th>
                    Etat
                  </th>
                  <th>
                    Action
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
            {{$stage->title}}
          </td>
          <td>
            {{$user->firstname}} {{$user->lastname}}
          </td>
          <td>
            {{$user->email}}
          </td>
            <td>
              <a href="{{ url('/main/EspaceEnseignant/'.$stage->id.'/'. $user->id .'/downloadJournal') }}" title="" ><button class="btn btn-dark btn-sm"><li><i  aria-hidden="true"></i>Télécharger</li></button></a>
              {{$stage->journal}}
            </td>
          <form method="POST" action='validation/{{$stage->id}}/{{$user->id }}'>
            <td>
              <select  name="validation">
                <option value="non validé">non validé</option>
                <option value="validé">validé</option>
              </select>
            </td>

            <td>

                    {{ csrf_field() }}
              <button class="btn btn-outline-success btn-sm" > submit </button>


            </td>
          </form>
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