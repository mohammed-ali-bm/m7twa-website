<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\Contatc\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\Facades\SEO;


class ContactController extends Controller
{
    //


    function index(){
        SEO::title(__("all.contact_us"))->description(__('main.site_description'))
        ->keywords(__('main.site_keywords'));
        return view('layouts.frontend.pages.contact-form');
    }


    function submit(StoreContactRequest $request)
    {



        Contact::create(["status" => "not_seen"] + $request->validated());
        Toast::title(__("all.sent_successfully"))
            ->message(__("all.contact_sent"))
            ->success()
            ->rightBottom()

            ->autoDismiss(150);
        return redirect()->route('contact.index')
            ->with('success', __("all.contact_sent"));
    }

}
