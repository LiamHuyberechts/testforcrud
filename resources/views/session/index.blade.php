@extends('layouts.app')
@section('content')
{{--    @if(Auth::check())--}}
    <a href="{{route('session.create')}}">Create new Session</a>
{{--    @endif--}}
    <div class="row d-flex">
    @foreach($sessions as $session)
        <div class="col-6"><h2>{{$session->name}}</h2>
            <p>{{$session->description}}</p></div>
    @endforeach
    </div>
@endsection

