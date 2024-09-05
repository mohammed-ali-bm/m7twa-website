@extends('layouts.frontend.app')


@section('header')
<div class="page-title-section">
    <div>
        <h1 class="page-title">خدماتنا</h1>
        <p>خدمات متكاملة لراحة بالك</p>
    </div>
</div>
    @endsection


@section('content')

<div class="box-container">
    
    <div class="flex-2">
        @foreach ($services as $service)
        <x-index-service-card :title="$service->title" :content="$service->content" :image="asset('storage/services/' . $service->image)"/>
        @endforeach
    </div>
</div>
@endsection