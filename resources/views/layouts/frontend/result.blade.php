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
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden  sm:rounded-lg">
                    <div class=" p-3  ">


                        <div class="page-content">


                            <div class="sta-container">

                                <div class="sta-item defualt">
                                    <div class="">
                                        <h4>إجمالي المسجلين</h4>
                                        <h2>{{ $all_count }}</h2>
                                    </div>

                                    <i class="fi fi-rr-users"></i>
                                </div>

                                <div class="sta-item attended">
                                    <div class="">
                                        <h4>إجمالي الحجوزات</h4>
                                        <h2>{{ $done_count }}</h2>
                                    </div>

                                    <i class="fi fi-rr-check"></i>
                                </div>
                                <div class="sta-item not-attended">
                                    <div class="">
                                        <h4>بإنتظار التواصل</h4>
                                        <h2>{{ $pending_count }}</h2>
                                    </div>

                                    <i class="fi fi-rr-info"></i>
                                </div>
                                <div class="sta-item withdrawed">
                                    <div class="">
                                        <h4>غير المهتمين</h4>
                                        <h2>{{ $not_interested_count }}</h2>
                                    </div>

                                    <i class="fi fi-rr-circle-xmark"></i>
                                </div>


                            </div>

                            <h2 class="sub-title">قائمة المسجلين</h2>


                            <div class="filters">
                                <div>
                                    <div class="inner">
                                            <a class="btn-circle {{ activeClass('', request()->get('status')) }} "
                                                href="{{ url('results') }}">
                                                الكل
                                            </a>
                                            <a class="btn-circle {{ activeClass('done', request()->get('status')) }} "
                                                href="?status=done">
                                                <i class="fi fi-rr-check"></i>
                                                تم الحجز
                                            </a>
                                            <a class="btn-circle {{ activeClass('pending', request()->get('status')) }} "
                                                href="?status=pending">
                                                <i class="fi fi-rr-check"></i>
                                                بإنتظار التواصل
                                            </a>
                                            <a class="btn-circle {{ activeClass('not_inertested', request()->get('status')) }}"
                                                href="?status=not_inertested">
                                                <i class="fi fi-rr-circle-xmark"></i>
                                                غير مهتمين
                                            </a>
                                        </div>
                                        <div class="inner">
                                            <x-filter-button name="coupon" value="">الكل</x-filter-button>

                                            @foreach ($coupons as $coupon)
                                            <x-filter-button name="coupon" value="{{ $coupon->code  }}"> {{ $coupon->name }}</x-filter-button>
                                                 
                                            @endforeach
                                        </div>
                                        <div class="inner">
                                            <x-filter-button name="flat_id" value="">الكل</x-filter-button>

                                            @foreach ($flats as $flat)
                                            <x-filter-button name="flat_id" value="{{ $flat->id  }}"> {{ $flat->building . "-".$flat->name   }}</x-filter-button>
                                                 
                                            @endforeach
                                        </div>
                                </div>

                                
                                <a class="btn-circle" href="{{ request()->fullUrlWithQuery(['export' => 'true']) }}">
                                    <i class="fi fi-rr-file-export"></i>

                                </a>
                            </div>
                            @foreach ($registers as $register)
                                <div class="attended-item">

                                    <div class="name">
                                        <h4>
                                            <div class="">
                                                <span>{{ $register->name }}</span>
                                            </div>
                                        </h4>
                                        <p> <i class="fi fi-rr-phone-flip d-none"></i> <a
                                                href="tel:{{ $register->mobile }}">{{ $register->mobile }}</a></p>
                                    </div>

                                    <div class="name">
                                        <h4>
                                            <div class="">
                                                <span>الشقة :{{ $register->flat != null ? ($register->flat->building . "-" . $register->flat->name):  "غير محدد" }}</span>
                                                
                                            </div>
                                        </h4>
                                        <p> كود المسوق : {{ $register->coupon ?? "لا يوجد" }}</p>
                                    </div>
                                    <div class="contact">

                                        <h4>{{ $register->service }}</h4>

                                    </div>
                                    <div class="date">
                                        <p>{{ timeBetween(strtotime($register->created_at)) }}</p>
                                    </div>
                                    <div class="status">


                                        @if ($register->status == 'done')
                                            <div class="status attended">
                                                <i class="fi fi-rr-check"></i>
                                                تم الحجز
                                            </div>
                                        @elseif($register->status == 'pending')
                                            <div class="status not-attended">
                                                <i class="fi fi-rr-info"></i>
                                                بإنتظار التواصل
                                            </div>
                                        @elseif($register->status == 'not_interested')
                                            <div class="status not-attended">
                                                <i class="fi fi-rr-x-circle-mark"></i>
                                                غير مهتم
                                            </div>
                                        @else
                                            <div class="status not-attended">
                                                <i class="fi fi-rr-info"></i>
                                                غير محدد
                                            </div>
                                        @endif
                                    </div>
                                    <div class="options">

                                        <v-menu transition="slide-y-transition">
                                            <template v-slot:activator="{ props }">

                                                <button type="button" ref="addButton" v-bind="props"
                                                    class=" dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                                    <i class="fi fi-rr-menu-dots-vertical"></i> </button>

                                            </template>

                                            <v-list>


                                                <v-list-item :key="fdsfdsf">
                                                    <v-list-item-title>
                                                        <Link
                                                            href="{{ request()->fullUrlWithQuery(['set_status' => 'done', 'id' => $register->id]) }}">
                                                        <i
                                                            class=
                                                            "fi fi-rr-check"></i>
                                                        تم الحجز
                                                        </Link>
                                                    </v-list-item-title>
                                                </v-list-item>




                                                <v-list-item :key="fdsfdsf">
                                                    <v-list-item-title>
                                                        <Link
                                                            href="{{ request()->fullUrlWithQuery(['set_status' => 'pending', 'id' => $register->id]) }}">
                                                        <i class="fi fi-rr-info"></i> بإنتظار التواصل</Link>
                                                    </v-list-item-title>
                                                </v-list-item>

                                                <v-list-item :key="fdsfdsf">
                                                    <v-list-item-title>
                                                        <Link
                                                            href="{{ request()->fullUrlWithQuery(['set_status' => 'not_interested', 'id' => $register->id]) }}">
                                                        <i class="fi fi-rr-x-circle-mark"></i> غير مهتم</Link>
                                                    </v-list-item-title>
                                                </v-list-item>
                                            </v-list>
                                        </v-menu>



                                    </div>

                                    <div class="expandable " id="details-{{ $register->id }}">


                                        <br>
                                        <img src="{{ asset('storage/img/qr-code/' . $register->qr_src) }}" alt="">

                                        <div class="expandable-options d-none">
                                            <a href="{{ asset('storage/img/qr-code/' . $register->qr_src) }}" download
                                                class="flat-button"><i class="fi fi-rr-file-download"></i>
                                                تحميل
                                                الدعوة</a>
                                            <a href="#" class="flat-button" onclick="alert('جاري إنشاء الخاصية')"><i
                                                    class="fi fi-rr-envelope"></i> إعادة
                                                إرسال </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>





                    </div>


                </div>



            </div>
        </div>
    </div>


@endsection
