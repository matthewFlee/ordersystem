<?php

namespace OrderSystem\Http\Controllers;
use Illuminate\Http\Request;

use OrderSystem\Http\Requests;
use OrderSystem\Http\Controllers\Controller;
use OrderSystem\Order;
use Validator, Input, Redirect, Session; 

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        $rules = array(
            'id' => 'required',
            'type' => 'required',
            'order_items' => 'required',
            'status' => 'required',
            'total_price' => 'required'
            );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()){
        
        Session::flash('message', 'Error! Ensure all fields are completed');
        return Redirect::to('orders'); 
        } else {
        $order = new Order;
        $order->id = Input::get('cust_id');
        $order->type = Input::get('type');
        $order->order_items = Input::get('order_items');
        $order->status = Input::get('status');
        $order->total_price = Input::get('total_price');
       
        $order->save();
        
        Session::flash('message', 'Order Created!');
        return Redirect::to('orders');
        }
            
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
