<?php

namespace App\Http\Controllers;
use App\Models\promotion;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function insert(Request $req){
        $promo = new promotion();
        $promo->name = $req->name;
        $promo->save();
        return redirect('test');
        
    }

    public function show(){
        $data = promotion::All();
        
        return view('test',compact('data'));
    }

    public function edit($id){

        $student = DB::table('student_models')
        ->join('promotions','promotions.id','=','student_models.promotion_id')
        ->select('student_models.*')
        ->where('promotions.id',$id)
        ->get();
        $promotion = promotion::where('id', $id)->get();
        return view("edit",compact('promotion','student'));
        
    }

    public function update(Request $request, $id){
        $promotion = promotion::where('id', $id)->update(["name"=> $request->name]);
        return redirect('test');
    }


    public function search($searchResult = null){
    
        // dd($request->search);
        //  dd($data);
        if ($searchResult == null) {
            $data = promotion::all();
            return $data;
        } else {
            $data = promotion::where('name', 'like', '%' . $searchResult . '%')->get();
            return $data;
        }
    }
    
    public function deletePromo($id){
        
        promotion::where('id',$id)->delete();

        return redirect('test');
        
    }


}
    