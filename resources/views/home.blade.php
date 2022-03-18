@extends('layouts.app')

@section('content')
    <a href="{{route('student.index')}}">Students</a>
    <a href="{{route('team.index')}}">Teams</a>

    @foreach($students as $student)
    <p>Student name: {{$student->name}}</p>
        <p>Team name: {{$student->team->name}}</p>
    @endforeach
@endsection
