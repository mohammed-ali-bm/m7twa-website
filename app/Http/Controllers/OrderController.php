<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Order\StatusOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;

use ProtoneMedia\Splade\Facades\Toast;

class OrderController extends Controller
{
    //








    function store(StoreOrderRequest $request, Order $order)
    {


        // check if new logo is uploaded 



        $Order = new Order();


        $Order->fill($request->validated());
        $Order->save();

       return  Toast::title("تم الإرسال بنجاح")
            ->message("شكرا لك تم ارسال طلبك بنجاح ، سنقوم بالتواصل معك قريبا")
            ->success()
            ->centerBottom()

            ->autoDismiss(3);
    }

}
