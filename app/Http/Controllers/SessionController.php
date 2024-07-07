<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sessions\StoreSessionRequest;
use App\Models\Business;
use App\Models\Session;
use App\Models\Item;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Speaker;
use App\Tables\Offers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;
use Storage;

class SessionController extends Controller
{
    //



    function index()
    {


        $args['sessions'] = Session::withCount('speakers', "questions")->orderBy('id', "DESC")->get();
        $query = Session::where('status', 'active')->first();
        $args['activeSession'] = 0;
        if ($query) {
            $args['activeSession'] = $query->id;
        }

        return view('sessions.index',  $args);
    }
    // insert view 

    public function create()
    {

        $args['speakers'] = Speaker::orderBy('name', "ASC")->pluck('name', 'id');

        return view('sessions.create', $args);
    }

    function store(StoreSessionRequest $request)
    {

        $data = $request->validated();

        $Session = new Session();
        $token = generateToken();

        $arr = ["token" => $token, "created_at" => now(), "updated_at" => now()];


        $session = $Session->create($data + $arr);


        //  store speakers

        $session->speakers()->sync($data['speakers']);

        // redirect to show  session page
        return redirect()->route('sessions.show', $session);
    }

    function show(Session $session)
    {


        $session['questions'] = $session->questions()->orderBy('id', 'DESC')->get();



        // dd($session->questions()->toArray());
        return view('sessions.show', ['session' => $session]);
    }


    function setStatus(Request $request)
    {

        Session::where('id', "!=", -9999)->update(['status' => 'inactive']);



        $session_id = $request->session_id;


        if ($session_id > 0) {


            Session::where('id', $session_id)->update(['status' => 'active']);
            // return redirect()->route('sessions.index')->with('success', 'تم تحديث الحالة بنجاح');
        }


        Toast::title("تم التحديث")
            ->message("تم تحديث الحالة بنجاح ")
            ->success()
        ->autoDismiss(6)

            ->rightBottom();
        return redirect()->back()->with('success', 'تم تحديث الحالة بنجاح');
    }



    public function currentSession()
    {


        $args['session'] = Session::where('status', "active")->with("speakers")->first();

        $args['status'] = true;


        // dd($args['session']->toArray());
        if (!$args['session']) {
            $args['status'] = false;
        }

        return view('questions.create', $args);
    }
}
