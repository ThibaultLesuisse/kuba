@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    <h1 class="display-3">Lijst aankopen</h1>
    <p class="lead">Overzicht van alle aankopen </p>
  </div>
</div>
</div>
</div>

<div class="container">
  <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card card-block" style="margin-top:5%;">
            <h4 class="card-title">Overzicht aankopen</h4>
                <table class="table table-striped">
                  <thead>
                      <tr>
                        <th>Nummer</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Lid</th>
                        <th>Betaald</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($aankopen as $aankoop)
                      <tr>
      <th scope="row">{{$aankoop->id}}</th>
      <td>{{$aankoop->voornaam}}</td>
      <td>{{$aankoop->achternaam}}</td>
      <td>{{$aankoop->lid}}</td>
      <td>{{$aankoop->prijs}}</td>
    </tr>
  @endforeach
                    </tbody>
</table>
              </div>
          </div>
      </div>
    </div>



@endsection
