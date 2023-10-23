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
    return view('studentList');
 }

 public function studentCreate(Request $request){
    //dd($request->all());
    Student::create([
        "name"=>$request->name,
        "email"=>$request->name,
        "password"=>bcrypt($request->password),
        "image"=>$request->image,
    ]);
    return back();

 }
}
