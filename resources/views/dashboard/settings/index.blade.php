@extends('layouts.frontend.app')


@section('content')
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class=" p-3  ">


                        <h2 class="main-title">الإعدادات العامة</h2>
                        <v-locale-provider rtl>

                            <x-splade-form action="{{ route('dashboard.settings.update') }}" method="PUT" :default="$settings_pairs">


                                @foreach ($settings as $setting)
                            


                                        @if ($setting->type == 'number')
                                            <x-splade-input type="number" name="{{ $setting->key }}"
                                                label="{{ __('settings.' . $setting->key) }}" />
                                        @elseif ($setting->type == 'select')
                                            <x-splade-select name="{{ $setting->key }}"
                                                label="{{ __('settings.' . $setting->key) }}">
                                                @foreach ($setting->options as $option)
                                                    <option value="{{ $option }}">
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </x-splade-select>
                                        @elseif ($setting->type == 'toggle')
                                            <v-switch label="{{ __('settings.' . $setting->key) }}"
                                                v-model="form.{{ $setting->key }}" value="1"
                                                color="success"></v-switch>
                                        @endif

                                @endforeach

                                <x-splade-submit label="حفظ التغييرات" class="primary-button"></x-splade-submit>
                            </x-splade-form>
                        </v-locale-provider>


                    </div>


                </div>



            </div>

        </div>
    </div>
