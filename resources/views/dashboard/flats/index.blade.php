@extends('layouts.frontend.app')


@section('content')
    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>




    <div class="flat-page container first-section  ">



        <h1>قائمة الشقق</h1>

        <br>
        <br>

        <div class="flats-list">

            @foreach ($flats as $flat)
                <x-flat-item :flat="$flat"  showOptions="true"/>
            @endforeach
        </div>



    </div>





@endsection
