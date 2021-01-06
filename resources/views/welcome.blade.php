@extends('layouts.django')
@section('side_menu')
    <a href="{{url('/master/register_student')}}" class="btn btn-square text-sm active">
        <span class="btn-inner--icon d-block"><i class="fa fa-user fa-2x"></i></span>
        <span class="btn-inner--icon d-block pt-2">Students List</span>
    </a>
    <a href="" class="btn btn-square text-sm active">
        <span class="btn-inner--icon d-block"><i class="fa fa-map fa-2x"></i></span>
        <span class="btn-inner--icon d-block pt-2">Enter Coordinates </span>
    </a>


    <a href="" class="btn btn-square text-sm active">
        <span class="btn-inner--icon d-block"><i class="fa fa-lock fa-2x"></i></span>
        <span class="btn-inner--icon d-block pt-2">Logout</span>
    </a>

@endsection

@section('card_dash')
    <div class="row">
        <div class="col-12">
            <form class="mt-4" method="post" action="{{route('showroute')}}">

                @csrf
                <div class="card">
                    <div class="card-body">
                        <fieldset class="border p-2">
                            <legend  class="w-auto text-on-pannel text-primary"><strong class="text-uppercase">Enter Coordinates or Location Address</strong></legend>


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
                                        <input type="text" class="form-control" name="long" placeholder="e.g -73.9614103">
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

                        </fieldset>

                        <div class="text-right">
                            <a href="#" class="btn btn-link text-sm text-muted font-weight-bold">Cancel</a>
                            <button type="submit" class="btn btn-sm btn-primary rounded-pill">Show Nearest Places</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection


@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{url('/js/mapInput.js')}}"></script>
@endsection
