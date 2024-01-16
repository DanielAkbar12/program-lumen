<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\orders;

class ordersController extends Controller
{
    public function index()
    {
        $orders = orders::all();
        return response()->json($orders);
    }


    public function show($id)
    {
        $orders = orders::find($id);
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $orders = orders::create($request->all());
        return response()->json("orders Telah Ditambah");
    }

    public function update(Request $request,$id)
    {
        $orders = orders::find($id);
        $orders->update($request->all());
        return response()->json("orders Telah Diupdate");
    }

    public function destroy($id)
    {
        $orders = orders::find($id);
        $orders->delete();
        return response()->json("orders Telah Dihapus");
    }
}