<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
 public function studentForm(){
    return view('studentForm');
 }
 public function studentList(){
    $students = Student::all();
    return view('studentList',compact('students'));
 }

 public function studentCreate(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'password' => 'required|min:6',
        'image'=>'required'
    ]);
    $imageName = time() . '.' . $request->file('image')->extension();
    $request->file('image')->storeAs('uploads', $imageName, 'public');

    //dd($request->all());
    try {
        Student::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "image" => $imageName,
        ]);

        return back()->with('success', ' student created.');
    } catch (\Exception $e) {

        return back()->with('error', 'An error occurred while creating the student.');
    }


 }

 public function studentEdit($id){
    $student = Student::find($id);
    return view('edit.edit',compact('student'));
 }

 public function studentEditCreate(Request $request,$id){
    $studentsUpdate = Student::find($id);
    $imageName = time() . '.' . $request->file('image')->extension();
    $request->file('image')->storeAs('uploads', $imageName, 'public');

    try {
        $studentsUpdate->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "image" => $imageName,
        ]);

        return back()->with('success', ' student updates.');
    } catch (\Exception $e) {

        return back()->with('error', 'An error occurred while updating the student.');
    }
 }
}
