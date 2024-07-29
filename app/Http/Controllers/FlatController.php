<?php

namespace App\Http\Controllers;

use App\Exports\GuestsExport;
use App\Http\Requests\StoreFlatRequest;
use App\Models\Business;
use App\Models\Guest;
use App\Models\Item;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Flat;
use App\Tables\Offers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;

class FlatController extends Controller
{



    public function store(StoreFlatRequest $request)
    {


    //    create and returns id of the flat
        $flat = Flat::create($request->validated());
        // $flat->status = "pending";
        $flat->save();

        foreach ($request->attrs as $id  => $text) {


         if($text != ""){
            $attr = new \App\Models\AttrFlat();
            $attr->attr_id = $id;
            $attr->text = $text;
            $attr->flat_id = $flat->id;
            $attr->save();
         }
        }

        return Toast::title(__("تم الاضافة بنجاح"))
            ->success(__("تمت الاضافة بنجاح "))

            ->centerBottom()

            ->autoDismiss(3);
    }

    public function create()
    {

        $args['attrs'] = \App\Models\Attr::all();


        return view("form", $args);
    }
    
    public function show(Flat $flat)
    {

        
        $flat->load('attrs');
        $args['flat'] = $flat;

        // return response()->json($args,   200);
        return view("flats.view", $args);
    }

}
