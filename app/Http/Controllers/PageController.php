<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Page\StatusPageRequest;
use App\Http\Requests\Admin\Page\StorePageRequest;
use App\Http\Requests\Admin\Page\UpdatePageRequest;
use App\Http\Requests\StoreContactUsRequest;
use App\Models\ContactUS;
use App\Models\Page;
use App\Models\Item;
use App\Models\Offer;
use Illuminate\Http\Request;

use App\Tables\Pages;
use App\Tables\Items;
use App\Tables\Offers;
use Illuminate\Contracts\Cache\Store;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\Facades\SEO;

class PageController extends Controller
{
    //

    public function index()
    {
        return view('pages.index', [
            'pages' => Pages::class
        ]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function gallery()
    {

        SEO::title("معرض الصور");
        return view('images');
    }


    function privacy()
    {

        SEO::title("سياسة الخصوصية");
        return view("pages.privacy");
    }
    function contactUs()
    {

        SEO::title("تواصل معنا");   



        return view("pages.contact-us");
    }


    function storeContactUs(StoreContactUsRequest $request)
    {
        $data = $request->validated();

        ContactUS::create($data);

        Toast::title("شكراً لك ")->success("تم ارسال رسالتك بنجاح")->centerBottom()->autoDismiss(2);
        return redirect()->back()->with("success", "تم ارسال رسالتك  بنجاح");
    }


    function view($slug)
    {
        $page = Page::where("slug", $slug)->first();
        if ($page) {

            SEO::title($page->title)->description(__('main.site_description'))
                ->keywords(__('main.site_keywords'));

            return view("layouts.frontend.pages.view", compact("page"));
        } else {
            return redirect()->route("home");
        }
    }
}
