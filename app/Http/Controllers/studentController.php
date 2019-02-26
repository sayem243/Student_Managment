<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;

class studentController extends Controller
{
    public function index(){

    	$students = student :: all();

     return view('index')->with('students' ,$students);
    }


 	public function create(){

    	$students = student :: all();

     return view('create');
    }



    public function edit($id){

       $student=student::find($id);

      return view('edit')->with('student',$student);
        //return view('edit');

    }




 public function store(Request $request)
    {
      //Insert data into Student Table
      $student = new Student;
      $student->name = $request->name;
      $student->regestration_id = $request->regestration_id;
      $student->department_name = $request->department_name;
      $student->text = $request->text;
      
      $student->save();


      
      return redirect()->route('index');
    }

     public function update(Request $request ,$id )
    {
      //Insert data into Student Table
      
      $student= Student::find($id);
     
    

       $student->name = $request->name;
      $student->regestration_id = $request->regestration_id;
      $student->department_name = $request->department_name;
      $student->text = $request->text;

     

      $student->save();
     

      
      return redirect()->route('index');
    }


public function delete($id){

    $student=Student::find($id);

    $student->delete();

    return redirect()->route('index');



}




}
