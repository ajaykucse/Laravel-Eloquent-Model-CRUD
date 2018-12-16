<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('studentsfrm',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $students = new student();

        $students->name = $request->input('name');
        $students->course = $request->input('course');
        $students->address = $request->input('address');
        $students->mobile = $request->input('mobile');

        $students->save();

        return redirect('/students')->with('success','Student Data Saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = student::find($id);
        return view('student_edit',compact('students', $id));
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
        $this->validate($request, [
            'name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $student = student::find($id);

        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');

        $student->save();

        return redirect('/students')->with('success','Data Updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = student::find($id);
        $students->delete();

        return redirect('/students')->with('success','student data deleted successfully!!');
    }
}
