@extends('layouts.django')

@section('side_menu')
    <a href="{{url('/master/register_student')}}" class="btn btn-square text-sm active">
        <span class="btn-inner--icon d-block"><i class="fa fa-user fa-2x"></i></span>
        <span class="btn-inner--icon d-block pt-2">Add Students</span>
    </a>
    <a href="" class="btn btn-square text-sm active">
        <span class="btn-inner--icon d-block"><i class="fa fa-cog fa-2x"></i></span>
        <span class="btn-inner--icon d-block pt-2">Manage Students</span>
    </a>


    <a href="" class="btn btn-square text-sm active">
        <span class="btn-inner--icon d-block"><i class="fa fa-cog fa-2x"></i></span>
        <span class="btn-inner--icon d-block pt-2">Manage Lecturers</span>
    </a>
@endsection

@section('card_dash')
    <form class="mt-4" method="post" action="{{route('savedoc')}}">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                    Student Number
                                </label>
                                <input type="text" class="form-control" name="reg" placeholder="M215270">

                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                    Name
                                </label>
                                <input type="text" class="form-control" name="name" placeholder="e.g Jane">
                            </div>
                        </div>

                        <div class="col-12 col-md-5">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                  Surname
                                </label>
                                <input type="text" class="form-control" name="surname" placeholder="e.g Doe">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                   Programme
                                </label>
                                <input type="text" class="form-control" name="programme" placeholder="e.g BSc in Computer Science">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                  Place Attached
                                </label>
                                <input type="number" class="form-control" name="placeAttached" placeholder="e.g Econet">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                    Street Address
                                </label>
                                <input type="text" class="form-control" name="address" placeholder="E.g 279 Jason Moyo Ave, Bulawayo, Zi 11211, ZW">
                            </div>
                        </div>


                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                   Latitude
                                </label>
                                <input type="text" class="form-control" name="lat" placeholder="e.g 40.7142484">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <!-- Start date -->
                            <div class="form-group">
                                <label class="form-control-label">
                                   Longitude
                                </label>
                                <input type="text" class="form-control" name="log" placeholder="e.g -73.9614103">
                            </div>
                        </div>
                    </div>
                </div>





                <div class="text-right">
                    <a href="#" class="btn btn-link text-sm text-muted font-weight-bold">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-primary rounded-pill">Save</button>
                </div>
            </div>
        </div>

    </form>
@endsection
