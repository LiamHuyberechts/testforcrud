@extends('layouts.app')
@section('content')
    <div class="row d-flex">
        <div class="col-12"><h2>Students</h2></div>
        @foreach($students as $student)
            <div class="col-2 border"><p>{{$student->name}}</p></div>
        @endforeach
    </div>
    <div class="row d-flex mt-3">
        <div class="col-12"><h2>Teams</h2></div>
        @foreach($teams as $team)
            <div class="col-4 border">
                <p>{{$team->name}}</p>
            </div>
        @endforeach
    </div>
    <div class="row d-flex mt-3">
        <div class="col-12">
            <h2>Sessions</h2></div>
            @foreach($sessions as $session)
                <div class="col-4 border"><p>{{$session->name}}</p></div>
            @endforeach

    </div>

@endsection
