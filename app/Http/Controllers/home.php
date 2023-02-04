<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    public function index(){
        // $data =  categoryModel::find(1);
        // dd($data->course);

        // $course = course::find(3);
        // dd($course->category);
        $data =  categoryModel::all();
        // dd($data);
        // $data = DB::table("category")->get();
        return view('welcome',compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $r){

        $r->validate([
            "name"=>"required|unique:category,name"
        ]);

        // $category = new categoryModel();
        // $category->name = $r->name;
        // $category->save();
        categoryModel::create($r->except(["_token"]));
        // DB::table("category")->insert([
        //     "name"=>$r->name
        // ]);

        return redirect('/category');
    }

    public function delete($id){
        $category =  categoryModel::find($id);
        $category->delete();
        // categoryModel::delete($id);
        // DB::table('category')->delete($id);
        return redirect('/category');
    }

    public function edit($id){
        $category = categoryModel::find($id);
        // $category =  DB::table("category")->find($id);
        return view('edit',compact('category'));
    }

    public function update(Request $request){
        $category =  categoryModel::find($request->id);
        $category->update($request->except(["_token"]));
        // DB::table("category")->where('id',$request->id)->update([
        //     "name"=>$request->name
        // ]);
        return redirect('/category');
    }
}
