<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{

    public function index()

    {
          
        $students = student :: all();  
    	return view('index')->with('students' , $students);
    }

    public function create()

    {
          
          
    	return view('create');
    }

    public function edit($id)

    {
        $student = student::find($id);
          
    	return view('edit')->with('student' , $student);
    }



     public function store(Request $request)

    {
        //validation
        /**
             $request->validate( [ 
             'name'            => 'required|sting|max:15' ,
             'registration_id' => 'required|integer' ,
             'depertment_name' => 'required' ,
             'info'            => 'nullable' ,
         
             
        ]);      **/
           
        // input data  

        $student = new student;

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->depertment_name = $request->depertment_name;
        $student->info = $request->info;

        $student->save();

    	return redirect()->route('index');
    }



     public function update(Request $request , $id)

    {
          
        $student = student::find($id);

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->depertment_name = $request->depertment_name;
        $student->info = $request->info;

        $student->save();

    	return redirect()->route('index');
    }

      public function delete($id)

    {
          
        $student = student::find($id);


        $student->delete();

        return redirect()->route('index');
    }

}
