@extends('layouts.app')
@section('content')
    <a href="{{route('team.create')}}">Add new Team</a>
    <ul>

@foreach($teams as $team)
        <li>
    {{$team->name}} <a class="btn btn-info m-1" href="{{ route('team.show',$team->id) }}">Show more</a>

        </li>

        @endforeach

    </ul>
@endsection
