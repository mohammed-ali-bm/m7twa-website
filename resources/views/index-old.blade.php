@extends('layouts.frontend.app')


@section('content')
    </div>

    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>

    <div class="site-intro">
        <div>
            <h1 class="aniamted-title" >جمالك يستحق الأفضل </h1>
            <p class="site-description" id="text-anim"> نجعل من أحلامك واقعاً، باستخدام أحدث التقنيات وأفضل الخبراء. دعنا نساعدك على
                التألق بثقة وجمال دائم.</p>

            <a href="{{ route('qr.index') }}" class="primary-button pulse-animation mt-8 btn-xl">احجزي موعد</a>

        </div>

        <div class="image">
            <img src="{{ asset('assets/images/intro-1.png') }}" />

        </div>
    </div>

    <div class="main-features" id="features-section">

        <div class="main-feature-item">
            <img src="{{ asset('assets/images/feature-1.png') }}" />
            <div>
                <h3>سرعة</h3>
                <p>توفر عائلة جنتل ليزر معالجة سريعة لإزالة الشعر حيث يمكن إجراء جلسة إزالة شعر لكامل الجسم خلال أقل من 35
                    دقيقة.</p>
            </div>
        </div>

        <div class="main-feature-item">
            <img src="{{ asset('assets/images/feature-1.png') }}" />
            <div>
                <h3>امان</h3>
                <p>توفر عائلة جنتل ليزر معالجة سريعة لإزالة الشعر حيث يمكن إجراء جلسة إزالة شعر لكامل الجسم خلال أقل من 35
                    دقيقة.</p>
            </div>
        </div>
        <div class="main-feature-item">
            <img src="{{ asset('assets/images/feature-1.png') }}" />
            <div>
                <h3>سعر مناسب</h3>
                <p>توفر عائلة جنتل ليزر معالجة سريعة لإزالة الشعر حيث يمكن إجراء جلسة إزالة شعر لكامل الجسم خلال أقل من 35
                    دقيقة.</p>
            </div>
        </div>

    </div>

    <div class="container mr-auto ml-auto mt-12">
        <div class="site-section flex-2 services-info">
            <div class="block-text">
                <span class="block-slung">نهتم لك</span>
                <h2 class="block-title">نحن نقدم لك أفضل الخدمات</h2>
                <p class="block-description">نحن نقدم لك أفضل الخدمات وأحدث التقنيات لتحقيق جمالك وتألقك بثقة وجمال دائم.
                </p>
            </div>
            <div>
                <img src="{{ asset('assets/images/section-1.png') }}" alt="" class="block-img">
            </div>
        </div>
    </div>


    <x-wave-container>
        <div class="container mr-auto  machine-info-container  ml-auto" >

            <div class="site-section flex-2 machine-info  reverse">
                <div class="block-text">
                    <span class="block-slung">حداثة وامان</span>
                    <h2 class="block-title">احدث الاجهزة والمعدات</h2>
                    <p class="block-description">لضمان افضل النتائج و الراحة عند إجراء الخدمات ، وفرنا احدث وافضل الاجهزة
                        المتخصصة.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('assets/images/section-2.png') }}" alt="" class="block-img scroll-left-element">
                </div>
            </div>
        </div>
    </x-wave-container>


    <div class="container">

        <section class="site-section" id="services-section">
        <x-figure-title class="mb-4">خدمات متنوعة</x-figure-title>

            <div class="home-services-container">
                <div class="service-item scroll-up-element">
                    <img src="{{ asset('assets/images/feature-1.png') }}" />
                    <h4>ازالة الشعر بالليزر</h4>
                </div>
                <div class="service-item scroll-up-element">
                    <img src="{{ asset('assets/images/feature-1.png') }}" />
                    <h4>ازالة الشعر بالليزر</h4>
                </div>
                <div class="service-item scroll-up-element">
                    <img src="{{ asset('assets/images/feature-1.png') }}" />
                    <h4>ازالة الشعر بالليزر</h4>
                </div>
                <div class="service-item scroll-up-element">
                    <img src="{{ asset('assets/images/feature-1.png') }}" />
                    <h4>ازالة الشعر بالليزر</h4>
                </div>
                <div class="service-item scroll-up-element">
                    <img src="{{ asset('assets/images/feature-1.png') }}" />
                    <h4>ازالة الشعر بالليزر</h4>
                </div>
                <div class="service-item scroll-up-element">
                    <img src="{{ asset('assets/images/feature-1.png') }}" />
                    <h4>ازالة الشعر بالليزر</h4>
                </div>
            </div>
        </section>


        <section class="site-section  contact-section"  id="contact-section">
            <x-figure-title>احجز الآن</x-figure-title>


            <x-splade-form method="POST" action="{{ route('registers.store') }}" stay reset-on-success>

                <x-splade-input label="الاسم " name="name" class="input-container scroll-opacity" />
                <x-splade-input label="رقم الجوال" name="mobile" class="input-container scroll-opacity" />


                <div class="input-container mt-8 mb-4"><label>المنطقة المطلوبة</label></div>

                <div class="flex-grow-con scroll-opacity">
                    <x-custom-radio name="service" value="منطقة" label="الرياض">
                        <div class="title-icon">
                            <img src="{{ asset('assets/images/body.png') }}" />
                            <p>منطقة</p>
                        </div>
                    </x-custom-radio>
                    <x-custom-radio name="service" value="الجسم كامل" label="الرياض">
                        <div class="title-icon">
                            <img src="{{ asset('assets/images/body.png') }}" />
                            <p>الجسم كامل</p>
                        </div>
                    </x-custom-radio>

                    <x-custom-radio name="service" value="الجسم بدون ظهر وبطن" label="الرياض">
                        <div class="title-icon">
                            <img src="{{ asset('assets/images/body.png') }}" />
                            <p>الجسم بدون ظهر وبطن</p>
                        </div>
                    </x-custom-radio>
                </div>
                <p v-text="form.errors.service"   class=" mt-4 d-block" style="color:red"/>

                <x-splade-submit label="احجز الآن" class="primary-button pulse-animation mt-8 " />
            </x-splade-form>
        </section>
    </div>
@endsection
