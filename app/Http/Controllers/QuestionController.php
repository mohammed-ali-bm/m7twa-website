<?php

namespace App\Http\Controllers;

use App\Http\Requests\Questions\StoreQuestionRequest;
use App\Models\Session;
use App\Models\Question;

use App\Models\Guest;
use App\Tables\Offers;
use ProtoneMedia\Splade\Facades\Toast;

use Storage;

class QuestionController extends Controller
{
    //


    // insert view 

    public function create($token)
    {


        $args['session'] = Session::where('token', $token)->with("speakers")->first();


        // dd($args['session']->toArray());
        if (!$args['session']) {
            abort(404);
        }

        return view('questions.create', $args);
    }

    function store(StoreQuestionRequest $request)
    {

        $data = $request->validated();

        $Question = new Question();
        $token = generateToken();
        $session = Session::where('token', $data['session_token'])->first();
        $guest = Guest::where('phone', $data['mobile'])->first();
        $arr = ["created_at" => now(), "updated_at" => now(), "session_id" => $session->id, "guest_id" =>   $guest->id, "status" => "pending"];


        $Question = $Question->create($data + $arr);


        Toast::title("تم الإرسال")
        ->message("تم إرسال سؤالك بنجاح ")
        ->success()
        ->autoDismiss(6)
        ->rightBottom();

        // redirect to show  Question page
        return redirect()->route('questions.sent', $Question);
    }


    function successPage(){

        return view('questions.success');
    }
}
