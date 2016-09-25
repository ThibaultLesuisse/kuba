@extends('layouts.home')

@section('content')
<!-- Page Wrapper -->
  <div id="page-wrapper">

    <!-- Header -->
      <header id="header" class="alt">
        <h1><a href="index.html">KUBA</a></h1>
        <nav>
          <a href="#menu">Menu</a>
        </nav>
      </header>

    <!-- Menu -->
      <nav id="menu">
        <div class="inner">
          <h2>Menu</h2>
          <ul class="links">
            <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/aankoopCodex') }}">Aankoop Codex</a></li>
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Inloggen</a></li>
                <li><a href="{{ url('/register') }}">Registreren</a></li>
            @else
            <li><a href="{{ url('/home') }}">Overzichtspagina</a></li>
            <li><a href="{{ url('/logout') }}">Logout</a></li>
            @endif
          </ul>
          <a href="#" class="close">Close</a>
        </div>
      </nav>

    <!-- Banner -->
      <section id="banner">
        <div class="inner">

          <h2>KUBA - CODEXEN</h2>
          <p>Aankoop codexen voor KU Leuven campus Brussel</a></p>
        </div>
      </section>

    <!-- Wrapper -->
      <section id="wrapper">

        <!-- One -->
          <section id="one" class="wrapper spotlight style1">
            <div class="inner">
              <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
              <div class="content">
                <h2 class="major">Aankoop informatie</h2>
                <p>De verkoop van VRG codexen gebeurt ieder jaar door KUBA, leden van KUBA krijgen hierop korting<br>Leden hebben een code gekregen via mail die ze kunnen invullen</p><br>
                  <div class="row">
                    <div class="12u 12u$(medium)">
                      <h4>Prijzen</h4>
                      <ul class="alt">
                        <li>Lid €30</li>
                        <li>Niet Lid €35</li>
                      </ul>
                    </div>

              </div>
            </div>
          </section>


      </section>

    <!-- Footer -->
      <section id="footer">
        <div class="inner">
          <h2 class="major">Contacteer ons</h2>
          <form method="post" action="/welcome">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="field">
              <label for="name">Naam</label>
              <input type="text" name="naam" id="name" />
            </div>
            <div class="field">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" />
            </div>
            <div class="field">
              <label for="bericht">Bericht</label>
              <textarea name="bericht" id="bericht" rows="4"></textarea>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Verstuur" /></li>
            </ul>
          </form>

        </div>
      </section>

  </div>
@endsection
