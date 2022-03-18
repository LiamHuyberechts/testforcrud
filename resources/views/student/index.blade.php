@extends('layouts.app')

@section('content')
    <a href="{{route('student.create')}}">Create New</a>
    @foreach($students as $student)
        <p>Student Name: {{$student->name}}</p>
        <p class="">
            Team name: {{$student->team->name}}

        <form action="{{route('student.destroy', $student->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE">
        </form>
        </p>

    @endforeach
@endsection
