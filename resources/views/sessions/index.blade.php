@extends('layouts.frontend.app')


@section('content')
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class="">








                        <div class="page-content">

                            <div class="default-container" id="register-form">
                                <x-section-title>جلسات الملتقى </x-section-title>
                                <x-splade-form :default="['session_id' => $activeSession]" method="POST"
                                    action="{{ route('sessions.set-status') }}" stay>
                                    <div class="change-sesison-status-section">
                                        <div>
                                            <x-splade-select name="session_id"  :options="['0' => 'لم تبدأ الجلسات بعد'] +
                                                    $sessions->pluck('title', 'id')->toArray()"
                                                label="لتعيين الجلسة الحالية ، إختر الجلسة "></x-splade-select>

                                        </div>
                                        <x-splade-submit class="primary-button" label="تعديل"></x-splade-submit>

                                    </div>

                                </x-splade-form>
                                <div style="text-align: center">

                                    <Link href="{{ route('sessions.create') }}" class="primary-button">إضافة جلسة</Link>
                                </div>
                                @foreach ($sessions as $session)
                                    <div class="question-item">
                                        <div class="question-content">
                                            <h3>
                                                <Link href="{{ route('sessions.show', ['session' => $session]) }}">
                                                {{ '#' . $session->id . ' - ' . $session->title }}</Link>
                                            </h3>


                                            <div class="flex-2">
                                                <p><i class="fi fi-rr-users-alt"></i> {{ $session->speakers_count }} ضيف</p>
                                                <p><i class="fi fi-rr-info"></i> {{ $session->questions_count }} سؤال </p>

                                            </div>
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
