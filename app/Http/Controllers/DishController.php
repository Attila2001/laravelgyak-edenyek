<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dish;
class DishController extends Controller
{
    public function index (){
        $dishes = dish::all();
        return view("list_dish",[
            "dishes" =>$dishes
        ]);
    }
    public function create(){
        return view("new_dish");
    }

    public function store(Request $request){
        dish::create($request->all());
        return redirect('/');
    }
    public function edit($id){
        $dishes = dish::find($id);
        return view("edit_dish",[
            "dish" => $dishes
        ]);
    }
    public function update(Request $request){
        $dish = dish::find($request->id);
        $dish->update($request->all());
        return redirect('/');
    }

    public function delete($id){
        dish::destroy($id);
        return redirect('/');
    }
}
