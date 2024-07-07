<?php

use App\Http\Controllers\Frontend\BusinessController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post("webhooks/salla", \App\Http\Controllers\IndexController::class . "@sallaWebhook")->name("webhooks.salla");


Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();



    Route::get('form/تنمية-المهارات-القيادية', \App\Http\Controllers\RegisterController::class . "@registerPage")->name("registers.index");
    Route::post('form/تنمية-المهارات-القيادية', \App\Http\Controllers\RegisterController::class . "@register")->name("registers.submit");
    Route::get('form/thankyou', \App\Http\Controllers\RegisterController::class . "@thankyou")->name("registers.thankyou");


    Route::get('generate-qr-url', \App\Http\Controllers\QrController::class . "@index")->name("qr.index");
    Route::get('generate-qr-url-submit', \App\Http\Controllers\QrController::class . "@generate")->name("qr.generate");


    Route::get("سجل-نشاطك-التجاري", \App\Http\Controllers\Frontend\BusinessController::class . "@registerView")->name("frontend.businesses.register");
    Route::post("سجل-نشاطك-التجاري", \App\Http\Controllers\Frontend\BusinessController::class . "@store")->name("frontend.businesses.register");


    Route::get("تواصل-معنا", \App\Http\Controllers\ContactController::class . "@index")->name("contact.index");
    Route::post("تواصل-معنا", \App\Http\Controllers\ContactController::class . "@submit")->name("contact.submit");


    Route::get('/', \App\Http\Controllers\IndexController::class . "@home")->name("home");
    Route::post('/send', \App\Http\Controllers\GuestController::class . "@store")->name("send");
    Route::get('success', \App\Http\Controllers\GuestController::class . "@successPage")->name("invitations.sent-page");

    Route::get("invitations/create-temp-order", \App\Http\Controllers\OrderController::class . "@createTemp")->name("invitations.status");


    Route::get("invitations/view-qr-code/{token}", \App\Http\Controllers\OrderController::class . "@viewQR")->name("invitations.qr.view");

    Route::get("businesses/profile/{token}", \App\Http\Controllers\Frontend\BusinessController::class . "@profile")->name("businesses.profile");
    Route::get("invitations/redeem/{token}", \App\Http\Controllers\IndexController::class . "@redeemOrderPage")->name("invitations.redeem.page");


    Route::get("invitations/view/{token}", \App\Http\Controllers\IndexController::class . "@openInv")->name("guest.invitation.web");




    Route::resource('questions', \App\Http\Controllers\QuestionController::class);
    Route::get('questions/submit/{token}', \App\Http\Controllers\QuestionController::class . "@create")->name("questions.create");
    Route::get('question-sent', \App\Http\Controllers\QuestionController::class . "@successPage")->name("questions.sent");
    Route::get('guest/confirm/{token}', \App\Http\Controllers\GuestController::class . "@confirmGuest")->name("guest.confirm");


    Route::resource('/ratings', \App\Http\Controllers\RatingController::class);



    Route::get('send-your-questions', \App\Http\Controllers\SessionController::class . "@currentSession")->name("questions.sent");

    Route::middleware('auth')->group(function () {


        Route::get('ratings-results', \App\Http\Controllers\RatingController::class . "@results")->name("");

        Route::get('show-all-registers', \App\Http\Controllers\RegisterController::class . "@result")->name("registers.result");



        Route::post("invitations/redeem/{token}", \App\Http\Controllers\GuestController::class . "@markAttended")->name("invitations.redeem");
        Route::post("invitations/mobile-redeem/", \App\Http\Controllers\GuestController::class . "@markAttendedMobile")->name("invitations.mark-attended-mobile");


        Route::get('scan-page', \App\Http\Controllers\GuestController::class . "@scanPage")->name("guests.scan");
        Route::get('scan-fd', \App\Http\Controllers\GuestController::class . "@markAttended")->name("guests.attended");



        Route::get('/results', \App\Http\Controllers\IndexController::class . "@result")->name("results");




        Route::resource('sessions', \App\Http\Controllers\SessionController::class);
        Route::post('sessions/set-status', \App\Http\Controllers\SessionController::class . "@setStatus")->name('sessions.set-status');


        // Route::get('/dashboard',  [IndexController::class, 'dashborad'])->middleware(['verified'])->name('dashboard');
        Route::get('/dashboard', \App\Http\Controllers\IndexController::class . "@result")->name("results");

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('businesses', \App\Http\Controllers\BusinessController::class);
        Route::put("businesses/{business}/status", \App\Http\Controllers\BusinessController::class . "@updateStatus")->name("businesses.status");
        Route::get("businesses/{business}/statistics", \App\Http\Controllers\BusinessController::class . "@statistics")->name("businesses.sta");

        Route::resource('offers', \App\Http\Controllers\OfferController::class);
        Route::put("offers/{offer}/status", \App\Http\Controllers\OfferController::class . "@updateStatus")->name("offers.status");


        Route::resource('orders', \App\Http\Controllers\OrderController::class);
        Route::put("orders/{order}/status", \App\Http\Controllers\OrderController::class . "@updateStatus")->name("orders.status");


        Route::resource('products', \App\Http\Controllers\ProductController::class);
        Route::put("products/{product}/status", \App\Http\Controllers\ProductController::class . "@updateStatus")->name("products.status");



        Route::resource('orders', \App\Http\Controllers\OrderController::class);


        Route::resource('items', \App\Http\Controllers\itemController::class);
        Route::put("items/{item}/status", \App\Http\Controllers\itemController::class . "@updateStatus")->name("items.status");


        Route::resource('pages', \App\Http\Controllers\PageController::class);
        Route::put("pages/{page}/status", \App\Http\Controllers\PageController::class . "@updateStatus")->name("pages.status");



        // update later
        Route::resource('qrs', \App\Http\Controllers\ProductController::class);
        Route::put("qrs/{product}/status", \App\Http\Controllers\ProductController::class . "@updateStatus")->name("products.status");
    });

    Route::get("page/{slung}", \App\Http\Controllers\PageController::class . "@view")->name("pages.view");



    require __DIR__ . '/auth.php';
});
