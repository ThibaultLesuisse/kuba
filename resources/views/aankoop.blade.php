@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    <h1 class="display-3 text-xs-center">Nieuwe Aankoop</h1>
    <p class="lead text-xs-center">Gebruik deze form voor een nieuwe aankoop, de R van het r-nummer moet er niet bij! </p>
  </div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-10 offset-md-1">
<div class="card card-block" style="margin-top:5%;">
  <h4 class="card-title">Aankoop Codex</h4>
                <form method="POST" action="/aankoop">
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
        <label for="rnummer" class="col-sm-2 col-form-label">R-nummer</label>
        <div class="col-sm-10">
           <div class="input-group">
           <div class="input-group-addon">R-</div>
          <input type="number" class="form-control" id="rnummer" name="rnummer" placeholder="R-nummer">
        </div>
      </div>
      </div>

      <fieldset class="form-group row">
      <legend class="col-form-legend col-sm-2">Lid/Geen Lid</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="lid" value="lid" checked>
          Lid
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="lid" value="glid">
            Geen lid
          </label>
        </div>

      </div>
    </fieldset>

      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Bevestig Aankoop</button>
        </div>
      </div>
    </form>
              </div>

  </div>
</div>
</div>

@endsection
