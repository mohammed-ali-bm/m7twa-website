@extends('layouts.frontend.app')


@section('content')
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class="">








                        <div class="page-content">

                            <div class="default-container" id="register-form">
                                <x-section-title>{{ $session->title }} </x-section-title>

           <div style="text-align: center;display:none">
            <img src="data:image/png;base64,{!! base64_encode(
                QrCode::size(400)->format('png')->generate(route('questions.create', $session->token)),
            ) !!}" />
    <br>
    <br>
            <a href="{{ route('questions.create', ['token' => $session->token]) }}" target="_blank"
                class="primary-button">
                <i class="fi fi-rr-arrow-globe"></i>
                فتح رابط إرسال الاسئلة
            </a>

           </div>


                                @foreach ($session->questions as $question)
                                    <div class="question-item">
                                        <div class="question-content">
                                            <h3>{{ $question->question }}</h3>
                                            <p><i class="fi fi-rr-bullseye-arrow"></i> {{ $question->speaker->name }}</p>
                                            <p><i class="fi fi-rr-circle-user"></i>
                                                {{ $question->guest->name . ' - ' . $question->guest->company }}</p>
                                        </div>
                                        {{-- <div class="question-actions">
                                        <a href="{{ route('questions.show', $question->id) }}" class="btn-circle">
                                            <i class="fi fi-rr-eye"></i>
                                        </a>
                                    </div> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>





                    </div>


                </div>



            </div>
        </div>
    </div>


    </div>
@endsection
