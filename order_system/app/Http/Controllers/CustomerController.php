<?php

namespace OrderSystem\Http\Controllers;

use Illuminate\Http\Request;

use OrderSystem\Http\Requests;
use OrderSystem\Http\Controllers\Controller;
use OrderSystem\Customer;
use OrderSystem\MenuItem;

use Validator, Input, Redirect, Session, DB; 
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      return view('customer', ['customers' => Customer::select('id','name','phoneMob','address')->orderBy('name')->get()]);
    }
    //Customer::select(array('id','name','Address', 'phoneMob')
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($cust)
    {
        
    }
    
    /**
	 * Search for customers from phone Number
	 * @return Customer
	 */
	public function search()
	{
		$query = Input::get('phone');
		$cust = Customer::whereRaw('phoneMob = ?', array($query))->get();
		$items = MenuItem::all();
	    if (!$cust->isEmpty()) {
	    
	    	return view('order', compact('cust'))->withItems($items);
	   
	    } else {
	        Session::flash('message', 'Customer not Found');
	    	return Redirect::to('orders');
	    }
	}

    //search takes post requests
    //At this point only returns json for ajax requests
/**    public function search(Request $request){
        $query = $request->input('query');
        $query = str_replace(' ', '', $query);
        $results = Customer::select('id','name','phoneMob')
        ->where('phoneMob','LIKE', "%$query%")
        ->orderBy('name')->get();
        return $results->toJson();
      //return $query;
    }
 }
**/
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
