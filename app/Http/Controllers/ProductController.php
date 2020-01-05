<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use \Illuminate\Support\Facades\Validator;
use App\Repositories\ProductsRepository;
class ProductController extends Controller
{
    protected $productsRepository;
    public  function __construct(ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $productList = Models\Product::paginate(20);

       return response()->json($this->productsRepository->getAllProducts(),200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       return $this->productsRepository->createProduct($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Models\Product::find($id);
        if(is_null($product)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        return response()->json($product,200);
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
        $product = Models\Product::find($id);
        if(is_null($product)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        $product->update($request->all());
        return response()->json($product,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Models\Product::find($id);
        if(is_null($product)){
            return response()->json(["message"=>"Record Not found"],404);

        }
        Models\Product::destroy($id);
        return  response()->json(null,200);
    }
}
