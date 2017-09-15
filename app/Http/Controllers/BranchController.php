<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function showAddForm(){
        return view('branch.add');
    }
    
    public function add(Request $request){
        $branch = new Branch();
        $branch->name = $request->input('name');
        if($request->hasFile('photo')){
            $file = $request->photo;
            $file->move('images',$file->getClientOriginalName());
            
            $branch->image =$file->getClientOriginalName();
            $branch->save();
        }
        return redirect()->action('BranchController@showAddForm');
    }
}
