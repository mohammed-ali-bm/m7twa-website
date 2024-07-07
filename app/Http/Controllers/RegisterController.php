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

class RegisterController extends Controller
{


    public function registerPage()
    {

        SEO::title("التسجيل في دورة تنمية المهارات القيادية");

        return view('registers.index');
    }
    public function thankyou()
    {

        SEO::title("تم تسجيلك بنجاح");
        $args['message'] = "تم تسجيلك بنجاح. سنقوم بالتواصل معك في وقت لاحق. نشكرك على اهتمامك.";


        if(Register::count() > 20) $args['message'] = "اكتمل عدد المسجلين في الدورة ، تم وضعك في قائمة الاحتياط وسيتم التواصل معك قبل موعد الدورة لتأكيد او رفض مقعدك";
        $args['page'] = 'registers';

        return view('message', $args);
    }

    public function register(StoreRegisterRequest $request)
    {

        $data = $request->validated();


        //  store statement

        $statement = $request->file('statement')->store('statements','public');
        $data['status'] = "pending";
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $data['statement'] = $statement;

        $register = Register::create($data);

        return redirect()->route('registers.thankyou');
    }

    public function result(Request $request)
    {





        SEO::description(__('main.site_description'))
            ->keywords(__('main.site_keywords'));


        $args['all_count'] = Register::count();
        $args['active_count'] = Register::where("status", "active")->count();
        $args['pending_count'] = Register::where("status", "pending")->count();
        $args['rejected_count'] = Register::where("status", "rejected")->count();
        $args['confirmed_count'] = Register::where("confirmed", 1)->count();


        $where = [];

        if ($request->has("status")) {
            $where[] = ["status", "=", $request->status];
        }


        $args['registers'] = Register::select("registers.*", \DB::raw("CONCAT('966' , phone) as phone"))->orderBy('id', 'DESC');

        if (count($where)) {

            $args['registers'] = $args['registers']->where($where);
        }

        $args['registers'] = $args['registers']->paginate(300);


        return view("registers.list", $args);
    }
}
