<?php

namespace App\Http\Controllers;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class studentController extends Controller
{
 
    public function add_student($id){
        return view('addStudent',compact('id')); 

    }

    public function add(Request $request){
      
      $student = new StudentModel();
      $student->first_name = $request->Fname;
      $student->last_name = $request->secName;
      $student->email = $request->email;
      $student->promotion_id = $request->Promoid ;
      $student->save();
      return redirect('test');
    }
    
    
}
