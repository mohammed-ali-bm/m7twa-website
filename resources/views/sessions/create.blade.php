@extends('layouts.frontend.app')


@section('content')
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class="">








                        <div class="page-content">

                            <div class="default-container" id="register-form">
                                <x-section-title>إضافة جلسة جديدة </x-section-title>
                                <x-splade-form method="post" action="{{ route('sessions.store') }}">
                                    {{-- <p>اهلاً بك في ملتقى غير السنوي للجمعيات الأهلية بمنطقة الباحة ، يرجى كتابة جميع
                                        البيانات بدقة </p> --}}
                                    <br>
                                    <v-locale-provider rtl>
                                        <div class="input-container p-3">
                                            <v-text-field v-model="form.title" :counter="255" maxlength="255"
                                                max="255" label="عنوان الجلسة"
                                                :rules="[
                                                    value => {
                                                        if (value) return true;
                                                        return 'هذا الحقل مطلوب';
                                                    }
                                                ]"></v-text-field>
                                        </div>
                                        <div class="input-container p-3">
                                            <x-splade-select name="speakers[]" :options="$speakers" label="إختر  المتحدثين" choices multiple />

                                        </div>

                                    </v-locale-provider>
                                    <x-splade-errors>
                                        <p v-for="error in errors.all" class="error-message"> @{{ error[0] }}
                                        </p>
                                    </x-splade-errors>
                                    <div class="submit-button">
                                        <x-splade-submit label="إضافة"></x-splade-submit>
                                    </div>
                                </x-splade-form>
                            </div>
                        </div>





                    </div>


                </div>



            </div>
        </div>
    </div>


    </div>
@endsection
