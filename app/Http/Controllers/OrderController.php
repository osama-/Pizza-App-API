<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use App\Http\Resources\Order as OrderResource;
use App\Repositories\OrdersRepository;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Mod;
use App\User;

class OrderController extends Controller
{
    protected $ordersRepository;

    public function __construct(OrdersRepository $ordersRepository)
    {
        $this->ordersRepository = $ordersRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        //$result = $user->orders()->paginate(25);
         //return response()->json(new OrderCollection($result), 200);
        $result = $user->orders;
        return response()->json(new OrderCollection($result), 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        return $this->ordersRepository->createOrder($request, $user->id);

    }

    public function createOrder(Request $request)
    {
        return $this->ordersRepository->createOrder($request);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $order = Models\Order::find($id);
        if (is_null($order) || $order->user_id != $user->id) {
            return response()->json(["message" => "Record Not found"], 404);
        }
        return response()->json(new OrderResource($order), 200);
    }

}
