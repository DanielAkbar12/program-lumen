<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\owner;

class ownerController extends Controller
{
    public function index()
    {
        $owner = owner::all();
        return response()->json($owner);
    }


    public function show($id)
    {
        $owner = owner::find($id);
        return response()->json($owner);
    }

    public function store(Request $request)
    {
        $owner = owner::create($request->all());
        return response()->json("owner Telah Ditambah");
    }

    public function update(Request $request,$id)
    {
        $owner = owner::find($id);
        $owner->update($request->all());
        return response()->json("owner Telah Diupdate");
    }

    public function destroy($id)
    {
        $owner = owner::find($id);
        $owner->delete();
        return response()->json("owner Telah Dihapus");
    }
}