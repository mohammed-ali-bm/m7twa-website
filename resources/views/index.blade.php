@extends('layouts.frontend.app')


@section('content')
    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>





    <div class="site-intro first-section site-section">


        <div class="intro-text">
            <h1 class="animated-title"> لانك تستحق الافضل </h1>
            <p class="site-description mt-4 mb-4"> مشروع عقاري فاخر يوفر شقق سكنية حديثة بمرافق متكاملة، موقع مميز، وتصميم
                عصري يلبي كافة الاحتياجات.</p>



            <div class="flex-apart  mr-auto ml-auto">
                <x-glowing-button ></x-glowing-button>
                <a href="#flats-main-cats" data-toggle='animate-section' data-target="#flats-main-cats" class="secondary-button">تصفح الشقق</a>
            </div>


        </div>

        <div class="image">
            <img src="{{ asset('assets/images/banner-bg.webp') }}" />

        </div>
    </div>




    {{-- <div class="site-sections">
        <div id="word-container">
            <div id="word-body"></div>
        </div>
    </div> --}}





    <div class="container site-section index-first-section">

        <h2 class="animated-title section-title">موقع المشروع</h2>
        <p>يقع النموذج الأول لمشروع أصول الدار في حي النسيم علي طريق الملك فهد (طريق المطار) مقابل الباحة مول</p>


        <div class="scroller distances-list" data-speed="fast" data-direction="right">
            <ul class="tag-list scroller__inner">
                @foreach (config('arrays.distances') as $item)
                    <x-distance-item :item="$item" />
                @endforeach

            </ul>
        </div>

        <div class="w-100 flex justify-content-center">
        <Link away href="https://maps.app.goo.gl/UmNZgNXz1xmQzfJc7?g_st=iw" target="_blnak" class="secondary-button mr-auto ml-auto">عرض الموقع على قوقل ماب</Link>

        </div>
    </div>


    <div class="container site-section">

        <h2 class="animated-title section-title">مزايا المشروع</h2>
        <p>المبني يتكـــون من دورين وملحق مقســـوم علـــى مبنيـــن كل مبنى يتكون مـــن مصعد ودرج مســـتقل
            عن الآخر</p>
        <div class="features-list">

            @foreach (config('arrays.features') as $name => $icon)
                <x-feature-item :name="$name" :icon="$icon" />
            @endforeach
        </div>



    </div>







    <div class="container">

        <section class="site-section" id="services-section">
            <h3 class="animated-title section-title"> ضمانات المبنى</h3>
            <div class="home-services-container">


                @foreach (config('arrays.guarantee') as $item)
                    <x-guarantee-item :item="$item" />
                @endforeach
            </div>
        </section>

    </div>







    <div class="z-30 bg-glass pt-4">


        <div class="container">
            <div class="site-section only-mobile " id="flats-main-cats">

                <h2 class="animated-title section-title">تصفح الشقق </h2>
                <div class="flex-2">
                    <div>

                        <h4>شقق مبنى P1</h4>
                        <Link href="{{ route('flats.building' , ['building' => "p1"]) }}" class="secondary-button mt-4">تصفح الشقق</Link>
                    </div>
                    <div>

                        <h4>شقق مبنى P2</h4>
                        <Link href="{{ route('flats.building' , ['building' => "p2"]) }}" class="secondary-button mt-4">تصفح الشقق</Link>
                    </div>

                </div>

            </div>
        </div>


        <div class="container">
            <div class="only-desktop">
               <div class="flex-2 gap-2">
                <div class="container">
                    <div class="site-section">
                        <h2 class="animated-title section-title">شقق المبنى P1 </h2>
                        <div class="flats-list">
                            @foreach ($p1_flats as $flat)
                                <x-flat-item :flat="$flat" />
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="site-section">
                        <h2 class="animated-title section-title">شقق المبنى P2 </h2>
                        <div class="flats-list">
                            @foreach ($p2_flats as $flat)
                                <x-flat-item :flat="$flat" />
                            @endforeach
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>



        <div class="container ">


            <section class="site-section  contact-section" id="contact-section">
                <h3 class="animated-title section-title">احجز مسكن احلامك</h3>
                <div class="block-text">
                    <p class="block-description">سجل اهتامك وسيقوم احد موظفينا بالتواصل معك
                    </p>
                </div>


                <x-splade-form method="POST" action="{{ route('registers.store') }}" stay reset-on-success class="mt-4">
                    <x-splade-input label="الاسم " name="name" class="input-container scroll-opacity" />
                    <x-splade-input label="رقم الجوال" name="mobile" class="input-container scroll-opacity" />

                    <x-splade-input label="هل لديك كود خصم؟" placeholder="اكتبه هنا" name="coupon"
                        class="input-container scroll-opacity" />

                    <p v-text="form.errors.service" class=" mt-4 d-block" style="color:red" />
                    <x-splade-submit label="احجز الآن" class="primary-button pulse-animation mt-8 " />
                </x-splade-form>
            </section>
        </div>
    </div>
@endsection
