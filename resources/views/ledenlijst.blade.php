@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1 text-center">
    <h1 class="display-3 text-xs-center">Ledenlijst</h1>
  </div>
</div>
</div>
</div>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="card card-block" style="margin-top:5%;">
            <h4 class="card-title">Overzicht Leden</h4>
                <table class="table table-striped">
                  <thead>
                      <tr>
                        <th>Nummer</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>GSM</th>
                        <th>E-mail</th>
                        <th>Deregistreerd Door</th>
                        <th>Verwijderen</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($leden as $lid)
                      <tr>
      <th scope="row">{{$lid->id}}</th>
      <td>{{$lid->voornaam}}</td>
      <td>{{$lid->achternaam}}</td>
      <td>{{$lid->gsmnummer}}</td>
      <td>{{$lid->email}}</td>
      <td>{{$lid->geregistreerddoor}}</td>
      <td><button type="button" class="btn btn-danger" id="lijstVerwijderen">Verwijder</button></td>
    </tr>
  @endforeach
                    </tbody>
</table>
              </div>
          </div>
      </div>
    </div>
@endsection
