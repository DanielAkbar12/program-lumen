<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\category;

class categoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        return response()->json($category);
    }


    public function show($id)
    {
        $category = category::find($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $category = category::create($request->all());
        return response()->json("category Telah Ditambah");
    }

    public function update(Request $request,$id)
    {
        $category = category::find($id);
        $category->update($request->all());
        return response()->json("category Telah Diupdate");
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return response()->json("category Telah Dihapus");
    }
}