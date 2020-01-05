<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use \Illuminate\Support\Facades\Validator;
class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderItemList = Models\OrderItem::paginate(20);
        return response()->json([],200);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'order_id'=> 'required',
            'product_id'=> 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $orderItem = Models\OrderItem::create($request->all());
        return response()->json($orderItem,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderItem = Models\OrderItem::find($id);
        if(is_null($orderItem)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        return response()->json($orderItem,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orderItem = Models\OrderItem::find($id);
        if(is_null($orderItem)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        $orderItem->update($request->all());
        return response()->json($orderItem,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderItem = Models\OrderItem::find($id);
        if(is_null($orderItem)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        Models\OrderItem::destroy($id);
        return  response()->json(null,200);
    }
}
