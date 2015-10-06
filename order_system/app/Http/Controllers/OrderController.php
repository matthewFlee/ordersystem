<?php

namespace OrderSystem\Http\Controllers;
use Illuminate\Http\Request;

use OrderSystem\Http\Requests;
use OrderSystem\Http\Controllers\Controller;
use OrderSystem\Order;
use OrderSystem\MenuItem;
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
      return view('order', ['items' => MenuItem::all()]);
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

    public function add_item(){
        $item = Input::get('item_id');
        $qty = Input::get('qty');
        $ordered_items = array(array());     //Input::get('items_array');
        array_push($ordered_items, array($item,$qty));
        return view('order')->withOrder_items($ordered_items);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, $order_items)
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
            //pass array with route of order items, serialise from that array ****************************************
            $order->order_items = serialize(Input::get('order_items'));
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
        $order = Order::find($id);
        $order_items = unserialize($order->order_items);
        return Redirect::to(URL::previous())->withOrder($order)->withItems($order_items);

    }

    /**
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
        $order = Order::find($id);
		$order->delete();
		Session::flash('message', 'Order Deleted!');
		return Redirect::to(URL::previous());
    }
}
