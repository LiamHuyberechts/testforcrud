@extends('layouts.app')

@section('content')
    <a href="{{route('student.create')}}">Create New</a>
    @foreach($students as $student)
        <p>Student Name: {{$student->name}}</p>
        <p>Team name: {{$student->team->name}}</p>
        <form action="{{route('student.destroy', $student->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE">
        </form>
    @endforeach
@endsection
