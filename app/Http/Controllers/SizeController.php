<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use \Illuminate\Support\Facades\Validator;
class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizeList = Models\Size::paginate(20);
        return response()->json($sizeList,200);
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
            'name'=> 'required|min:3'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $size = Models\Size::create($request->all());
        return response()->json($size,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $size = Models\Size::find($id);
        if(is_null($size)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        return response()->json($size,200);
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
        $size = Models\Size::find($id);
        if(is_null($size)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        $size->update($request->all());
        return response()->json($size,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = Models\Size::find($id);
        if(is_null($size)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        Models\Size::destroy($id);
        return  response()->json(null,200);
    }
}
