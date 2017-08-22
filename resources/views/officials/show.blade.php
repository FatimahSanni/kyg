@extends('layouts.base')
@section('content')
    <div class="jumbotron hero show-hero"></div>
    <div class="new pt-5">
        <div class="row text-center ml-5 mr-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="http://lorempixel.com/100/100/people/9/" alt="" class="rounded-circle img-fluid mb-2">
                        <h6 class="mb-0">{{$name}}</h6>
                        <small class="text-muted">(45 years old)</small>
                        <div class="text-left mt-3">
                            <small><strong>Current: </strong><span class="text-muted">DG of NAFDAC</span></small>
                            <br>
                            <small><strong>Previous: </strong><span
                                        class="text-muted">Perm Sec, Ministry of Health</span>
                            </small>
                            <br>
                            <small><strong>Reports To: </strong><span class="text-muted"><a
                                            href="#">Minister of Health</a></span>
                            </small>
                            <br>
                        </div>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item text-left">
                            <p class="text-muted"><i class="fa fa-map-marker"></i> Nigeria</p>
                            <p class="text-muted"><i class="fa fa-globe"></i> www.joeabah.com</p>
                            <p class="text-muted"><i class="fa fa-phone"></i> 08023089078</p>
                            <p class="text-muted"><i class="fa fa-envelope-open-o"></i> joe@nafdac.org</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="text-left">POLITICAL HISTORY</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card text-left">
                    <div class="card-body">
                        <h4>EDUCATION</h4>
                        <p>Phd. Food and Nutrition technology</p>
                        <p><strong>Hull University, 2012</strong></p>
                        <p>Msc. Food and Nutrition technology</p>
                        <p><strong>Unilag, 1986</strong></p>
                        <p>Bsc. Food and Nutrition technology</p>
                        <p><strong>University of Ibadan, 1982</strong></p>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="text-left">SIMILAR PROFILES</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="http://lorempixel.com/100/100/people/9/" alt=""
                                     class="rounded-circle img-fluid">
                                <p><a href="#">Bruce Burns</a></p>
                            </div>
                            <div class="col-md-3">
                                <img src="http://lorempixel.com/100/100/people/8/" alt=""
                                     class="rounded-circle img-fluid">
                                <p><a href="#">Kelly Clarkson</a></p>
                            </div>
                            <div class="col-md-3">
                                <img src="http://lorempixel.com/100/100/people/3/" alt=""
                                     class="rounded-circle img-fluid">
                                <p><a href="#">Joe Abah</a></p>
                            </div>
                            <div class="col-md-3">
                                <img src="http://lorempixel.com/100/100/people/2/" alt=""
                                     class="rounded-circle img-fluid">
                                <p><a href="#">Yemi Kale</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-left">CAREER TIMELINE</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                @for($i=0;$i<3;$i++)
                    <div class="pr-1 pl-1">
                        <a href="#" target="_blank">
                            <img src="http://lorempixel.com/output/people-q-c-250-250-7.jpg" alt=""
                                 class="img-fluid mb-4" width="200" height="150">
                        </a>
                    </div><br>
                @endfor
            </div>
        </div>
    </div>
@endsection