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

class QrController extends Controller
{
    //

    function index(){
        SEO::title("صفحة إنشاء كود QR");

        return view('qr.index');
    }

    function generate(Request $request)
    {
        
        SEO::title("صفحة إنشاء كود QR");
        $args = $request->all();

        return view('qr.generate' , $args);
        
    }
}   
