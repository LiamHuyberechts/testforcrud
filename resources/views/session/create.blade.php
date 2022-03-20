@extends('layouts.app')
@section('content')

    <a href="{{route('session.index')}}">Back to sessions</a>

    <form action="{{route('session.store')}}" method="post">
        @csrf

        <label for="name">Company Name
        <input type="text" name="name" value="" required>
        </label><br>
        <label for="description">R number
        <input type="text" name="description" value="" required>
        </label><br>
        <input type="submit">
    </form>
@endsection
