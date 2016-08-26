@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    <h1 class="display-3 text-xs-center">Bevestig Lidmaatschap</h1>
    <p class="lead">Kijk alle gegevens nog eens goed na, check op fouten! <br> Een email wordt verstuurd naar het lid met de coupon code voor een goedkopere codex </p>
  </div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-8 offset-md-2">
<div class="card card-block" style="margin-top:5%;">
  <h4 class="card-title">Bevestig Lidmaatschap</h4>

  <table class="table table-striped">
    <thead>
        <tr>
          <th>Nummer</th>
          <th>Voornaam</th>
          <th>Achternaam</th>
          <th>GSM-Nummer</th>
          <th>E-Mail</th>
        </tr>
      </thead>
      <tbody>

        <tr>
<th scope="row">{{$lid->id}}</th>
<td>{{$lid->voornaam}}</td>
<td>{{$lid->achternaam}}</td>
<td>{{$lid->gsmnummer}}</td>
<td>{{$lid->email}}</td>
</tr>

      </tbody>
</table>
              </div>

  </div>
</div>
</div>

@endsection
