<?php

namespace App\Http\Controllers;
use App\Models\promotion;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function insert(Request $req){
        $promo = new promotion();
        $promo->name = $req->name;
        $promo->save();
        return view('test');
        
    }

    public function show(){
        $data = promotion::All();
        
        return view('test',compact('data'));
    }
}
