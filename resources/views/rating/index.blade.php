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



                        <img style="max-width: 80%;margin:1rem auto" src="{{ asset('assets/images/') }}/logo2.png" />




                        <div class="page-content" style="text-align: center ; line-height: 30px;">
                            <p>شكراً لمشاركتك في هذا الملتقى. يرجى ملء استمارة التقييم التالية – مقترحاتك ستساعدنا في تطوير الملتقيات المستقبلية.</p>
                            <br>
                            <v-alert
                            icon="fi fi-rr-info"
                            title="تنبيه"
                            text="يرجى إختيار  التقييم من 5 حيث 1 غير راضي , 5 راضي جداً"
                            type="info"
                          ></v-alert>
                          <br>

                            <x-splade-form method="post" action="{{  route('ratings.store') }}" stay reset-on-success> 
                            <v-locale-provider rtl>

                                @foreach ($factors as $factor)
                                    @if ($factor->type == 'rating')
                                        <div class="input-group rating-input">
                                            <x-rating-label required="{{ $factor->required }}">{{ $factor->title }}</x-rating-t>
                                                <x-rating-bar name="input_{{ $factor->id }}"
                                                    prefix="rating-{{ $factor->id }}"></x-rating-bar>
                                        </div>
                                    @else
                                        <div class="input-group rating-input">
                                            <x-rating-label required="{{ $factor->required }}">{{ $factor->title }}</x-rating-t>

                                                <v-textarea v-model="form.input_{{ $factor->id }}" :counter="500"
                                                    maxlength="500" max="500" label="" rows="6"
                                                    placeholder="{{ $factor->title }}">
                                                </v-textarea>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="input-container input-group rating-input">
                                    <x-rating-label required="1">رقم الجوال الذي قمت بالتسجيل من خلاله</x-rating-t>

                                    <v-text-field v-model="form.phone" :counter="10" label="رقم الجوال (*)"
                                        maxlength="10" max="10"
                                        :rules="[
                                            value => {
                                                if (value) return true;
                                                return 'هذا الحقل مطلوب';
                                            }
                                        ]"></v-text-field>
                                </div>

                                <x-splade-errors>
                                    <p v-for="error in errors.all" class="error-message"> @{{ error[0] }}
                                    </p>
                                </x-splade-errors>

                                <x-splade-submit label="إرسال التقييم" class="primary-button"></x-splade-submit>
                            </v-locale-provider>
                            </x-splade-form>
                        </div>






                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
