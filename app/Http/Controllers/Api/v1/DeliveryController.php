<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('orders.status', 2)
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.*', 'products.name', 'products.image' )
            ->get();

        foreach($orders as $order) {
        $order->pathImage = "http://192.168.64.3/fast-food-laravel/public/images/";
        }

        return $orders;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {


        try {

            $dataOrders = $request->all();

            foreach($dataOrders as $order){
                $flight = Order::find($order['id']);
                $flight->status = 3;
                $flight->save();
            }

            return true;

        } catch (Throwable $e) {
            report($e);

            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
