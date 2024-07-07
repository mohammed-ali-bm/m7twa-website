<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Business\StatusBusinessRequest;
use App\Http\Requests\Admin\Business\StoreBusinessRequest;
use App\Models\Business;
use Auth;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\Facades\SEO;

class BusinessController extends Controller
{
    //

    public function registerView()
    {

        SEO::title(__('all.register_your_business_title'));

        return view('layouts.frontend.businesses.register');
    }


    

    function store(StoreBusinessRequest $request)
    {


        // store logo 
        $logo = $request->file('logo');
        $logo_name = time() . '.' . $logo->extension();
        $logo->move(public_path('images'), $logo_name);


        Business::create(["logo" => $logo_name, "status" => "pending" , "token" => generateToken()  ] + $request->validated());
        Toast::title(__("all.sent_successfully"))
            ->message(__("all.business.request_sent"))
            ->success()
            ->rightBottom()

            ->autoDismiss(15);
        return redirect()->route('frontend.businesses.register')
            ->with('success', __("all.business.request_sent"));
    }

    function profile($token)
    {



        $business = Business::where("token", $token)->firstOrFail();

        $business->logo = asset("images/" . $business->logo);


        SEO::title( $business->name);


        if ($business->status == "active") {

            Auth::guard("business")->login($business);
        }

        return view("businesses.profile", compact("business"));
    }

}
