@extends('layouts.frontend.app')


@section('header')
<div class="page-title-section">
    <div>
        <h1 class="page-title">تواصل معنا</h1>
        <p>نسعد بملاحظاتكم و اقتراحاتكم</p>
    </div>
</div>
    @endsection


@section('content')

<div class="box-container">
    
    <x-splade-form method="POST" action="{{ route('pages.contact-us.submit') }}">
        <x-splade-input name="name" label="الاسم" />
        <x-splade-input name="phone" label="رقم الجوال" />
        <x-splade-input name="eamil" label="البريد الإلكتروني" />
        <x-splade-textarea name="message" label="نص الرسالة"   rows="6"/>
        <p v-text="form.errors.service"   class=" mt-4 d-block" style="color:red"/>

        <x-splade-submit label="إرسال" />
    </x-splade-form>
</div>
@endsection