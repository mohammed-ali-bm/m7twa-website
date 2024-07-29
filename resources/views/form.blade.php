@extends('layouts.frontend.app')


@section('content')
    <x-splade-script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></x-splade-script>




    <div class="flat-page container first-section  ">



        <h1> اضافة شفة جديدة </h1>

        <x-splade-form method="POST" action="{{ route('flats.store') }}" stay>



     <div class="inupt-container">
        <x-splade-input name="name" label="الاسم" />
        <x-splade-input name="area" label="المساحة" />
        <x-splade-input name="price" label="السعر" />

        @foreach ($attrs as $attr)
            <x-splade-input name="attrs[{{ $attr->id }}]" label="{{ $attr->name }}" />
        @endforeach

        <x-splade-submit label="إرسال" />
    </x-splade-form>
     </div>
    </div>
@endsection
