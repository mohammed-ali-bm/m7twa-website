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


                        <h2 class="main-title">صفحة إنشاء كود رابط</h2>

                        <x-splade-form method="get" :default="['size' => '2048']" action="{{ route('qr.generate') }}">

                            <x-splade-input label="الرابط المطلوب" name="url" />
                            <br>

                            <x-splade-input label="حجم الصورة المطلوب" name="size" inputmode="numeric"
                                pattern="[0-9]+" />
                            <br>
                            <x-splade-submit class="primary-button" label="إنشاء الكود"></x-splade-submit>
                        </x-splade-form>

                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
