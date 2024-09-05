@extends('layouts.frontend.app')


@section('content')
    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>




    <div class="flat-page container first-section site-section  ">


        <div class="floatL col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="u-ht-xs-10"></div>
            <div class="SectionTitle pb-35">
                <h1>سياسة الخصوصية</h1>
            </div>
            <div class="pd-50">
                <div class="policyTitle pd-25">١. المقدمة</div>
                <div class="policyDescription">مرحباً بكم في موقع  اصول الدار  . توضح
                    سياسة الخصوصية هذه كيفية جمع المعلومات الشخصية وغير الشخصية واستخدامها والكشف عنها وحمايتها. باستخدام
                    خدماتنا، فإنك توافق على سياسة الخصوصية هذه.</div>
            </div>
            <div class="pd-50">
                <div class="policyTitle pd-25">٢. جمع المعلومات</div>
                <div class="policyDescription">أ) المعلومات الشخصية: قد نقوم بجمع الاسم وتفاصيل الاتصال والمعلومات الأخرى
                    ذات الصلة اللازمة لتقديم خدماتنا.<br><br>ب) المعلومات غير الشخصية: نقوم تلقائيًا بجمع بعض بيانات الجهاز
                    والاستخدام لتحليل استخدام موقع الويب والتطبيق لتحسين تجربة المستخدم.</div>
            </div>
            <div class="pd-50">
                <div class="policyTitle pd-25">٣. استخدام المعلومات</div>
                <div class="policyDescription">أ) تقديم الخدمة: نستخدم البيانات الشخصية لتوفير خدماتنا العقارية وتشغيلها
                    وتحسينها.<br><br>ب) الاتصالات: قد نستخدم معلومات الاتصال للتواصل فيما يتعلق بالخدمات والعروض والتحديثات.
                </div>
            </div>
     
            <div class="pd-50">
                <div class="policyTitle pd-25">٥. ملفات تعريف الارتباط والتقنيات</div>
                <div class="policyDescription">نحن نستخدم ملفات تعريف الارتباط والتقنيات المشابهة لتحسين تجربة التصفح وتحليل
                    كيفية تفاعل المستخدمين مع خدماتنا. يمكن للمستخدمين التحكم في تفضيلات ملفات تعريف الارتباط من خلال
                    إعدادات المتصفح الخاص بهم.</div>
            </div>
            <div class="pd-50">
                <div class="policyTitle pd-25">٦. خدمات الطرف الثالث</div>
                <div class="policyDescription">قد نستخدم خدمات الجهات الخارجية للمساعدة في تحليل كيفية استخدام المستخدمين
                    لخدماتنا. تتمتع هذه الخدمات بإمكانية الوصول إلى المعلومات الشخصية اللازمة لأداء وظائفها، وتخضع لسياسات
                    الخصوصية الخاصة بها.</div>
            </div>
            <div class="pd-50">
                <div class="policyTitle pd-25">٧. الأمن</div>
                <div class="policyDescription">نحن نطبق ضمانات أمنية لحماية المعلومات الشخصية من الوصول أو الكشف غير المصرح
                    به. ومع ذلك، لا يوجد نقل للبيانات عبر الإنترنت آمن بنسبة 100%.</div>
            </div>
            <div class="pd-50">
                <div class="policyTitle pd-25">٨. اختياراتك</div>
                <div class="policyDescription">لديك الحق في الوصول إلى معلوماتك الشخصية أو تحديثها أو حذفها. يمكنك إلغاء
                    الاشتراك في الاتصالات الترويجية.</div>
            </div>
            <div class="pd-50">
                <div class="policyTitle pd-25">٩. تحديثات السياسة</div>
                <div class="policyDescription">قد نقوم بتحديث هذه السياسة. سيتم نشر أي تغييرات على موقعنا الإلكتروني
                    وإبلاغها عبر تطبيقاتنا.</div>
            </div>
       
        </div>


    </div>








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
