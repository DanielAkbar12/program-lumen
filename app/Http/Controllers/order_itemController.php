<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\order_item;

class order_itemController extends Controller
{
    public function index()
    {
        $order_item = order_item::all();
        return response()->json($order_item);
    }


    public function show($id)
    {
        $order_item = order_item::find($id);
        return response()->json($order_item);
    }

    public function store(Request $request)
    {
        $order_item = order_item::create($request->all());
        return response()->json("order_item Telah Ditambah");
    }

    public function update(Request $request,$id)
    {
        $order_item = order_item::find($id);
        $order_item->update($request->all());
        return response()->json("order_item Telah Diupdate");
    }

    public function destroy($id)
    {
        $order_item = order_item::find($id);
        $order_item->delete();
        return response()->json("order_item Telah Dihapus");
    }
}