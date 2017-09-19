<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function listAllBranchs(){
        $branches = Branch::All();
//        $branches = Branch::paginate(5);
        return view("branch.list", ["branches" => $branches]);
//        return view("branch.list", compact('branches'));

    }

    public function showAddForm(){
        return view("branch.add");
    }

    public function createBranch(Request $request){
        $branch = new Branch();
        $branch->name = $request->input('name');
        if($request->hasFile('image')){
            $file = $request->image;
            $file->move('images',$file->getClientOriginalName());

            $branch->image =$file->getClientOriginalName();
            $branch->save();
        }
        return redirect()->action('BranchController@listAllBranchs');
    }


    public function showEditForm(Request $request, $id){
        $branch = Branch::find($id);
        return view("branch.edit", ["branch" => $branch]);
    }

    public function updateBranch(Request $request, $id){
        $branch = Branch::find($id);
        $branch->name = $request->input("name");
        $branch->image = $request->input("image");
        $branch->save();
        return redirect(route("branch.list"));
    }

    public function showDeleteForm(Request $request, $id){
        $branch = Branch::find($id);
        return view("branch.delete", ["branch" => $branch]);
    }

    public function deleteBranch(Request $request, $id){
        $branch = Branch::find($id);
        $branch->delete();
        return redirect(route("branch.list"));
    }
}