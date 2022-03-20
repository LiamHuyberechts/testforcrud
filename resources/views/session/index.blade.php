@extends('layouts.app')
@section('content')
    <p>This is the Session index</p>
    @foreach($sessions as $session)
        <h2>{{$session->name}}</h2>
        <p>{{$session->description}}</p>
    @endforeach
@endsection

