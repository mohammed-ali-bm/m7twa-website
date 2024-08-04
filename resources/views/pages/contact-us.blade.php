@extends('layouts.frontend.app')


@section('content')
    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>




    <div class="flat-page container first-section site-section  ">

        <h1>تواصل معنا</h1>
        

        <x-splade-form method="POST" action="{{ route('pages.contact-us.submit') }}" stay reset-on-success class="mt-4">
            <x-splade-input label="الاسم " name="name" class="input-container "  required />
            <x-splade-input label="رقم الجوال" name="phone" class="input-container " required  />
            <x-splade-input label="البريد الالكتروني" name="email" class="input-container " />
            <x-splade-textarea label="نص الرسالة" name="message" class="input-container "  required rows="6"/>


            <p v-text="form.errors.service" class=" mt-4 d-block" style="color:red" />
            <x-splade-submit label="إرسال" class="primary-button pulse-animation mt-8 " />
        </x-splade-form>

    </div>









@endsection
