<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function order()
    {
        $orders = Order::all();
        return view('order')
            ->with('orders', $orders);
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, ['user_id'=>'required',
        'package'=>'required',
        'status'=>'required',]);
        $order = new Registry();
        $order->user_id = $request->user_id;
        $order->package = $request->package;
        $order->status= $request->status;
        $order->save();
        return redirect('/order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        $user_id = $order->user_id;
        $package = $order->package;
        $status = $order->status;
        return view('edit')
        ->with('id',$id)
        ->with('user_id',$user_id)
        ->with('package',$package)
        ->with('status',$status);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);
        $user_id = $order->user_id;
        $package = $order->package;
        $status = $order->status;
        return view('edit')
        ->with('id',$id)
        ->with('user_id',$user_id)
        ->with('package',$package)
        ->with('status',$status);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, ['user_id'=>'required',
        'package'=>'required',
        'status'=>'required',]);
        $order = Order::find($id);
        $order->user_id = $request->user_id;
        $order->package = $request->package;
        $order->status = $request->status;
        $order->update();
        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
       $order = Order::find($id);
       $order->delete();
       return redirect('/order');
    }
}
