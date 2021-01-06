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
