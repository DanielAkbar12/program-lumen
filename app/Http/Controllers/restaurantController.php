<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\restaurant;

class restaurantController extends Controller
{
    public function index()
    {
        $restaurant = restaurant::all();
        return response()->json($restaurant);
    }


    public function show($id)
    {
        $restaurant = restaurant::find($id);
        return response()->json($restaurant);
    }

    public function store(Request $request)
    {
        $restaurant = restaurant::create($request->all());
        return response()->json("restaurant Telah Ditambah");
    }

    public function update(Request $request,$id)
    {
        $restaurant = restaurant::find($id);
        $restaurant->update($request->all());
        return response()->json("restaurant Telah Diupdate");
    }

    public function destroy($id)
    {
        $restaurant = restaurant::find($id);
        $restaurant->delete();
        return response()->json("restaurant Telah Dihapus");
    }
}