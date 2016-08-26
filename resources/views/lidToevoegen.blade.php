@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    <h1 class="display-3 text-xs-center">Nieuw Lid toevoegen</h1>
    <p class="lead">Door een nieuw lid toe te voegen wordt er automatisch een couponcode naar die persoon gestuurd voor een goedkopere codex, via mail</p>
  </div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-8 offset-md-2">
<div class="card card-block" style="margin-top:5%;">
  <h4 class="card-title">Toevoegen Lid</h4>
                <form method="POST" action="/lidToevoegen">
                  {{ csrf_field() }}
      <div class="form-group row">
        <label for="Voornaam" class="col-sm-2 col-form-label">Voornaam</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Voornaam" name="voornaam" placeholder="Voornaam">
        </div>
      </div>
      <div class="form-group row">
        <label for="Achternaam" class="col-sm-2 col-form-label">Achternaam</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Achternaam" name="achternaam" placeholder="Achternaam">
        </div>
      </div>

      <div class="form-group row">
        <label for="gsmnummer" class="col-sm-2 col-form-label">GSM-nummer</label>
        <div class="col-sm-10">
           <div class="input-group">
           <div class="input-group-addon">R-</div>
          <input type="number" class="form-control" id="gsmnummer" name="gsmnummer" placeholder="GSM-nummer">
        </div>
      </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
           <div class="input-group">
           <div class="input-group-addon">R-</div>
          <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
        </div>
      </div>
      </div>


      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Bevestig Lidmaatschap</button>
        </div>
      </div>
    </form>
              </div>

  </div>
</div>
</div>

@endsection
