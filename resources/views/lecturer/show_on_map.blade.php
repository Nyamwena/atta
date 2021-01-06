@extends('layouts.django')

@section('card_dash')
    <div class="row">
        <div class="col-12">
            <div class="container mt-5">
                <input type="button" id="routebtn" value="route" />
                <div id="map-canvas"></div>
            </div>
        </div>

        <div class="col-12">
            <div class="container mt-5">
                <h3 class="text-center"> Places Near By Location </h3>
                <div class="row mt-4">

                        <form id="form" onsubmit="" >
                            @csrf

                            <div class=" col-12 m-auto">
                                <input type="hidden" name="lat" id="lat" value="20202020">
                                <input type="hidden" name="long" id="long" value="3030303">
                                <input type="text" name="" id="tes" value="">
                                <input type="text" name="" id="tes1" value="">

                                <button type="button"  onclick="initialize()" class="btn btn-sm btn-primary rounded-pill"  >Show Route On Map</button>
                            </div>

                        </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script>

        function initialize() {
            var latIni = document.getElementById('lat').value;
             var longIni = document.getElementById('long').value;
            //
            //
            console.log(latIni);
            console.log(longIni);

        document.getElementById('tes').value = latIni;
            document.getElementById('tes1').value = longIni;

            directionsDisplay = new google.maps.DirectionsRenderer();
            var chicago = new google.maps.LatLng(latIni, longIni);
            var mapOptions = {
                zoom: 7,
                center: chicago
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            directionsDisplay.setMap(map);
            google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
        }
        function calcRoute() {
            var latStart = null;
            var longStart = null;
            var latEnd = null;
            var latStart = null;
            var start = new google.maps.LatLng(37.334818, -121.884886);
            //var end = new google.maps.LatLng(38.334818, -181.884886);
            var end = new google.maps.LatLng(37.441883, -122.143019);
            var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    directionsDisplay.setMap(map);
                } else {
                    alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                }
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        mapLocation();
    </script>
@endsection
