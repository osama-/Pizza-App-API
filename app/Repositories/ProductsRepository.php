<?php
namespace  App\Repositories;
use App\Models;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\ProductCollection;
class ProductsRepository{

    public  function getAllProducts(){

        $products = Models\Product::all();

        return   new ProductCollection($products);
    }
    public function createProduct($product){
        $rules =[
            'name'=> 'required|min:3'
        ];
        $validator = Validator::make($product->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $product = Models\Product::create($product->all());

        return response()->json($product,200);
    }
}
