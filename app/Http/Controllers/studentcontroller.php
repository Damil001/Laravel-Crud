<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->address = $request->input('address');
        $student->telno = $request->input('telNo');
        $student->age = $request->input('age');
        $student->cnic = $request->input('cnic'); // Assuming 'cnic' is a field in your form
    
        // Save the student record
        $student->save();
    
        return redirect()->route('student.read', ['id' => $student->id])->with('status', 'Student created successfully');
    }    

    public function read()
    {
        $students = Student::all();
        return view('student/read')->with(['students' => $students]);
    }
}