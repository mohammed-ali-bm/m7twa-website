@extends('layouts.frontend.app')


@section('footer-js')
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
@endsection
@section('content')
    </div>


    <div class="page-container">
        <div class="py-12 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">


                        <div class="dotlottie-container">
                            <dotlottie-player src="{{ asset('assets/lotties/search.json') }}" background="transparent"
                                speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                        </div>

                        <h2 class="main-title">الصفحة المطلوبة غير موجودة</h2>




                        <div class="page-content">
                            الصفحة المطلوبة غير موجودة ، ربما اتبعت رابط خاطئ او انك غير مسموح لك بالوصول الى هذه الصفحة
                        </div>






                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
