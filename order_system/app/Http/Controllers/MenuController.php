<?php

namespace OrderSystem\Http\Controllers;

use Illuminate\Http\Request;

use OrderSystem\Http\Requests;
use OrderSystem\Http\Controllers\Controller;
use OrderSystem\MenuItem;
use Validator, Input, Redirect, Session;

class MenuController extends Controller
{

    //Validator rules
    private $rules = array(
      'item' => 'required',
      'price' => 'required'
    );
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Returns index of menu, for general viewing
        //$menu = Menu::all();
        return view('menu', ['items' => MenuItem::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new Menu();
        $item->item = $input['item'];
        $item->price = floatval($input['price']);
        $item->save();

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
      return view('menuedit', ['menuitem' => MenuItem::find($id)]);
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
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->passes()){
          $item = MenuItem::find($id);
          $item->item = htmlspecialchars($request->input('name'));
          $item->price = htmlspecialchars($request->input('price'));
          $item->save();

          return Redirect::to('menu');
        } else {
          return Redirect::action('MenuController@edit')->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //Remove a menu item
        $item = MenuItem::find($id);
        $post->delete();
        //Redirect or somethign similar
    }
}
