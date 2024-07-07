@extends('layouts.frontend.app')



@section('content')
    </div>


    <div class="page-container">
        <div class="py-12 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <h2 class="main-title">{{ __('all.register_your_business_title') }}
                        </h2>




                        <div class="page-content">

                            <x-splade-form action="{{ route('frontend.businesses.register') }}" method="POST">

                                <div class="input-item">
                                    <x-splade-input name="name" label="إسم النشاط"  required/>
                                </div>
                                <div class="input-item">
                                    <x-splade-input name="phone" label="رقم جوال المشرف" required type="number" />
                                </div>

                                <div class="input-item">
                                    <x-splade-input type="url" name="address" label="رابط النشاط من قوقل ماب" />
                                </div>


                                <div class="input-item">
                                    <x-splade-file name="logo" label="الشعار" preview filepond  required/>
                                </div>
                                <br>
                                <div class="input-item">
                                    <x-splade-submit label="سجل نشاطك" :spinner="true" class="primary-button" />
                                </div>
                            </x-splade-form>


                        </div>




                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
