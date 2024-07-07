<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Page\StatusPageRequest;
use App\Http\Requests\Admin\Page\StorePageRequest;
use App\Http\Requests\Admin\Page\UpdatePageRequest;
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




    function view($slung)
    {
        $page = Page::where("slung", $slung)->first();
        if ($page) {

            SEO::title($page->title)->description(__('main.site_description'))
            ->keywords(__('main.site_keywords'));

            return view("layouts.frontend.pages.view", compact("page"));
        } else {
            return redirect()->route("home");
        }
    }


    public function edit(Page $page)
    {

        $page->logo = asset("images/" . $page->logo);
        return view('pages.edit', compact("page"));
    }

    function store(StorePageRequest $request)
    {



        Page::create(["status" => "active"] + $request->validated());
        Toast::title(__("all.added"))
            ->message(__("all.page.added"))
            ->success()
            ->rightTop()

            ->autoDismiss(15);
        return redirect()->route('pages.index')
            ->with('success', __("all.page.added"));
    }


    function  checkOfferPage()
    {
    }

    function update(UpdatePageRequest $request, Page $page)
    {


        // check if new logo is uploaded 

        $extra = [];
        if ($request->hasFile("logo")) {
            $logo = $request->file('logo');
            $logo_name = time() . '.' . $logo->extension();
            $logo->move(public_path('images'), $logo_name);
            $extra = ["logo" => $logo_name];
        }



        $page->update($extra + $request->validated());
        Toast::title(__("all.updated"))
            ->message(__("all.page.updated"))
            ->success()
            ->rightTop()

            ->autoDismiss(3);
        return redirect()->route('pages.index')
            ->with('success', __("all.page.updated"));
    }

    function updateStatus(StatusPageRequest $request, Page $page)
    {





        $page->update($request->validated());
        Toast::title(__("all.updated"))
            ->message(__("all.page.updated"))
            ->success()
            ->rightTop()

            ->autoDismiss(3);
        return redirect()->route('pages.index')
            ->with('success', __("all.page.updated"));
    }

    function destroy(Page $page)
    {
        $page->delete();
        // Toast::title(__("all.deleted"))
        // ->message(__("all.page.deleted"))
        // ->success()
        // ->rightTop()
        // 
        // ->autoDismiss(15);
        return redirect()->route('pages.index')
            ->with('success', __("all.page.deleted"));
    }
}
