<?php

namespace App\Http\Controllers;
use App\Student;
use App\Team;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::OrderBy('team_id', 'desc')->with('team')->get();
        $result = compact('students');

        return view('student.index', $result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name'=>'required',
            'rnumber'=>'required',
//            'team_id'=>'required',
            'active'=>'required'
        ]);
        Student::create($request->all());

        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $student = Student::with('team')->findOrFail($id);
        $teams = Team::get();
        $result = compact('student', 'teams');

        return view('student.edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'name'=>'required',
            'rnumber'=>'required',
            'team_id'=>'required',
            'active'=>'required'
        ]);

        dd($request);
        Student::findOrFail($id)->update($request->all());

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student ->delete();

        return redirect('student');
    }
}
