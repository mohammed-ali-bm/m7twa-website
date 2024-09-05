@extends('layouts.frontend.app')


@section('content')
    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>



 

    <div class="flat-page container first-section  ">





        {{-- <h1> {{ $flat->name }}</h1> --}}

        <img src="{{ asset('assets/images/banners/' . $flat->banner) }}?version=1.0.0" class="view-flat-banner"/>

        


        <div class="large-flex-3">
            <div class="block-title-container">

                <h2>معلومات الشقة</h2>
    
            @foreach ($flat->attrs as $attr)
                
         
                    <div class="view-flat-meta-item">
                        <div>
                            <img src="{{ asset('assets/images/icons/led.png') }}" />
                            {{ $attr->name }}
                        </div>
                        <span>{{ $attr->text }}</span>
                    </div>
                @endforeach
    
    
    
            </div>
    
    
            <div class="block-title-container">
    
                <h2>ضمان الشقة من  المورد</h2>
    
                @foreach (config('arrays.flat_guarantee') as $item)
                    <div class="view-flat-meta-item">
                        <div>
                            <img src="{{ asset('assets/images/icons/led.png') }}" />
                            {{ $item['title'] }}
                        </div>
                        <span>{{ $item['years'] }} سنة</span>
                    </div>
                    @endforeach
    
    
    
            </div>
    
    
    
    
            <div class="block-title-container">
    
                <h2>تفاصيل الموقع</h2>
    
                @foreach (config('arrays.distances') as $item)
    
                    <div class="view-flat-meta-item">
                        <div>
                            <img src="{{ asset('assets/images/icons/led.png') }}" />
                            {{ $item['title'] }}
                        </div>
                        <span> {{ $item['distance'] . " " . $item['unit'] }} </span>
                    </div>
                    @endforeach
    
    
    
    
            </div>
        </div>

    </div>




    <div class="z-30 bg-glass pt-4">


        <div class="container ">


            <section class="site-section  contact-section" id="contact-section">
                <h3 class="animated-title section-title">احجز هذه الشقة</h3>
                <div class="block-text">
                    <p class="block-description">سجل اهتامك وسيقوم احد موظفينا بالتواصل معك
                    </p>
                </div>


                <x-splade-form method="POST" action="{{ route('registers.store') }}" stay reset-on-success class="mt-4" :default="[ 'flat_id' => $flat->id ]">
                    <x-splade-input label="الاسم " name="name" class="input-container scroll-opacity" />
                    <x-splade-input label="رقم الجوال" name="mobile" class="input-container scroll-opacity" />
                    <x-splade-input label="هل لديك كود خصم؟" placeholder="اكتبه هنا" name="coupon" class="input-container scroll-opacity" />
                    
                    <x-splade-input type="hidden"  name="flat_id" class="" />

                    <p v-text="form.errors.service" class=" mt-4 d-block" style="color:red" />
                    <x-splade-submit label="احجز الآن" class="primary-button pulse-animation mt-8 " />
                </x-splade-form>
            </section>
        </div>
    </div>
@endsection
