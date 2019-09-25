@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid jumbotron-home-bg text-white text-center d-flex flex-column">
        <div class="container m-auto">
            <img src="/icon.svg" alt="" class="img-fluid">
            <br>
            <a href="/bioscopen" class="btn btn-primary mb-auto mx-auto pl-4 pr-4">
                Kies een bioscoop
            </a>
        </div>
    </div>
    <div class="container">
        {!! $page->render() !!}
        <div class="row my-3">
            <div class="col-md-4 mb-3">
                <div class="card ad shadow-lg">
                    <div class="card-body text-center">
                        <h1>1 uur</h1>
                        <p>Kleine omschrijving over wat dit tijdslot inhoud. Exclusief fietsenstalling. Dit komt 
                            voor volgende sprint maar is nu opvulling.</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-primary"></i> Laser</li>
                            <li><i class="fa fa-check text-primary"></i> Dolby 5.1</li>
                            <li><i class="fa fa-check text-primary"></i> Dolby 7.1</li>
                            <li><i class="fa fa-times text-danger"></i> Laser Ultra</li>
                            <li><i class="fa fa-times text-danger"></i> Atmos</li>
                            <li><i class="fa fa-times text-danger"></i> 3D</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Binnenkort beschikbaar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card ad shadow-lg">
                    <div class="card-body text-center">
                        <h1>2 uur</h1>
                        <p>Kleine omschrijving over wat dit tijdslot inhoud. Exclusief fietsenstalling. Dit komt 
                            voor volgende sprint maar is nu opvulling.</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-primary"></i> Laser</li>
                            <li><i class="fa fa-check text-primary"></i> Dolby 5.1</li>
                            <li><i class="fa fa-check text-primary"></i> Dolby 7.1</li>
                            <li><i class="fa fa-check text-primary"></i> Laser Ultra</li>
                            <li><i class="fa fa-times text-danger"></i> Atmos</li>
                            <li><i class="fa fa-times text-danger"></i> 3D</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Binnenkort beschikbaar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card ad shadow-lg">
                    <div class="card-body text-center">
                        <h1>3 uur</h1>
                        <p>Kleine omschrijving over wat dit tijdslot inhoud. Exclusief fietsenstalling. Dit komt 
                            voor volgende sprint maar is nu opvulling.</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-primary"></i> Laser</li>
                            <li><i class="fa fa-check text-primary"></i> Dolby 5.1</li>
                            <li><i class="fa fa-check text-primary"></i> Dolby 7.1</li>
                            <li><i class="fa fa-check text-primary"></i> Laser Ultra</li>
                            <li><i class="fa fa-check text-primary"></i> Atmos</li>
                            <li><i class="fa fa-check text-primary"></i> 3D</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Binnenkort beschikbaar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop