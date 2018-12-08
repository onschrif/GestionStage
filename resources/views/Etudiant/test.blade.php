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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script>
        window.onload = function() {
        };
        $(function(){

        });
        $(document).ready(function() {
            window.history.pushState('validation', 'Esprit', '/');
        });
    </script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('main/EspaceEtudiant/profileEtud') }}">
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item  active">
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

                    <a class="navbar-brand" href="#pablo">Bienvenue à l'Espace Etudiant</a>
                </div>


                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">


                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/main/logout') }}">
                                <i class="material-icons">person</i>
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
                                <h4 class="card-title ">Espace Validation</h4>
                                <p class="card-category">Veuillez Remplir Votre Fiche Validation</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">

                                        <th>
                                            Stage
                                        </th>
                                        <th>
                                            Date Fin De Stage
                                        </th>
                                        <th>
                                            Etat Validation
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                        </thead>

                                        <tbody>


                                        @foreach($res as $res)

                                            <div class="container">

                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h2>Fiche Validation</h2>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="bmd-label-floating">Nom de l'étudiant</label>
                                                                                <input disabled type="text" class="form-control " name="nom" value="{{$res->user_id}}">
                                                                            </div>
                                                                        </div>

                                                                    </div>




                                                                </form>









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

                                            </div>

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