@extends('layouts.frontend.app')


@section('content')
 
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class="">





                   



                   


                        <div class="page-content">

                            <div class="default-container" id="register-form">
                                <x-section-title>التسجيل في دورة تنمية المهارات القيادية </x-section-title>


                                <img src="{{ asset('assets/images/banner.jpeg') }}" style="    border-radius: 16px;margin:0px auto"/>

                                <div class="transfer-info">

                                    <p>تأكد من التحويل لحساب المجلس الفرعي للجمعيات بمنطقة الباحة بمصرف الإنماء قبل البدء في تعبئة بيانات التسجيل 
                                        </p>

                                        <div class="transfer-grid">
                                            <div>
                                                <h4>المبلغ</h4>
                                                <p>450 ر.س</p>
                                            </div>
                                            <div>
                                                <h4>رقم الحساب</h4>
                                                <p><span>68202783096000</span>
                                                
                                                    <a href="#" class="copy-button"  data-content="68202783096000"><i class="fi fi-rr-copy "  data-content=""></i></a>
                                                    
                                                </p>
                                            </div>
                                            <div>
                                                <h4>رقم الايبان</h4>
                                                <p><span>SA8505000068202783096000</span>
                                                    <a href="#" class="copy-button"  data-content="SA8505000068202783096000"><i class="fi fi-rr-copy"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                </div>
                                <div style="margin:2rem 5%;">
                                    {{-- <v-alert
                                    icon="fi fi-rr-info"
                                    text="                انتهى  التسجيل ، لهذا الملتقى نلقاكم في قادم الفعاليات
                                    "
                                    type="error"
                                              ></v-alert> --}}
                                </div>
                                <x-splade-form method="post" action="{{ route('registers.submit') }}">
                               
                                    <br>
                                    <v-locale-provider rtl>
                                        <div class="input-container p-3">
                                            <v-text-field v-model="form.name" :counter="50" maxlength="50"
                                                max="50" label="الاسم الثلاثي (*)"
                                                :rules="[
                                                    value => {
                                                        if (value) return true;
                                                        return 'هذا الحقل مطلوب';
                                                    }
                                                ]"></v-text-field>
                                        </div>
                                    
                                     
                                        <div class="input-container">
                                            <v-text-field v-model="form.mobile" :counter="10" label="رقم الجوال (*)"
                                                maxlength="10" max="10"
                                                :rules="[
                                                    value => {
                                                        if (value) return true;
                                                        return 'هذا الحقل مطلوب';
                                                    }
                                                ]"></v-text-field>
                                        </div>
                                        <div class="input-container">
                                            <v-text-field v-model="form.id_number" :counter="10" label="رقم الهوية (*)"
                                                maxlength="10" max="10"
                                                :rules="[
                                                    value => {
                                                        if (value) return true;
                                                        return 'هذا الحقل مطلوب';
                                                    }
                                                ]"></v-text-field>
                                        </div>
                                        <div class="input-container">
                                            <v-text-field v-model="form.email" label="البريد الإلكتروني (*)" type="email"
                                                :rules="[
                                                    value => {
                                                        if (value) return true;
                                                        return 'هذا الحقل مطلوب';
                                                    }
                                                ]"></v-text-field>
                                        </div>
                                        <div class="input-container">
                                            <v-text-field v-model="form.company" label="اسم الجهة "
                                                type="text"></v-text-field>
                                        </div>
                                        <div class="input-container">
                                        <x-splade-file name="statement" label="صورة ايصال التحويل (*)" filepond
                                          ></x-splade-file>
                                        </div>
                                        <br>
                                  
                                    </v-locale-provider>
                                    <x-splade-errors>
                                        <p v-for="error in errors.all" class="error-message"> @{{ error[0] }}
                                        </p>
                                    </x-splade-errors>
                                    <div class="submit-button">
                                        <x-splade-submit label="تسجيل"></x-splade-submit>
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
