<?php
namespace  App\Repositories;
use App\Models;
use Illuminate\Support\Facades\Validator;

class OrdersRepository{

    public  function  createOrder($request, $userId = null){

        $data = ['data' => $request->orderItems];
        $rules = [
            'data.*.product_id' => 'required',
            'data.*.quantity' => 'integer|min:1'

        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $deliveryCharge = Models\DeliveryCharge::first();
        $order = new  Models\Order;
        $order->delivey_notes = $request->delivey_notes;
        $order->usd_delivery_charges = $deliveryCharge->usd_delivery_charge;
        $order->eur_delivery_charges = $deliveryCharge->eur_delivery_charge;
        $order->user_id = $userId;
        $order->save();

        foreach ($request->orderItems as $oItem) {
            $product = Models\Product::find($oItem["product_id"]);
            $orderItem = new  Models\OrderItem;
            $orderItem->product_id = $product->id;
            $orderItem->quantity = $oItem["quantity"];
            $orderItem->usd_unit_price = $product->usd_price;
            $orderItem->eur_unit_price= $product->eur_price;
            $order->orderItems()->save($orderItem);
        }

        return response()->json($order, 200);
    }
}
