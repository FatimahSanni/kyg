@extends('layouts.base')
@section('content')
    <div class="new">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-8 mb-5">
                    <div class="card text-center form">
                        <h4 class="mt-5">Add New Official</h4>
                        <div class="card-body">
                            <form class="mt-2" action="/officials" method="post" files="true">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date_of_birth">
                                </div>
                                <div class="form-group">
                                    <select name="state_of_origin" id="" class="form-control">
                                        <option value="">Select State of Origin</option>
                                        <option value="">Add New</option>
                                        <option value="">Lagos</option>
                                        <option value="">Ogun</option>
                                    </select>
                                </div>
                                <div class="form-group text-left">
                                    <input type="radio" name="gender" value="female"> Female
                                    <input type="radio" name="gender" value="male" class="ml-4"> Male
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="picture">
                                </div>
                                <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary-alt">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ml-md-auto sidebar pt-4 text-center">
                    @for($i=0;$i<5;$i++)
                        <div class="pr-1 pl-1">
                            <a href="#" class="card-link" target="_blank">
                                <div class="card mb-5" style="max-width: 20rem;">
                                    <div class="card-body text-gray">
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
        </div>
    </div>
@endsection