<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use QrCode;
use Carbon\Carbon;
class Order extends Model
{
    use HasFactory;


    protected $table = 'orders';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "product_id", 'store_order_id', 'username', "mobile", "email", "sms_sent", "expire_date",  "status"];


    function product()
    {
        return $this->belongsTo(Product::class);
    }

    function items()
    {
        return $this->hasMany(Item::class);
    }

    function itemsAll()
    {
        // return $this->hasMany(Item::class)->withCount()->with("offer");
    }

    function itemsSummary()
    {

        // build new query to get the summary of the items

        $query = DB::table("items")->join("offers", "offers.id", "=", "items.offer_id")->where("items.order_id", $this->id)->select(
            "items.offer_id",
            DB::raw('COUNT(items.offer_id) as total_sum'),
            DB::raw('COUNT(CASE WHEN items.redeemed_date IS NOT NULL THEN items.offer_id ELSE 0 END) as used_sum')
        )->groupBy("items.offer_id",)->get();


        return $query;
    }

    function newOrder()
    {

        try {


            $product = Product::with("productOffer.offer")->find($this->product_id);



            if ($product->expire_date < now()  && $product->validity_type == "date") {
                return ['status' => false, "message" => "المنتج هذا منتهي الصلاحية" . $product->name];
            }

            if ($product->max_usage != null && $product->max_usage < $product->order->count() ) {
                return ['status' => false, "message" => "تم إستخدام الحد الاقصى من المنتج" . $product->name];
            }

            $order = new Order();
            $order->product_id = $this->product_id;
            $order->store_order_id = $this->store_order_id;
            $order->username = $this->username;
            $order->mobile = $this->mobile;
            $order->email = $this->email;
            $order->sms_sent = $this->sms_sent ?? false;
            $order->expire_date =  $product->validity_type == "duration" ?  Carbon::now()->addDays($product->duration)  :   $product->expire_date;

            $order->status = $this->status ?? "active";
            $order->token = generateToken();

            // $qrCode =;
            $order->qr_code =   "data:image/png;base64";

            $order->save();

            // store and generate qr for the order 





            $offers = $product->productOffer;

            foreach ($offers as $offer) {

                for ($i = 0; $i < $offer->count; $i++) {
                    $item = new Item();
                    $item->order_id = $order->id;
                    $item->offer_id = $offer->offer_id;
                    $item->business_due = $offer->offer->business_due;
                    $item->expire_date = $product->expire_date;
                    $item->status = "active";
                    $item->save();
                }
            }

            return route("orders.qr.view", $order->token);
        } catch (\Exception $e) {


            dd($e->getMessage());
            return false;
        }

        return true;
    }
}
