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
        <div class="col-8">
            <div id="address-map-container" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>
        </div>
        <div class="col-4">
            <div class="table table-bordered">
                <table>
                    <thead>
                    <tr>
                        <td>Student Name</td>
                        <td>Place</td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Jane Doe</td>
                        <td>Econet</td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>Econet</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{url('/js/mapInput.js')}}"></script>
@endsection
