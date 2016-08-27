@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    <h1 class="display-3 text-xs-center">Nieuwe Aankoop</h1>
    <p class="lead text-xs-center">Vul al je gegevens in voor de aanloop van een codex</p>
  </div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-8 offset-md-2">
<div class="card card-block" style="margin-top:5%;">
  <h4 class="card-title">Aankoop Codex</h4>
                <form method="POST" action="/aankoopCodex">
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
        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
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

      <div class="form-group row" id="divcoupon">
        <label for="coupon" class="col-sm-2 col-form-label">Lid coupon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="coupon" name="coupon" onchange="checkCoupon();" onpaste="this.onchange();" placeholder="Coupon">
          <div class="form-control-feedback" id="couponfeedback"></div>
      </div>
      </div>

      <div class="form-group row">
        <label for="coupon" class="col-sm-2 col-form-label">prijs</label>
        <div class="col-sm-10">
            <p class="form-control-static" id="prijsAankoop">€35,00</p>
      </div>
      </div>

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
