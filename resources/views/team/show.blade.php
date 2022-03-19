@extends('layouts.app')

@section('content')

    <a href="{{route('team.index')}}">Back to teams</a>

    <table>
        <tr>
            <th>Team name: {{$team->name}}</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td></td>
            </tr>
        @endforeach
        <form action="{{route('team.destroy', $team->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn-danger" type="submit" value="DELETE TEAM">
        </form>
    </table>
@endsection
