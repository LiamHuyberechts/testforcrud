@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="{{route('student.create')}}">Create New</a>
    <div class="d-flex row">
        @foreach($students as $student)
            <div class="col-4 border">
                <p>Student Name: {{$student->name}}</p>

                Team name: <span class="font-weight-bolder">{{$student->team->name ?? 'no Team'}}</span>

                <form action="{{route('student.destroy', $student->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn-danger" type="submit" value="DELETE">
                </form>
                </div>

        @endforeach
    </div>
@endsection
