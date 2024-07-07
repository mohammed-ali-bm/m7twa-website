@extends('layouts.frontend.app')


@section('content')
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class="">








                        <div class="page-content">

                            <div class="default-container" id="register-form">


                                @if (!$status)
                                    <x-section-title>إرسال الأسئلة </x-section-title>
                                    <p class="error-message">عذراً ارسال الاسئلة غير متاح في الوقت الحالي ، يرجى زيارة الرابط
                                        مجدداً وقت إتاحة إرسال الأسئلة للجلسة</p>
                                @else
                                    <x-section-title> {{ $session->title }} </x-section-title>
                                    <x-splade-form method="post" action="{{ route('questions.store') }}" :default="['session_token' => $session->token]">
                                        {{-- <p>اهلاً بك في ملتقى غير السنوي للجمعيات الأهلية بمنطقة الباحة ، يرجى كتابة جميع
                                                البيانات بدقة </p> --}}
                                        <br>

                                        <x-splade-input name="session_token" v-model="form.session_token" type="hidden" />
                                        <v-locale-provider rtl>
                                            <div class="input-container p-3">
                                                <v-text-field v-model="form.mobile" :counter="10" maxlength="10"
                                                    max="10" label="رقم الجوال الذي قمت بالتسجيل من خلاله "
                                                    placeholder="بالصيغة 05xxxxxxxx"
                                                    :rules="[
                                                        value => {
                                                            if (value) return true;
                                                            return 'هذا الحقل مطلوب';
                                                        }
                                                    ]"></v-text-field>
                                            </div>

                                            <div class="input-container p-3">
                                                <label>السؤال موجه لمن (من الضيوف)؟</label>


                                                <div class="speakers-radio-container">
                                                    @foreach ($session->speakers as $speaker)
                                                        <div class="speaker-radio-item">
                                                            <x-custom-radio name="speaker_id" :value="$speaker->id">
                                                                <h3>{{ $speaker->name }}</h3>
                                                                <p>{{ $speaker->job_title . ' - ' . $speaker->company }}</p>
                                                            </x-custom-radio>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>


                                            <div class="input-container p-3">
                                                <v-textarea v-model="form.question" :counter="500" maxlength="500"
                                                    max="500" label="نص السؤال " rows="6" placeholder=""
                                                    :rules="[
                                                        value => {
                                                            if (value) return true;
                                                            return 'هذا الحقل مطلوب';
                                                        }
                                                    ]"></v-textarea>
                                            </div>



                                        </v-locale-provider>
                                        <x-splade-errors>
                                            <p v-for="error in errors.all" class="error-message"> @{{ error[0] }}
                                            </p>
                                        </x-splade-errors>
                                        <div class="submit-button">
                                            <x-splade-submit label="إرسال السؤال"></x-splade-submit>
                                        </div>
                                    </x-splade-form>
                                @endif


                            </div>
                        </div>





                    </div>


                </div>



            </div>
        </div>
    </div>


    </div>
@endsection
