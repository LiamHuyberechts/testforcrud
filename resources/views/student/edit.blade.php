@extends('layouts.app')
@section('content')
    <a href="{{route('student.index')}}">Back to students</a>

    <form action="{{route('student.update', $student->id)}}" method="POST"]>
    @csrf
    @method('PATCH')
        <label for="name">Student Name</label>
        <input type="text" name="name" contenteditable="true" value="{{$student->name}}"><br>
        <label for="rnumber">R number</label>
        <input type="text" name="rnumber" contenteditable="true" value="{{$student->rnumber}}"><br>
        <label for="active">Active</label>
        <input type="checkbox" value="1" checked="checked"/>
        <input type="hidden" value="1" name="active" /><br>
        <label for="team_id">Team</label>
        <select name="team_id">
            @foreach($teams as $team)
                @if($team->name == $student->team->name)
                    <option value="{{$team->id}}" selected>{{$team->name ?? 'No Team'}}</option>
                @else
                    <option value="{{$team->id}}">{{$team->name}}</option>
                @endif
                    @endforeach
        </select><br>



        <input type="submit">
    </form>

@endsection
