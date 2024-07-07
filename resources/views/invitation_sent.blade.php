@extends('layouts.frontend.app')


@section('content')
    </div>

    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>

    <div class="page-container">
        <div class="py-12 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white ">


                      
                        <img style="max-width: 80%;margin:1rem auto" src="{{ asset('assets/images/') }}/logo2.png" />




                        <div class="page-content" style="text-align: center ; line-height: 30px;">
                            <p> ‏شكرا لتسجيلك في ملتقى غير السنوي للجمعيات الأهلية بمنطقة الباحة 2024
                                <br>
                                ‏تم إرسال كود الدخول على بريدك الإلكتروني (تحقق من البريد المهمل)
                                <br>
                                يرجى إبراز الكود عند الحضور
                            </p>
                        </div>






                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
