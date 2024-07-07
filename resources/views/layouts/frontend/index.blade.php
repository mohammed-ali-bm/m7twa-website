@extends('layouts.frontend.app')

@section('footer-js')
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css'>

    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type='text/javascript'>
        $(function() {
            $('.clients-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                rtl: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    460: {
                        items: 2,
                    },
                    767: {
                        items: 3,
                    },

                    992: {
                        items: 4,
                    }

                },
                nav: false,
                navText: ['<i class="fi fi-rr-angle-small-right"></i>',
                    '<i class="fi fi-rr-angle-small-left"></i>'
                ],

            });

        })
    </script>
    <script>
        gsap.registerPlugin(SplitText);
        gsap.registerPlugin(ScrollTrigger);







        const heading = document.querySelector(".words-fade-effect");
        const headingSplitText = new SplitText(heading, {
            type: "words"
        });


        console.log(headingSplitText);
        const headingWords = headingSplitText.words;

        gsap.from(headingWords, {
            filter: "blur(0.15em)",
            stagger: {
                from: "right", // Stagger from right to left
                each: 0.1
            },
            duration: (i) => .25 + i * 0.2,
            ease: "power2.inOut"
        });





        gsap.from(headingWords, {
            xPercent: ((i) => -(i + 1) * 20), // Animate from right to left
            opacity: 0,
            stagger: {
                from: "right",
                each: 0.1
            },
            duration: (i) => 1 + i * 0.2,
            ease: "power2.out"
        }, "<");
    </script>
@endsection
@section('content')
    <section class="video-container">
        <video class="fullscreen" src="{{ asset('assets/videos/1.mp4') }}" playsinline autoplay muted loop>
        </video>

        <div class="content">

            <img style="max-width: 80%;margin:1rem auto" src="{{ asset('assets/images/') }}/logo2.png" />
            <h3>سجل الآن وانتهز الفرصة</h3>

            <div class="info">
                <p class="date"><span> الأربعاء 22 / 05 / 2024 <br>من 9:00 صباحاً إلى 4:00 مساءً</span></p>
                <p class="place"><span>فندق المنتزه بارك - بلجرشي</span></p>
            </div>

            {{-- <a href="#register-form" class="btn" data-toggle='animate-section' data-target="#register-form">
                سجل الآن
            </a> --}}

            <div style="margin:2rem 5%;">
                <v-alert
                icon="fi fi-rr-info"
                text="                انتهى  التسجيل ، لهذا الملتقى نلقاكم في قادم الفعاليات
                "
                type="error"
                          ></v-alert>
            </div>
            <div class="">

            </div>

     
            </div>

    </section>


    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class="">





                        <div class="default-container">

                            <x-section-title icon="diamond.png">الراعي الماسي</x-section-title>


                            <img class="" style="margin:4rem auto;max-width:200px"
                                src="{{ asset('assets/images/partners/diamond.png') }}" />

                        </div>

                        <div class="default-container about-section">

                            <x-section-title>عن الملتقى</x-section-title>

                            <p>سيناقش الملتقى عدد من المحاور تتضمن تحديد الاحتياج وقياس الأثر، ودور الجهات المشرفة فنياً
                                في
                                تمكين الجمعيات الأهلية، ودور المؤسسات المانحة في احداث الأثر، والأفاق الجديدة للجمعيات
                                الاهلية في مجالات الاستثمار الاجتماعي والاسناد الحكومي والذكاء الاصطناعي والتنمية
                                الاجتماعية
                                في منطقة الباحة.</p>
                            <br>

                            <p>
                                ومن المؤمل أن يثمر هذا الملتقى عن نتائج إيجابية تواكب التطور الملحوظ في القطاع غير
                                الربحي
                                بالمملكة بشكل عام والجمعيات الأهلية بشكل خاص، وتقديم نماذج مواكبة للتحولات ومتناغمة مع
                                التنمية الوطنية والنمو البشري ورفع جدارات المنتمين للجمعيات الأهلية.
                            </p>
                        </div>
                        <div class="default-container">

                            <x-section-title>محاور النقاش</x-section-title>

                            <div class="topics-container">
                                @foreach (getTopicsArr() as $i => $topic)
                                    <div class="topic-item">
                                        <span class="count">0<span class="secondary-color counter-up"
                                                data-count="{{ $i + 1 }}">{{ $i + 1 }}</span>
                                        </span>
                                        <h4><span>{{ $topic['title'] }}</span></h4>
                                        <p>{{ $topic['content'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="default-container">

                            <x-section-title>الأهداف</x-section-title>

                            <div class="goals-container">
                                @foreach (goalsArr() as $i => $topic)
                                    <div class=" goal-item scroll-fade-element">

                                        <img src="{{ asset('assets/images/goals/' . $topic['icon']) }}" />
                                        <p>{{ $topic['title'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="default-container">

                            <x-section-title>تعرف على المتحدثين</x-section-title>


                            <div class="speakers-container">
                                @for ($i = 1; $i <= 16; $i++)
                                    @if ($i != 9)
                                        <img class="scroll-scale-element" style="margin:1rem auto;"
                                            src="{{ asset('assets/images/speakers/' . 'File _000' . ($i < 10 ? '0' . $i : $i) . '.webp?version=1.0.1') }}" />
                                    @endif
                                @endfor
                            </div>
                        </div>


                        <div class="default-container">

                            <x-section-title>شريك داعم</x-section-title>


                            <div class="speakers-container partners-container">
                                @for ($i = 1; $i <= 7; $i++)
                                    <img class="" style="margin:1rem auto;"
                                        src="{{ asset('assets/images/partners/' . 'partner_000' . ($i < 10 ? '0' . $i : $i) . '.png?version=1.0.2') }}" />
                                @endfor
                            </div>
                        </div>



                        <div class="default-container">

                            <x-section-title>شريك راعي</x-section-title>

                            <div class="speakers-container partners-container">
                            <img class="" style="margin:1rem auto;max-width:80%"
                                src="{{ asset('assets/images/partners/participant.png?versoion=1.0.1') }}" />
                            <img class="" style="margin:1rem auto;max-width:80%"
                                src="{{ asset('assets/images/partners/participant2.png') }}" />
                            </div>

                        </div>




                        <div class="page-content">

                            <div class="default-container" id="register-form">
                                <x-section-title>سجل الآن </x-section-title>

                                <div style="margin:2rem 5%;">
                                    <v-alert
                                    icon="fi fi-rr-info"
                                    text="                انتهى  التسجيل ، لهذا الملتقى نلقاكم في قادم الفعاليات
                                    "
                                    type="error"
                                              ></v-alert>
                                </div>
                                {{-- <x-splade-form method="post" action="{{ route('send') }}">
                               
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
                                            <p>الجنس</p>
                                            <div class="flex-2 mt-6 mb-6">
                                                <label class="custom-radio">
                                                    <input v-model="form.gender" type="radio" name="gender"
                                                        value="male" />
                                                    <span class="radio-btn"><i class="fi fi-rr-check"></i>
                                                        <div class="hobbies-icon">
                                                            <h3 class="">ذكر</h3>
                                                        </div>
                                                    </span>
                                                </label>
                                                <label class="custom-radio">
                                                    <input v-model="form.gender" type="radio" name="gender"
                                                        value="female" />
                                                    <span class="radio-btn"><i class="fi fi-rr-check"></i>
                                                        <div class="hobbies-icon">
                                                            <h3 class="">انثى</h3>
                                                        </div>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <v-text-field v-model="form.job_title" :counter="100" maxlength="100"
                                                max="100" label="المسمى الوظيفي"></v-text-field>
                                        </div>
                                        <div class="input-container">
                                            <v-text-field v-model="form.phone" :counter="10" label="رقم الجوال (*)"
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
                                            <v-text-field v-model="form.address" :counter="50" maxlength="50"
                                                max="50" label="المنطقة (*)" type="text"
                                                :rules="[
                                                    value => {
                                                        if (value) return true;
                                                        return 'هذا الحقل مطلوب';
                                                    }
                                                ]"></v-text-field>
                                        </div>
                                        <div class="input-container">
                                            <v-text-field v-model="form.city" :counter="50" maxlength="50"
                                                max="50" label="المدينة (*)" type="text"
                                                :rules="[
                                                    value => {
                                                        if (value) return true;
                                                        return 'هذا الحقل مطلوب';
                                                    }
                                                ]"></v-text-field>
                                        </div>
                                    </v-locale-provider>
                                    <x-splade-errors>
                                        <p v-for="error in errors.all" class="error-message"> @{{ error[0] }}
                                        </p>
                                    </x-splade-errors>
                                    <div class="submit-button">
                                        <x-splade-submit label="تسجيل"></x-splade-submit>
                                    </div>
                                </x-splade-form> --}}
                            </div>
                        </div>





                    </div>


                </div>



            </div>
        </div>
    </div>


    </div>
@endsection
