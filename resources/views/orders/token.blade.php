@extends('layouts.frontend.app')
@section('content')
    
</div>
<div class="page-container">
    <div class="py-12 app-layout">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    
    
    
                    @if (!$order)
                        <p class="error-message">{{ __('all.code_not_found') }}</p>
                    @else
    
                    <h3 class="section-title"> {!! __("all.qr.congrats") !!}</h3>
                    <div class="qr-code-wrapper">
                        <img src="data:image/png;base64,{!!  base64_encode(QrCode::size(400)->format('png')->generate(route("orders.redeem", $order->token)) ) !!}"/>
                    </div>
    
                    <h3 class="section-title"> {!! __("all.qr.offers_detials") !!}</h3>
    
                    <div class="item-container">
                   @foreach ($order->items as $item)
    
                   <div class="item-list-item {{ $item->redeemed_date != null ? "redeemed" : "active"   }}">
                        <img src="{{ asset('images/' . $item->offer->business->logo) }}" alt="{{ $item->offer->business->name }}" class="">
                        <div class="item-detials">
                            <div class="item-offer-name">
                                <h4>{{ $item->offer->name  }}</h4>
                                <p> <i class="fi fi-rr-marker"></i>{{ $item->offer->business->address }}</p>
    
                            </div>
                            <div>
                                @php
                                    $remaining = $item->total - $item->usedCount($item->offer_id , $item->order_id)
                                @endphp
                         <p><i class="fi fi-rr-ticket"></i>   المتبقي    {{ $remaining  }} تم إستخدام {{ $item->total - $remaining }}</p>
                                {{-- <p class="{{ $order->expire_date  < now() ? "error-message" : "success-message"   }}">{{$item->expire_date  < now() ? "منتهي " : "ينتهي بعد " .daysLeft($order->expire_date) . " يوم "  }}</p> --}}
                                <p class="success-message"> ينتهي بتاريخ {{ $order->expire_date }}</p>
                            </div>
                        </div>
    
                    </div>
    
                   @endforeach
                </div>
    
                    @endif
    
    
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection