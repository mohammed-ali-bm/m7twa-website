@extends('layouts.frontend.app')


@section('content')
    </div>

    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>

    <div class="page-container">
        <div class="py-12 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white " style="text-align: center">


                        <h2 class="main-title">تم إنشاء الكود بنجاح</h2>
                        <img src="data:image/png;base64,{!! base64_encode(
                            QrCode::size(request()->get('size') ?? 2048)->format('png')->generate( request()->get('url') ),
                        ) !!}"  style="width:680px;display:block;margin:1rem auto;"/>

                            <br>
                        <Link href="{{ route('qr.index') }}" class="primary-button">إنشاء كود جديد</Link>

                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
