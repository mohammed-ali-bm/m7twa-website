<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Order\StatusOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Service;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;

class ServiceController extends Controller
{
    //






    function index()
    {


        SEO::title("خدماتنا");
        $args=[];

        $args['services'] = Service::all();

        return view("services", $args);
    }




}
