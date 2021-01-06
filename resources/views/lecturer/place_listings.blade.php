@extends('layouts.django')

@section('card_dash')
    <div class="row">
        <div class="col-12">
            <div class="container mt-5">
                <h3 class="text-center"> Places Near By Location </h3>
                <div class="row mt-4">
                    @foreach($places  as $place)
                        <form action="{{route('show_on_map')}}" method="post">
                            @csrf

                        <div class=" col-12 m-auto">
                            <div class="card shadow p-3">
                                <h2>{{$place->name." ".$place->surname}}</h2>
                                <h5 class="card-title float-left pt-2"> {{ $place->placeAttached }}  <small class="text-right float-right">{{round($place->distance, 2) . " KM "}}</small></h5>

                                <p> {{ "Programme ". $place->programme }} </p>
                                <p> {{ $place->address }} </p>
                            </div>
                            <input type="hidden" name="lat" id="lat" value="{{$place->latitude}}">
                            <input type="hidden" name="long" id="long" value="{{$place->longitude}}">

                            <button type="submit" class="btn btn-sm btn-primary rounded-pill" onclick="">Show Route On Map</button>
                        </div>

                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
