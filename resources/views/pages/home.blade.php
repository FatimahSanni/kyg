@extends('layouts.base')
@section('content')
    <div class="jumbotron jumbotron-fluid hero">
        <div class="container text-center align-middle">
            <p>FIND ANY <strong>GOVERNMENT OFFICIAL</strong> IN NIGERIA</p>
            <div class="form-group">
                <input type="text" class="form-control" name="query">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <h5>INTERESTING COLLECTIONS</h5>
        <p style="font-weight: 100; font-size:0.9rem" class="mb-5">Curated collections from citizens like you.</p>
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="card text-white">
                    <img class="card-img img-fluid" src="http://lorempixel.com/output/people-q-c-250-250-4.jpg"
                         alt="Card image">
                    <div class="card-img-overlay">
                        <h4 class="card-title mt-5">ALL HODs IN CBN ARE FROM NORTH</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white">
                    <img class="card-img img-fluid" src="http://lorempixel.com/output/people-q-c-250-250-2.jpg"
                         alt="Card image">
                    <div class="card-img-overlay">
                        <h4 class="card-title mt-5">5 MOST POWERFUL FEMALE POLITICIANS</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white">
                    <img class="card-img img-fluid" src="http://lorempixel.com/output/people-q-c-250-250-7.jpg"
                         alt="Card image">
                    <div class="card-img-overlay">
                        <h4 class="card-title mt-5">PRESIDENTS PRODUCED BY THE NORTHEAST REGION ALONE</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white">
                    <img class="card-img img-fluid" src="http://lorempixel.com/output/people-q-c-250-250-3.jpg"
                         alt="Card image">
                    <div class="card-img-overlay">
                        <h4 class="card-title mt-5">20 UNDER 40s DGs</h4>
                    </div>
                </div>
            </div>

        </div>
        <a href="#" class="btn btn-primary mb-5" style="font-weight: 100">VIEW ALL COLLECTIONS</a>
        <ul class="nav nav-pills nav-fill mx-auto w-50 mb-5" id="pills-tab" role="tablist">
            <li class="nav-item active">
                <a class="nav-link" data-toggle="pill" href="#institution" aria-controls="institution">INSTITUTIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#official" aria-controls="official">OFFICIALS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#party" aria-controls="party">PARTY</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="institution" role="tabpanel" aria-labelledby="institution">
                <div class="row">
                    @for($i=0;$i<10;$i++)
                        <div class="col-sm-4 col-md-3">
                            <a href="#" class="card-link" target="_blank">
                                <div class="card mb-5 landing-card" style="max-width: 20rem;">
                                    <div class="card-body text-success">
                                        <img src="http://lorempixel.com/output/people-q-c-250-250-7.jpg" alt=""
                                             class="img-fluid rounded-circle mb-3" width="100" height="100">
                                        <h5 class="card-title text-dark">HOUSE OF REPS</h5>
                                        <div class="card-footer bg-transparent">
                                            <p>200 profiles</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="tab-pane fade" id="official" role="tabpanel" aria-labelledby="official">
                Official
            </div>
            <div class="tab-pane fade" id="party" role="tabpanel" aria-labelledby="party">
                Party
            </div>
        </div>
    </div>

@endsection