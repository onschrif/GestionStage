


<!DOCTYPE html>
<html>
<head><link rel="SHORTCUT ICON" href="images/espr.ico" /><title>

    </title>
    <link href="Contents/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="Contents/Css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="Contents/Css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Contents/jquery/css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet"
          type="text/css" />
    <script src="Contents/jquery/js/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="Contents/jquery/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript">

    </script>
    <style type="text/css">

        .nav-pills > li.active > a,
        .nav-pills > li.active > a:hover,
        .nav-pills > li.active > a:focus {
            color: #ffffff;
            background-color:  #D00000 ;}
        .style1
        {
            color: #000000;
        }
    </style>


    <style>
        html, body
        {background-color:	#A8A8A8   ;
            height: 100%;
        }
        a, a:visited {

            color:#000000;
        }
        #bannerImg {float:left;}
        footer
        {
            color: #666;
            background: #222;
            padding: 17px 0 18px 0;
            border-top: 1px solid #000;
        }
        footer a
        {
            color: #999;
        }
        footer a:hover
        {
            color: #efefef;
        }
        .wrapper
        {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: 0 auto -63px;
        }
        .push
        {
            height: 63px;
        }
        /* not required for sticky footer; just pushes hero down a bit */
        .wrapper > .container
        {
            padding-top: 60px;
        }
    </style>
</head>
<body>
<form method="post" action="./default.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
    <div class="aspNetHidden">
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEyMDU3MTYxOTIPZBYCZg9kFgICAw9kFgICBQ8PFgIeBFRleHQFCTIwMTcvMjAxOGRkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYBBRJjdGwwMCRJbWFnZUJ1dHRvbjFw6swH8QMO12cfj7ROnYg08NSyfq4QpxTscCDz/noifg==" />
    </div>

    <div class="container">
        =
        <div class="row modal-header">
            <div class="container">
                <span id="bannerImg"> <input type="image" name="ctl00$ImageButton1" id="ImageButton1" class="img-responsive " src="Contents/Img/logo.png" /></span>
                <center> <span id="Label1" color="#680000" style="color:#CC0000;font-weight:bold;font-size: large">Cours du Jour</span></center>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <span id="ANNEEUN" color="#680000" style="text-align: right; font-weight: 900; font-style: italic">2017/2018</span>
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a href="Accueil.aspx">Accueil</a> </li>
                    <li><a href="{{ url('/esprit') }}">Se Connecter</a></li>
                </ul>
            </div>

        </div>



        <div class="container">
            <div class="container">
                <div class="row">



                    <div class="row">
                        <div class="mainWrapper">
                            <div class="wrapper">

                                <div class="container">
                                    <script>
                                        $(function () {
                                            $("#tabs").tabs();
                                        });
                                    </script>
                                    <div id="tabs">
                                        <div class="ui-tabs">


                                            <div id="tabs-1">
                                                <div id="ContentPlaceHolder1_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ContentPlaceHolder1_Button1&#39;)">


                                                    <div class="row" >
                                                        <div class="col-sm-3 col-md-6 col-lg-6">
                                                            <div class="well-lg" >
                                                                <div class="form-signin"  align="center">



                                                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                                                        {{ csrf_field() }}

                                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                            <label for="name" >Name</label>

                                                                            <div >
                                                                                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autofocus>

                                                                                @if ($errors->has('name'))
                                                                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                            <label for="email" >E-Mail Address</label>

                                                                            <div >
                                                                                <input id="email" type="email"  name="email" value="{{ old('email') }}" required>

                                                                                @if ($errors->has('email'))
                                                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                            <label for="password" >Password</label>

                                                                            <div >
                                                                                <input id="password" type="password"  name="password" required>

                                                                                @if ($errors->has('password'))
                                                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div >
                                                                            <label for="password-confirm" >Confirm Password</label>

                                                                            <div >
                                                                                <input id="password-confirm" type="password" name="password_confirmation" required>
                                                                            </div>
                                                                        </div>

                                                                        <div >
                                                                            <div >
                                                                                <button type="submit" class="btn btn-primary">
                                                                                    Register
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>


                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>









                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="push">
        </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>

    <div class="container">
        <div class="modal-footer">
            <p class="text-center">
                © 2018 Esprit, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>

        </div>
    </div>





</form>
<script src="../Contents/CSS3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../Contents/CSS3/js/bootstrap.js" type="text/javascript"></script>


</body>
</html>





<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>