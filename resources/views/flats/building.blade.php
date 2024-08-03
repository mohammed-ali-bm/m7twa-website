@extends('layouts.frontend.app')


@section('content')
    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>




    <div class="flat-page container first-section  ">



        <h1>شقق المبنى {{ $building }}</h1>

        <br>
        <br>

        <div class="flats-list">

            @foreach ($flats as $flat)
                <x-flat-item :flat="$flat" />
            @endforeach
        </div>



    </div>

    <br>
    <br>
    <br>





    <div class="z-30 bg-glass pt-4">


        <div class="container ">


            <section class="site-section  contact-section" id="contact-section">
                <h3 class="animated-title section-title">سجل اهتمامك</h3>
                <div class="block-text">
                    <p class="block-description">سجل اهتامك وسيقوم احد موظفينا بالتواصل معك
                    </p>
                </div>


                <x-splade-form method="POST" action="{{ route('registers.store') }}" stay reset-on-success class="mt-4">
                    <x-splade-input label="الاسم " name="name" class="input-container scroll-opacity" />
                    <x-splade-input label="رقم الجوال" name="mobile" class="input-container scroll-opacity" />
                    <x-splade-input label="هل لديك كود خصم؟" name="coupon" class="input-container scroll-opacity" />

                    <x-splade-input type="hidden" name="flat_id" class="" />

                    <p v-text="form.errors.service" class=" mt-4 d-block" style="color:red" />
                    <x-splade-submit label="إرسال" class="primary-button pulse-animation mt-8 " />
                </x-splade-form>
            </section>
        </div>
    </div>
@endsection
