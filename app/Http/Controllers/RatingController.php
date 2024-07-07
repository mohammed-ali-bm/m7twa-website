<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rating\StoreRatingRequest;
use App\Models\Guest;

use App\Models\Rating;
use App\Models\RatingFactor;
use App\Models\RatingFactorValue;

use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;

class RatingController extends Controller
{
    //






    function index()
    {



        SEO::title('تقييم الملتقى')->description("ملتقى غير السنوي بمنطقة الباحة");
        $args['factors'] = RatingFactor::where('status', "active")->get();



        return view('rating.index', $args);
    }


    function store(StoreRatingRequest $request)
    {


        $fields = $request->validated();
        $guest = Guest::where('phone', $fields['phone'])->first();
        $Rating = new Rating();
        $Rating->guest_id = $guest->id;
        $Rating->rate = 0;
        $Rating->status = "active";
        $Rating->save();
        $id = $Rating->id;

        $factors = RatingFactor::where('status', "active")->get();
        $insert = [];
        foreach ($factors as $factor) {
            $insert[] = [
                'rating_id' => $id,
                'rating_factor_id' => $factor->id,
                'value' => $fields["input_" . $factor->id]
            ];
        }

        RatingFactorValue::insert($insert);


        Toast::title("تم إرسال تقييمك ")
            ->message("تم  إرسال تقييمك بنجاح  ، شكراً لكم ")
            ->success()
            ->autoDismiss(4)
            ->rightBottom();
    }


    function results()
    {


        $args['ratings'] = Rating::with('guest', 'factors.factor')->get();
        // echo $args['ratings'][0]['factors'][0]['factor']['name'];
        // return response()->json($args, 200);

        return view('layouts.frontend.rating.result', $args);
    }
}
