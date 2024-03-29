<?php

namespace OrderSystem\Http\Controllers;
use Illuminate\Http\Request;

use OrderSystem\Http\Requests;
use OrderSystem\Http\Controllers\Controller;

use OrderSystem\Order;
use OrderSystem\MenuItem;
use Illuminate\Database\Query\Builder;
use Validator, Input, Redirect, Session, DB;

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
    public function store(Request $request)
    {
        if (isset($_POST)) {
                $order = new Order;
                $order->c_id = $request->input('id');
                $order->type = $request->input('orderType');
                //pass array with route of order items, serialise from that array ****************************************
                $order->order_items = $request->input('items');
                $order->status = $request->input('status');

                $order->save();

               Session::flash('message', 'Order Created' );
                //return Redirect::to('customers'); //->with('message', 'Order Created');
                return Redirect::to('orders');
        } else {
            Session::flash('message', 'Error!');
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
        // $order = Order::find($id);
        // $order_items = unserialize($order->order_items);
        // return Redirect::to(URL::previous())->withOrder($order)->withItems($order_items);

        // $orders = DB::table('orders')
        // ->join('customers', 'orders.c_id', '=', 'customers.id')
        // ->select('orders.*', 'customers.name', 'customers.id')
        // ->get();
        $order = DB::table('orders')
        ->join('customers', 'orders.c_id', '=', 'customers.id')
        ->select('orders.*', 'customers.name')
        ->where('orders.id', '=', "$id")->get();
        $order_items = json_decode($order[0]->order_items);
        $order_sum = 0;
        foreach($order_items as $key=>$value){
          if(isset($value->price))
          $order_sum += $value->price;
        }
        return view('singleorder', ['order' => $order[0], 'order_items' => $order_items, 'order_sum' => $order_sum]);
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

    //Route for showing all orders on a page
    public function all(){
      // $orders = DB::table('orders')
      // ->join('customers', 'orders.c_id', '=', 'customers.id')
      // ->select('orders.*', 'customers.name', 'customers.id')
      // ->get();
      return view('ordersall');
    }
}
