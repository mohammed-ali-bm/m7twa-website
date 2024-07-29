<?php

namespace App\Http\Controllers;

use App\Exports\GuestsExport;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\Business;
use App\Models\Guest;
use App\Models\Item;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Register;
use App\Tables\Offers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;

class RegisterController extends Controller
{



    public function store(StoreRegisterRequest $request)
    {


        $register = Register::create($request->validated());
        $register->status = "pending";
        $register->save();
        return Toast::title(__("تم تسجيلك بنجاح"))
            ->success(__("تم تسجيل بياناتك بنجاح ، سنقوم بالتواصل معك في اقرب وقت ممكن ،شكرا لك  "))

            ->centerBottom()

            ->autoDismiss(3);
    }
}
