<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KUBA-CODEXEN</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <style>


        .fa-btn {
            margin-right: 6px;
        }
        html {
          position: relative;
          min-height: 100%;
        }
        body {
          /* Margin bottom by footer height */
          margin-bottom: 60px;
          background-color:#ecf0f1;
          background-image: url("images/bg.jpg");
          background-size: cover;

        }
        .footer {
          position: absolute;
          bottom: 0;
          width: 100%;
          /* Set the fixed height of the footer here */
          height: 60px;
          line-height: 60px; /* Vertically center the text there */
          background-color: #f5f5f5;
        }

    </style>
</head>
<body style="height:100%;">
    <nav class="navbar navbar-static-top navbar-dark bg-primary">

                <!-- Collapsed Hamburger -->
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                    &#9776;
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    KUBA codexen
                </a>
            </div>

            <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="nav-item active"><a  class="nav-link" href="{{ url('/home') }}">Overzicht</a></li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    @else
                          <li class="nav-item active"><a  class="nav-link" href="{{ url('/aankoop') }}">Aankoop</a></li>
                          <li class="nav-item active"><a  class="nav-link" href="{{ url('/lijst') }}">Aankooplijst</a></li>
                          <li class="nav-item active"><a  class="nav-link" href="{{ url('/lidToevoegen') }}">Lid Toevoegen</a></li>
                          <li class="nav-item active"><a  class="nav-link" href="{{ url('/ledenlijst') }}">Ledenlijst</a></li>
                          <li class="nav-item active"><a  class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i></a></li>

                    @endif
                </ul>
              </div>
    </nav>

    @yield('content')
    <footer class="footer" style="width:100%;position:absolute;">
   <div class="container">
     <div class="col-md-12">
     <span class="text-muted">KUBA ondernemingsnummer: 0652667468, contact: via formulier op hoofdpagina <br> warmoesberg 26, 1000 Brussel </span>
   </div>
 </div>
 </footer>

    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="assets/js/aanpassingen.js"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83158809-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
