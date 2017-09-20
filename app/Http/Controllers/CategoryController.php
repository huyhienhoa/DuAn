<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listAllCategories(){
        $categories = Category::all();//Thay cho câu query

        return view("category.list", ["categories" => $categories]);
    }

    public function showAddForm(){
        return view("category.add");
    }

    public function createCategory(Request $request){
        $category = new Category();
        $category->name = $request->input("name");
        $category->save();
        return redirect(route("category.list"));

    }

    public function showEditForm(Request $request, $id){
        $category = Category::find($id);
        return view("category.edit", ["category" => $category]);
    }

    public function updateCategory(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->input("name");
        $category->save();
        return redirect(route("category.list"));
    }

    public function showDeleteForm(Request $request, $id){
        $category = Category::find($id);
        return view("category.delete", ["category" => $category]);
    }

    public function deleteCategory(Request $request, $id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route("category.list"));
    }
}