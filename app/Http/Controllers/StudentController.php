<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('backoffice.student', compact('students'));
    }
    public function create(){
        return view('backoffice.createStudent');
    }
    public function store(Request $request){
        $store = new Student;

        $store->name = $request->name;
        $store->gender = $request->gender;
        $store->age = $request->age;
        $store->mail = $request->mail;

        $store->save();

        return redirect()->route('students.index');
    }
}
