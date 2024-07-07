<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guest\StoreGuestRequest;
use App\Models\Business;
use App\Models\Guest;
use App\Models\Item;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Tables\Offers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;
use Storage;

class GuestController extends Controller
{
    //


    function store(StoreGuestRequest $request)
    {

        $data = $request->validated();

        $Guest = new Guest();
        $token = generateToken();

        $arr = ["token" => $token, "created_at" => now(), "updated_at" => now()];


        $directory = '/img/qr-code/';


        $file_name = time() . generateToken() . '.png';

        if (!Storage::disk('public')->exists($directory)) {

            Storage::disk('public')->makeDirectory($directory);
        }

        $file_path =   Storage::disk('public')->path($directory . $file_name);

        $image = \QrCode::format('png')
            ->size(400)->errorCorrection('H')
            ->generate(route('invitations.redeem', $token), $file_path);


        //  get url of image





        $arr['qr_src'] = $file_name;

        $id = $Guest->insertGetId($data + $arr);

        // return redirect()->back()->with("success", "Guest added successfully");

        $email = sendEmail($request->email,  "بطاقة حضور - مجلس الجمعيات الأهلية بمنطقة الباحة",  view('emails.invitation', ['name' => $request->name, "qr_src" => $arr['qr_src'],  "token" => $token, "id" => $id])->render(), $file_path);
        // Toast::title("تم الإرسال")
        //     ->message("تم تسجيلك بنجاح ، شكراً لك ")
        //     ->success()
        //     ->rightBottom();

        return redirect()->route('invitations.sent-page');

        return $email;
    }



    function successPage()
    {

        return view('invitation_sent');
    }


    function confirmGuest($token)
    {



        $guest = Guest::where('token', $token)->first();


        if (!$guest) {
            $args['message'] = "عذراً ، لا يوجد ضيف بهذا المعرف ، يرجى التحقق من الرابط او مراسلة الدعم الفني";
        } else {
            $guest->confirmed = true;
            $guest->save();

            $args['message'] = "تم  تأكيد حضورك بنجاح ، شكراً لك ";
        }

        return view('message', $args);
    }

    function scanPage()
    {

        return view('guests.scan');
    }


    function markAttended($token)
    {

        $guest = Guest::where('token', $token)->first();

        if (!$guest) {
            $args['title'] = "لم يتم العثور";
            $args['status'] = false;
            $args['message'] = "عذراً ، لا يوجد ضيف بهذا المعرف ، يرجى التحقق من الرابط او مراسلة الدعم الفني";
        } else {
            $guest->status = "attended";
            $guest->save();
            $args['title'] = "تم بنجاح ";
            $args['status'] = true;

            $args['message'] = "تم تسجيل حضور الضيف بنجاح";
        }

        return response()->json($args, 200);
    }
    function markAttendedMobile(Request $request)
    {




        $phone = $request->phone;
        $id = $request->phone;

        $id = str_replace("20240", "", $id);

        $id = intval($id);
        $guest = Guest::where('phone', $phone)->orWhere("id",$id)->first();

        if (!$guest) {
            $args['title'] = "لم يتم العثور";
            $args['status'] = false;
            $args['message'] = "عذراً ، لا يوجد ضيف برقم الجوال هذا  ، يرجى التحقق من الرقم  او مراسلة الدعم الفني";
            Toast::title($args['title'])
                ->message($args['message'])
                ->danger()
                ->autoDismiss(4)

                ->rightBottom();
        } else {
            $guest->status = "attended";
            $guest->save();
            $args['title'] = "تم بنجاح ";
            $args['status'] = true;

            $args['message'] = "تم تسجيل حضور الضيف بنجاح";
            Toast::title($args['title'])
                ->message($args['message'])
                ->success()
                ->autoDismiss(4)
                ->rightBottom();
        }



        // return redirect()->back()->with('success',   $args['message']);
    }
}
