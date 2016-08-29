@extends('layouts.app') @section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="display-3 text-xs-center">Overzicht</h1>
                <p class="lead"> </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card card-block" style="margin-top:5%;">
                <h4 class="card-title">Overzicht</h4>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card card-block" style="margin-top:5%;background-color:#f1c40f;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-xs-right">
                                    <div class="huge font-weight-bold">{{$data['aatalleden']}}</div>
                                    <div>Leden</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <div class="card card-block" style="margin-top:5%;background-color:#f1c40f;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-xs-right">
                                    <div class="huge font-weight-bold">{{$data['aantalcodexen']}}</div>
                                    <div>Verkochte codexen</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <div class="card card-block" style="margin-top:5%;background-color:#f1c40f;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-xs-right">
                                    <div class="huge font-weight-bold">€ {{$data['prijstotaal']}}</div>
                                    <div>Euro opgebracht</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card card-block" style="margin-top:5%;background-color:#f1c40f">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-xs-right">
                                    <div class="huge font-weight-bold">{{$data['bestelid']}}</div>
                                    <div>is het beste Kuba lid</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>




@endsection
