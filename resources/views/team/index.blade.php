@extends('layouts.app')
@section('content')
@foreach($teams as $team)
    <p>{{$team->name}}</p>
@endforeach
@endsection
