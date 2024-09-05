<?php

namespace App\Http\Controllers;

use App\Exports\RegistersExport;
use App\Models\Business;
use App\Models\Coupon;
use App\Models\Flat;
use App\Models\Guest;
use App\Models\Item;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Register;
use App\Models\Service;
use App\Tables\Offers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use ProtoneMedia\Splade\Facades\SEO;

class IndexController extends Controller
{
    //


    function home()
    {



        $args=[];

        $args['services'] = Service::all();

        return view("index", $args);
    }

    function view()
    {

        return view("flats.view");
    }

    function sallaWebhook(Request $request)
    {

        // get response body 



        try {
            $order = $request->getContent();
            $file = "webhook.json";


            $current = file_get_contents(storage_path() . "/app/" . $file);

            file_put_contents(storage_path() . "/app/" . $file,  $current . "\n \n \n    request addes . \n  " . $order);

            $completedOrderOnly = true;

            $orderArr = json_decode($order, true);

            $username = $orderArr['data']['customer']['first_name'] . " " . $orderArr['data']['customer']['last_name'];
            $email = $orderArr['data']['customer']['email'];
            $mobile = $orderArr['data']['customer']['mobile'];
            $status = $orderArr['data']['status']['slug'];
            $orderID = $orderArr['data']['id'];
            // foreach through  items and create orders for them 


            if ($completedOrderOnly && $status != "completed") {

                echo "order error";

                return;
            }
            foreach ($orderArr['data']['items'] as $item) {


                $product =  Product::where("store_p_id", $item['sku'])->first();

                if (!$product) {

                    //   send notification to admin 
                    echo "package not found";

                    sendLog('لم يتم العثور على بكج بإسم' . $item['name'] . " رقم الطلب في سلة :" . $orderArr['data']['id']);
                    continue;
                } else {

                    if ($product->status != "active" || $product->expire_date < date("Y-m-d")) {
                        //   send notification to admin 
                        sendLog('قام عميل بطلب ' . $item['name'] . " لكن حالة البكج في الموقع غير متاح او منتهي ، " . " رقم الطلب في سلة :" . $orderArr['data']['id']);
                        continue;
                    } else {



                        $Order = new Order();

                        $Order->product_id  = $product->id;
                        $Order->store_order_id  =   $orderID ?? "";
                        $Order->username  = $username;
                        $Order->mobile  = $mobile;
                        $Order->email  = $email;
                        $Order->sms_sent  = false;
                        $Order->status  = "active";
                        $Order->qr_code = "";
                        $create =  $Order->newOrder();

                        if ($create == true) {
                            echo  "order created";

                            $sms  = sendSMS($mobile,  __("all.order_placed", ['link' => $create]));

                            if ($sms['status']) {

                                echo "sms  sent";
                                // update sms sent to true in  the latest order by id 
                                Order::latest()->first()->update(["sms_sent" => true]);
                            } else {


                                echo "sms not sent";


                                // return redirect()->route('orders.index')
                                // ->with('error', __("all.sms_not_sent"));
                            }
                        } else {

                            sendLog($create['message']);
                        }
                    }
                }
            }
        } catch (\Exception $e) {

            sendLog('حصلت مشكلة في رابط التحقق من طلبات سلة ،  يرجى التأكد من وجود طلبات  في او بعد قليلاً من الوقت' .  Carbon::now()  . "  و إنشاء الطلب يدوياً في حالة وجود طلب غير مسلم لعميل ، نص الخطأ" . $e->getMessage());
        }
    }
    public function test()
    {




        SEO::description(__('main.site_description'))
            ->keywords(__('main.site_keywords'));

        return view("layouts.frontend.index", [
            "layout" => "frontend",
            // 'offers' => Offers::class,
            // "businesses" => Business::where("status", "active")->get(),

        ]);
    }
    public function result(Request $request)
    {



        if (in_array($request->set_status, ['pending', "done", "not_interested",])) {


            $register = Register::find($request->id);

            if ($register) {
                $register->status = $request->set_status;
                $register->save();

                if ($request->set_status == "done") {

                    // update the flat 

                    $flat = Flat::find($register->flat_id);
                    if ($flat) {
                        $flat->status = "done";
                        $flat->save();
                    }
                }
            }
        }

        // $guests = Guest::select('name', 'email', 'phone',"token")->get()->toArray();

        // for ($i = 0; $i < count($guests); $i++) {


        //     $guests[$i]['confirmation_url'] = route("guest.confirm", $guests[$i]['token']);
        // }


        // return response()->json($guests, 200);


        SEO::description(__('main.site_description'))
            ->keywords(__('main.site_keywords'));


        $args['all_count'] = Register::count();
        $args['done_count'] = Register::where("status", "done")->count();
        $args['pending_count'] = Register::where("status", "pending")->count();
        $args['not_interested_count'] = Register::where("status", "withdraw")->count();


        $args["coupons"] = Coupon::all();
        $args["flats"] = Flat::all();

        $where = [];

        if ($request->has("status")) {
            $where[] = ["status", "=", $request->status];
        }


        if ($request->has("flat_id") && $request->flat_id != "") {

            $where[] = ["flat_id", "=", $request->flat_id];
        }

        if ($request->has("coupon") && $request->coupon != "") {

            $where[] = ["coupon", "=", $request->coupon];
        }

        $args['registers'] = Register::leftJoin("flats", "flats.id", "=", "registers.flat_id")->select("registers.*", \DB::raw("CONCAT('966' , mobile) as mobile"), "flats.name as flat_name", "flats.building as building")->with("flat",)->orderBy('id', 'DESC');

        if (count($where)) {

            $args['registers'] = $args['registers']->where($where);
        }

        $args['registers'] = $args['registers']->paginate(300);




        if ($request->has('export')) {

            return Excel::download(new RegistersExport($args['registers']), 'المسجلين.xlsx');
        }
        return view("layouts.frontend.result", $args);
    }
    // public function result()
    // {




    //     return view('emails.invitation', ['name' => "gello", "token" => "dfdf", "qr_src" => "1715360309372df4d3f97c8ea07f6311fbc47e9e97.png"]);
    // }
    public function openInv($token)
    {


        $guest = Guest::where("token", $token)->first();

        if (!$guest) {
            abort(404);
        }

        return view('emails.invitation', ['name' => $guest->name, "token" => $guest->token, "qr_src" => $guest->qr_src, "id" => $guest->id]);
    }
    public function dashborad()
    {

        return view('dashboard', [
            'businesses' => Business::orderBy('id', 'DESC')->where("status", "pending")->limit(10)->get(),
            'orders' => Order::orderBy('id', 'DESC')->limit(10)->get(),
            "offers_count" => Offer::count(),
            "businesses_count" => Business::count(),
            "products_count" => Product::count(),
        ]);
    }





    function redeemOrderPage($token, Request   $request)
    {

        return view('not_allowed');
    }


    function redeemOrder($token, Request   $request)
    {


        // this route will first check if business is logged  , check if he has valid offer , then redeem the offer

        $return = [];

        if (!auth()->guard('business')->check()) {

            return response()->json(['status' => false, "message" => __("all.business_login")], 200,);
        }


        $business = auth()->guard('business')->user();

        $order = Order::where("token", $token)->first();


        if (!$order) {
            return response()->json(['status' => false, "message" => __("all.order_not_found")], 200,);
        }


        if ($order->status != "active") {

            return response()->json(['status' => false, "message" => __("all.order_inactive")], 200,);
        }

        $item = Item::with("offer")->whereHas(
            "offer",
            function ($q) use ($business) {
                $q->where("business_id", $business->id);
            }
        )->where("order_id", $order->id)->whereNull("redeemed_date")->first();


        if (!$item) {
            return response()->json(['status' => false, "message" => __("all.item_not_found")], 200,);
        }

        if (!$item && Item::whereHas(
            "offer",
            function ($q) use ($business) {
                $q->where("business_id", $business->id);
            }
        )->where("order_id", $order->id)->whereNotNull("redeemed_date")->count() > 1) {

            return response()->json(['status' => false, "message" => __("all.order_redeemed", ['date' => $item->redeemed_date])], 200,);
        }
        if ($item->status != "active") {

            return response()->json(['status' => false, "message" => __("all.item_inactive")], 200,);
        }




        $item->redeemed_date =  date("Y-m-d H:i:s");
        $item->status = "inactive";
        $item->save();


        $remaining = Item::where("order_id", $order->id)->where("offer_id", $item->offer_id)->whereNull("redeemed_date")->count();

        return response()->json(['status' => true, "message" => __("all.order_redeemed_successfully", ["name" => nl2br($item->offer->name), "description" => nl2br($item->offer->description), "remaining" => $remaining])], 200,);


        // return redirect()->route("orders.index")->with("success", "Order Redeemed Successfully");

    }
}
