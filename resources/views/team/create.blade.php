@extends('layouts.app')
@section('content')
    <a href="{{route('team.index')}}">Back to Teams</a>
    <form action="{{route('team.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="submit">
    </form>
@endsection
