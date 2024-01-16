<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\menu;

class menuController extends Controller
{
    public function index()
    {
        $menu = menu::all();
        return response()->json($menu);
    }


    public function show($id)
    {
        $menu = menu::find($id);
        return response()->json($menu);
    }

    public function store(Request $request)
    {
        $menu = menu::create($request->all());
        return response()->json("menu Telah Ditambah");
    }

    public function update(Request $request,$id)
    {
        $menu = menu::find($id);
        $menu->update($request->all());
        return response()->json("menu Telah Diupdate");
    }

    public function destroy($id)
    {
        $menu = menu::find($id);
        $menu->delete();
        return response()->json("menu Telah Dihapus");
    }
}