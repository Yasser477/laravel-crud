<?php

namespace App\Http\Controllers;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Stringable;

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

    public function edt_S($id){
      $students = StudentModel::Where('id',$id)->get();
      return view('updateS',compact('students'));
    }

    public function update(Request $req,$id){
      $student = StudentModel::Where('id',$id)->update(["first_name"=> $req->Fname,"last_name"=> $req->secName , "email"=> $req->email]);
      $querry = StudentModel::find($id)->first();
      return redirect('edit/'.$querry->promotion_id);
    
    }

    public function delete($id){
      $student = StudentModel::Where('id',$id)->first();
      $querry = $student->promotion_id;
      StudentModel::where('id',$id)->delete();
      return redirect('edit/'.$querry);
    }
    
    
}
