


<!DOCTYPE html>
<html>
<head><link rel="SHORTCUT ICON" href="images/espr.ico" /><title>

</title>
    <link href="{{ URL::asset('/') }}Contents/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/') }}Contents/Css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/') }}Contents/Css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/') }}Contents/jquery/css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet"
        type="text/css" />
    <script src="{{ URL::asset('/') }}Contents/jquery/js/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="{{ URL::asset('/') }}Contents/jquery/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript">
    
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






@if(isset(Auth::user()->email))
    <script>window.location="/main/redirect";</script>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<script src="/ESPONLINE/WebResource.axd?d=PjaBCXvDI33DEOGjDgbkMQ-ZEAuxA9Eeeq8NVgHVM4XlWkUzMTNi6xngD2QtWyAA_OUfW6DIKiFfjP7TbjyucIZ4fSOJxl5YIuBCK12DZ_A1&amp;t=636476158140000000" type="text/javascript"></script>


<script src="/ESPONLINE/ScriptResource.axd?d=c1KN5ni3owG_TXwEFBusRL1AqlRtyCrl9ozNZcJ60rJ56ROuOy5dZA4IUdcOk5nvYnVPVvkNDISs--P5pWcoKP7-u0ERIQDBujpxZkwm8HFPBGYKKkdnZEOjz3QGeo-XOWwYbN5Al9dda62Y7W4GAiruZbe3K9-6LveqBPy-_yY1&amp;t=ffffffffa83fb62f" type="text/javascript"></script>
<script src="/ESPONLINE/ScriptResource.axd?d=t-ZskWsbvxrh8GLrKh8h6HAdQTtfBoX1HiQjKPjdUFR_nzX8B4s2ed96zt7zAf-yGJPuP1mqxUDql8ZBbLMno1PXrBTh_Z2YNTFJIPX7Haseqo1Fxfpyx5M2VkYjREGO5l_0VwUyqBZ-tCFG7H_YkA2&amp;t=34a51159" type="text/javascript"></script>
<script type="text/javascript">
</script>

<script src="/ESPONLINE/ScriptResource.axd?d=N-c1qPMu0JsOskSoxTSwT40_xFmQpk20Qbo-n0i9S_pro4PxoJnm-4rB2KfVKERKRWPg9FgC6xzVDqNGD8HRJmB45fDzb2Wt3UJEwQRRmYRuQ6ITnltblTnYi7ZWQ07LeUGOwv83SBvYurrbSA_a7w2&amp;t=34a51159" type="text/javascript"></script>
<script type="text/javascript">

</script>

    <div class="container">
     <script type="text/javascript">
         $(document).ready(function () {
             var url = window.location.pathname;
             var substr = url.split('/');
             var urlaspx = substr[substr.length - 1];
             $('.nav').find('.active').removeClass('active');
             $('.nav li a').each(function () {
                 if (this.href.indexOf(urlaspx) >= 0) {
                     $(this).parent().addClass('active');
                 }
             });
         });
    </script>
        <div class="row modal-header">
            <div class="container">
                 <span id="bannerImg"> <input type="image" name="ctl00$ImageButton1" id="ImageButton1" class="img-responsive " src="{{ URL::asset('/') }}Contents/Img/logo.png" /></span>
                     <center> <span id="Label1" color="#680000" style="color:#CC0000;font-weight:bold;font-size: large">Stages</span></center>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <span id="ANNEEUN" color="#680000" style="text-align: right; font-weight: 900;">2018/2019</span>
                    <ul class="nav nav-pills pull-right">

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
                            <ul >                          
                                <li id="ContentPlaceHolder1_a1"><a href="#tabs-2" >Espace Etudiants</a></li>
                                <li id="ContentPlaceHolder1_a2"><a href="#tabs-3">Espace Enseignants</a></li>
                                <li id="ContentPlaceHolder1_a3"><a href="#tabs-1">Espace Entreprise</a></li>

                            </ul>

                            <div id="tabs-1">
                                <div id="ContentPlaceHolder1_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ContentPlaceHolder1_Button1&#39;)">
	
                               
                                <div class="row">
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <div class="well-lg">
                                            <div class="breadcrumb">
                                                <img   src="{{ URL::asset('/') }}Contents/Img/ens.jpg" width="300px" height="250px" />
                                                <h2 class="featurette-heading">
                                                    ESPRIT ... <span class="text-muted">Se Former autrement pour une nouvelle génération
                                                        d&#39;ingénieurs.</span></h2>
                                                
                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <div class="well-lg">
                                            <div class="form-signin">
                                                <div class="form-group">
                                                    <h2 class="form-signin-heading" style="color: #000000">
                                                        Espace Entreprise</h2>

                                                </div>


                                                <form method="post" action="{{ url('/main/checklogin') }}">
                                                    {{ csrf_field() }}
                                                <div id="Login_Entreprise">
                                                <span id="ContentPlaceHolder1_Label5" style="font-weight:bold;font-style:italic;">E-mail</span>
                                                <br />
                                                 <div class="form-group">
                                                    <input name="email" type="text" id="email" placeholder="votre Mail" style="height:35px;width:400px;" />

                                                     <br />
                                                     <span id="ContentPlaceHolder1_Label95" style="color:#990033;font-weight:bold;font-style:italic;">Mot de passe</span>
                                                     <input name="password" type="password" id="ContentPlaceHolder1_pass_parent" placeholder="Mot de passe" style="height:35px;width:400px;" />
                                                     <br />
                                                     <span id="ContentPlaceHolder1_RequiredFieldValidator1" class="text-danger" style="visibility:hidden;">Identifiant incorrect </span>

                                                     <br />
                                                             
                                                     <span id="ContentPlaceHolder1_RequiredFieldValidator2" class="text-danger" style="visibility:hidden;">Password incorrect</span>
                                                     <a href="#" onclick="Register_Entreprise()">s'inscrire</a>
                                                     <input name="type" type="hidden" id="type" value="responsable" style="height:35px;width:400px;" />
                                                 </div>

                                                <div class="form-group">

                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$Button1" value="Se Connecter" class="btn btn-lg btn-block" style="color:Black;background-color:#999999;width:400px;" />

                                                </div>
                                                <span id="ContentPlaceHolder1_Label1"></span>
                                                </div>
                                                </form>


                                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                                    {{ csrf_field() }}
                                                    <div id="Register_Entreprise" style="display: none;">



                                                        <div class="form-group">
                                                            <span id="ContentPlaceHolder1_Label5" style="font-weight:bold;font-style:italic;">Nom</span>
                                                            <br />
                                                            <input id="name" type="text" style="height:35px;width:400px;"  name="name" placeholder="Votre nom" required >

                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                            @endif


                                                            <br />

                                                            <span id="ContentPlaceHolder1_Label5" style="font-weight:bold;font-style:italic;">E-mail</span>
                                                            <br>
                                                            <input id="email" type="email" style="height:35px;width:400px;"  name="email" placeholder="Votre Mail" required >
                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                            @endif
                                                            <br />
                                                            <span id="ContentPlaceHolder1_Label95" style="color:#990033;font-weight:bold;font-style:italic;">Mot de passe</span>
                                                            <input id="password" type="password" name="password" placeholder="Mot de passe" style="height:35px;width:400px;" />
                                                            <br />
                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                            @endif

                                                            <span id="ContentPlaceHolder1_Label95" style="color:#990033;font-weight:bold;font-style:italic;">Rep Mot de passe</span>

                                                            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Mot de passe" style="height:35px;width:400px;" />

                                                            <span id="ContentPlaceHolder1_RequiredFieldValidator1" class="text-danger" style="visibility:hidden;">Identifiant incorrect </span>

                                                            <br />

                                                            <span id="ContentPlaceHolder1_RequiredFieldValidator2" class="text-danger" style="visibility:hidden;">Password incorrect</span>
                                                            <a href="#" onclick="Login_Entreprise()">Se Connceter</a>
                                                        </div>

                                                        <div class="form-group">

                                                            <input type="submit"  value="S'inscrire" class="btn btn-lg btn-block" style="color:Black;background-color:#999999;width:400px;" />

                                                        </div>
                                                        <span id="ContentPlaceHolder1_Label1"></span>
                                                    </div>

                                                </form>




                                                <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ContentPlaceHolder1$ScriptManager1', 'form1', [], [], [], 90, 'ctl00');
	//]]>
</script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
</div>
                            </div>





                                <div id="tabs-2">
                                <div id="ContentPlaceHolder1_Panel2" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ContentPlaceHolder1_Button3&#39;)">


                                <div class="row">
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <div class="well-lg">
                                            <div class="breadcrumb">
                                                <img   src="{{ URL::asset('/') }}Contents/Img/affiche_200613.jpg" width="290px" />
                                                <h2 class="featurette-heading">
                                                    ESPRIT ... <span class="text-muted">Se Former autrement pour une nouvelle génération
                                                        d&#39;ingénieurs.</span></h2>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <div class="well-lg">
                                            <div class="form-signin">
                                                <div class="form-group">
                                                    <h2 class="form-signin-heading" style="color: #000000">
                                                        Espace Etudiant</h2>
                                                    <p class="style1">
                                                        Protégez vos données personnelles Si vous utilisez un ordinateur public ou partagé,
                                                        assurez-vous de quitter le navigateur à la fin de votre session de travail.
                                                    </p>
                                                </div>
                                                <form method="post" action="{{ url('/main/checklogin') }}">
                                                    {{ csrf_field() }}
                                                <div id="Login_Etudiant">
                                                <span id="ContentPlaceHolder1_Label7" style="font-weight:bold;font-style:italic;">E-Mail</span>
                                                <br />
                                                <div class="form-group" >
                                                    <input name="email" type="text" id="ContentPlaceHolder1_TextBox3" placeholder="Votre Mail" style="height:35px;width:400px;" />
                                                    <br />
                                                    <span id="ContentPlaceHolder1_Label95" style="color:#990033;font-weight:bold;font-style:italic;">Mot de passe</span>
                                                    <input name="password" type="password" id="ContentPlaceHolder1_pass_parent" placeholder="Mot de passe" style="height:35px;width:400px;" />

                                                    <span id="ContentPlaceHolder1_RequiredFieldValidator3" class="text-danger" style="visibility:hidden;">Cin incorrect </span>
                                                        <br />
                                                    
                                                     
                                                    <span id="ContentPlaceHolder1_RequiredFieldValidator7" class="text-danger" style="visibility:hidden;">Mot de passe incorrect </span>

                                                    <input name="type" type="hidden" id="type" value="etudiant" style="height:35px;width:400px;" />
                                                </div>
                                                 
                                                <div class="form-group">
                                                    
                                                        <div class="form-group">
                                                   
                                                </div>
                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$Button3" value="Se Connecter" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$Button3&quot;, &quot;&quot;, true, &quot;EtudiantInfoGroup&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_Button3" class="btn btn-lg btn-block" style="color:Black;background-color:#666666;width:400px;" />
                                                </div>
                                                <span id="ContentPlaceHolder1_Label2"></span>
                                                </div>

                                            </form>




                                                <form method="post" action="{{ url('/sendMail') }}">
                                                    {{ csrf_field() }}
                                                <div id="Register_Etudiant" style="display: none;">
                                                    <span id="ContentPlaceHolder1_Label7" style="font-weight:bold;font-style:italic;">E-Mail</span>
                                                    <br />
                                                    <div class="form-group" >
                                                        <input name="email" type="text" id="email" placeholder="Votre Mail" style="height:35px;width:400px;" />
                                                        <br />

                                                        <span id="ContentPlaceHolder1_RequiredFieldValidator7" class="text-danger" style="visibility:hidden;">Mot de passe incorrect </span>

                                                        <a href="#" onclick="Login()">Se Connecter</a>
                                                    </div>

                                                    <div class="form-group">

                                                        <div class="form-group">

                                                        </div>
                                                        <input type="submit"  name="ctl00$ContentPlaceHolder1$Button3" value="Envoyer"  class="btn btn-lg btn-block" style="color:Black;background-color:#666666;width:400px;" />
                                                    </div>
                                                    <span id="ContentPlaceHolder1_Label2"></span>
                                                </div>

                                            </form>


                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
</div>
                            </div>


                            <div id="tabs-3">
                            <div id="ContentPlaceHolder1_Panel3" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ContentPlaceHolder1_ButtonParent&#39;)">
	
                                <div class="row">
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <div class="well-lg">
                                            <div class="breadcrumb">
                                                <img  src="{{ URL::asset('/') }}Contents/Img/affiche_200613.jpg"  width="290px"/>
                                                <h2 class="featurette-heading">
                                                    ESPRIT ... <span class="text-muted">Se Former autrement pour une nouvelle génération
                                                        d&#39;ingénieurs.</span></h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <div class="well-lg">
                                            <div class="form-signin">
                                                <div class="form-group">
                                                    <h2 class="form-signin-heading" style="color: #000000">
                                                        Espace Enseignant</h2>
                                                        <p class="style1">
                                                        Protégez vos données personnelles Si vous utilisez un ordinateur public ou partagé,
                                                        assurez-vous de quitter le navigateur à la fin de votre session de travail.
                                                    </p>
                                                </div>
                                                <form method="post" action="{{ url('/main/checklogin') }}">
                                                    {{ csrf_field() }}
                                                    <div id="Login_Enseignant">
                                                        <span id="ContentPlaceHolder1_Label7" style="font-weight:bold;font-style:italic;">E-Mail</span>
                                                        <br />
                                                        <div class="form-group" >
                                                            <input name="email" type="text" id="ContentPlaceHolder1_TextBox3" placeholder="Votre Mail" style="height:35px;width:400px;" />
                                                            <br />
                                                            <span id="ContentPlaceHolder1_Label95" style="color:#990033;font-weight:bold;font-style:italic;">Mot de passe</span>
                                                            <input name="password" type="password" id="ContentPlaceHolder1_pass_parent" placeholder="Mot de passe" style="height:35px;width:400px;" />

                                                            <span id="ContentPlaceHolder1_RequiredFieldValidator3" class="text-danger" style="visibility:hidden;">Cin incorrect </span>
                                                            <br />


                                                            <span id="ContentPlaceHolder1_RequiredFieldValidator7" class="text-danger" style="visibility:hidden;">Mot de passe incorrect </span>

                                                            <input name="type" type="hidden" id="type" value="enseignant" style="height:35px;width:400px;" />

                                                        </div>

                                                        <div class="form-group">

                                                            <div class="form-group">

                                                            </div>
                                                            <input type="submit" name="ctl00$ContentPlaceHolder1$Button3" value="Se Connecter" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$Button3&quot;, &quot;&quot;, true, &quot;EtudiantInfoGroup&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_Button3" class="btn btn-lg btn-block" style="color:Black;background-color:#666666;width:400px;" />
                                                        </div>
                                                        <span id="ContentPlaceHolder1_Label2"></span>
                                                    </div>

                                                </form>


                                                <div id="Register_Enseignant" style="display: none;">
                                                    <span id="ContentPlaceHolder1_Label7" style="font-weight:bold;font-style:italic;">E-Mail</span>
                                                    <br />
                                                    <div class="form-group" >
                                                        <input name="email" type="text" id="ContentPlaceHolder1_TextBox3" placeholder="Votre Mail" style="height:35px;width:400px;" />
                                                        <br />

                                                        <span id="ContentPlaceHolder1_RequiredFieldValidator7" class="text-danger" style="visibility:hidden;">Mot de passe incorrect </span>

                                                        <a href="#" onclick="Login_Enseignant()">Se Connecter</a>
                                                    </div>

                                                    <div class="form-group">

                                                        <div class="form-group">

                                                        </div>
                                                        <input type="submit" name="ctl00$ContentPlaceHolder1$Button3" value="Envoyer" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$Button3&quot;, &quot;&quot;, true, &quot;EtudiantInfoGroup&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_Button3" class="btn btn-lg btn-block" style="color:Black;background-color:#666666;width:400px;" />
                                                    </div>
                                                    <span id="ContentPlaceHolder1_Label2"></span>
                                                </div>





                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
</div>
                            </div>
                            </form>
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
    
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ContentPlaceHolder1_RequiredFieldValidator1"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator2"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator5"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator6"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator3"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator7"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator4"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator8"));
//]]>
</script>



<script type="text/javascript">
    function Register() {
        var Login_Etudiant = document.getElementById("Login_Etudiant");
        var Register_Etudiant = document.getElementById("Register_Etudiant");

            Login_Etudiant.style.display = "none";
            Register_Etudiant.style.display = "block";

    }
    function Login() {
        var Login_Etudiant = document.getElementById("Login_Etudiant");
        var Register_Etudiant = document.getElementById("Register_Etudiant");
        Register_Etudiant.style.display = "none";
        Login_Etudiant.style.display = "block";


    }
    function Register_Entreprise() {
        var Login_Entreprise = document.getElementById("Login_Entreprise");
        var Register_Entreprise = document.getElementById("Register_Entreprise");

        Login_Entreprise.style.display = "none";
        Register_Entreprise.style.display = "block";

    }
    function Login_Entreprise() {
        var Login_Entreprise = document.getElementById("Login_Entreprise");
        var Register_Entreprise = document.getElementById("Register_Entreprise");
        Register_Entreprise.style.display = "none";
        Login_Entreprise.style.display = "block";


    }

    function Register_Enseignant() {
        var Login_Enseignant = document.getElementById("Login_Enseignant");
        var Register_Enseignant = document.getElementById("Register_Enseignant");

        Login_Enseignant.style.display = "none";
        Register_Enseignant.style.display = "block";

    }
    function Login_Enseignant() {
        var Login_Enseignant = document.getElementById("Login_Enseignant");
        var Register_Enseignant = document.getElementById("Register_Enseignant");
        Register_Enseignant.style.display = "none";
        Login_Enseignant.style.display = "block";


    }
</script>

    <script src="{{ URL::asset('/') }}../Contents/CSS3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ URL::asset('/') }}../Contents/CSS3/js/bootstrap.js" type="text/javascript"></script>
 
    
</body>
</html>
