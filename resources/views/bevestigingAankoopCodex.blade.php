@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    <h1 class="display-3" class="display-3 text-xs-center">Success</h1>
    <p class="lead text-xs-center">Order wordt verwerkt! Indien order gelukt is krijg je een mail! (check zeker je spamfolder!)</p>
  </div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-8 offset-md-2">
<div class="card card-block" style="margin-top:5%;">
  <h4 class="card-title">Bevestiging Order Codex</h4>

  <table class="table table-striped">
    <thead>
        <tr>
          <th>Nummer</th>
          <th>Voornaam</th>
          <th>Achternaam</th>
          <th>R-nummer</th>
          <th>Betaald</th>
        </tr>
      </thead>
      <tbody>

        <tr>
<th scope="row">{{$aankoop->id}}</th>
<td>{{$aankoop->voornaam}}</td>
<td>{{$aankoop->achternaam}}</td>
<td>{{$aankoop->rnummer}}</td>
<td>{{$aankoop->prijs}}</td>
</tr>

      </tbody>
</table>
              </div>

  </div>
</div>
</div>

@endsection