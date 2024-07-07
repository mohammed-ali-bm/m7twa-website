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



                        <img style="max-width: 80%;margin:1rem auto" src="{{ asset('assets/images/') }}/org-logo.png" />

                        @if (@$page =="registers")

                        <img src="{{ asset('assets/images/banner.jpeg') }}" style="    border-radius: 16px;margin:0px auto"/>

                        @endif

                        <div class="page-content" style="text-align: center ; line-height: 30px;">
                            {{ $message }}
                        </div>






                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
