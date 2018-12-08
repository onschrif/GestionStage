<!DOCTYPE html>
<html lang="en">
@if(isset(Auth::user()->email)&&Auth::user()->type=='responsable')

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

          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/main/EspaceResponsable/addCompany') }}">

              <p>Ajouter Entreprise</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/main/EspaceResponsable/addInternship') }}">

              <p>Ajouter Stage</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/main/EspaceResponsable/internshipsRequests') }}">
              <p>Candidatures</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('main/EspaceResponsable/internshipList') }}">
              <p>Stages</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('main/EspaceResponsable/profile') }}">
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
            <a class="navbar-brand" href="#pablo">Bienvenue à l'Espace Responsable</a>
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
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Liste Des Stages</h4>
                  <p class="card-category">Veuillez Trouver Ci-Dessous Les Stages Que Vous Avez Proposé</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">

                      <th>
                        Titre
                      </th>
                      <th>
                        Date Début
                      </th>
                      <th>
                        Date Fin
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Type
                      </th>
                      <th>
                        Domaine
                      </th>
                      <th>
                        Action
                      </th>
                      </thead>

                      <tbody>

                      @foreach($internships as $internship)
                        <tr>
                          <td>
                            {{$internship->title}}
                          </td>
                          <td>
                            {{$internship->startingDate}}
                          </td>
                          <td>
                            {{$internship->endingDate}}
                          </td>
                          <td>
                            {{$internship->description}}
                          </td>
                          <td>
                            {{$internship->type}}
                          </td>
                          <td>
                            {{$internship->domaine}}
                          </td>
                          <td>
                            <a href="{{ url('/main/EspaceResponsable/' . $internship->id . '/updateInternship') }}" title="Update company" ><button class="btn btn-warning btn-sm"><li><i aria-hidden="true"></i> Modifier</li></button></a>
                            <a href="{{ url('/main/EspaceResponsable/' . $internship->id . '/deleteInternship') }}" title="Delete company" onclick="return confirm(&quot;Confirm delete?&quot;)"><button class="btn btn-danger btn-sm"><li><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</li></button></a>

                          </td>
                        </tr>

                      @endforeach

                      </tbody>
                    </table>
                    <div class="pagination-wrapper">{!! $internships->appends(['search' => Request::get('search')])->render() !!} </div>

                  </div>
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