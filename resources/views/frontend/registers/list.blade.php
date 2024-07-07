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
                <div class="bg-white overflow-hidden  sm:rounded-lg">
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
                                        <h4>إجمالي المقبولين</h4>
                                        <h2>{{ $active_count }}</h2>
                                    </div>

                                    <i class="fi fi-rr-check"></i>
                                </div>

                                <div class="sta-item withdrawed">
                                    <div class="">
                                        <h4>بالنتظار الموافقة</h4>
                                        <h2>{{ $pending_count }}</h2>
                                    </div>

                                    <i class="fi fi-rr-circle-xmark"></i>
                                </div>
                                <div class="sta-item not-attended">
                                    <div class="">
                                        <h4>مفروض</h4>
                                        <h2>{{ $rejected_count }}</h2>
                                    </div>

                                    <i class="fi fi-rr-info"></i>
                                </div>


                            </div>

                            <h2 class="sub-title">قائمة المسجلين</h2>


                            <div class="filters">
                                <div class="inner">
                                    <a class="btn-circle {{ activeClass('', request()->get('status')) }} "
                                        href="{{ url('results') }}">
                                        الكل
                                    </a>
                                    <a class="btn-circle {{ activeClass('active', request()->get('status')) }} "
                                        href="?status=active">

                                        <i class="fi fi-rr-check"></i>
                                        المقبولين فقط
                                    </a>
                                    <a class="btn-circle {{ activeClass('pending', request()->get('status')) }}"
                                        href="?status=pending">
                                        <i class="fi fi-rr-info"></i>
                                        بانتظار المراجعة
                                    </a>
                                    <a class="btn-circle {{ activeClass('rejected', request()->get('status')) }}"
                                        href="?status=rejected">
                                        <i class="fi fi-rr-circle-xmark"></i>
                                        المرفوضين
                                    </a>
                                </div>
                                <a class="btn-circle" href="{{ request()->fullUrlWithQuery(['export' => 'true']) }}">
                                    <i class="fi fi-rr-file-export"></i>

                                </a>
                            </div>
                            @foreach ($registers as $register)
                                <div class="attended-item">

                                    <div class="name">
                                        <h4>{{ $register->name }}</h4>
                                        <p> {{ $register->company }}</p>
                                    </div>
                                    <div class="contact">
                                        <h4> <i class="fi fi-rr-phone-flip d-none"></i> <a
                                                href="tel:{{ $register->mobile }}">{{ $register->mobile }}</a></h4>
                                        <p><i class="fi fi-rr-envelope d-none"></i><a
                                                href="mailto:{{ $register->email }}">{{ $register->email }}</a></p>
                                    </div>
                                    <div class="date">
                                        <p>{{ $register->id_number }}</p>
                                    </div>
                                    <div class="date">
                                        <p>{{ timeBetween(strtotime($register->created_at)) }}</p>
                                    </div>
                                    <div class="status">


                                        @if ($register->status == 'active')
                                            <div class="status attended">
                                                <i class="fi fi-rr-check"></i>
                                                مقبول
                                            </div>
                                        @elseif ($register->status == 'rejected')
                                            <div class="status not-attended">
                                                <i class="fi fi-rr-check"></i>
                                                مرفوض
                                            </div>
                                        @else
                                            <div class="status not-attended">
                                                <i class="fi fi-rr-info"></i>
                                                بانتظار المراجعة
                                            </div>
                                        @endif
                                    </div>
                                    <div class="options">
                                        {{-- <a href="#"><i class="fi fi-rr-menu-dots-vertical"></i></a> --}}
                                        <a href="#" data-toggle="expand"
                                            data-target="#details-{{ $register->id }}"><i
                                                class="fi fi-rr-angle-small-down"></i></a>



                                    </div>

                                    <div class="expandable " id="details-{{ $register->id }}">


                                        <br>

                                        @if (strpos($register->statement, '.pdf') !== false)
                                        <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                                            <iframe src="{{ asset('storage/' . $register->statement) }}" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: 0;" allowfullscreen></iframe>
                                        </div>
                                    @else
                                        <img src="{{ asset('storage/' . $register->statement) }}" alt="">

                                        @endif

                                        <div class="expandable-options  d-none">
                                            <a href="{{ asset('storage/' . $register->statement) }}" download
                                                class="flat-button"><i class="fi fi-rr-file-download"></i>
                                                تحميل
                                                الايصال</a>
                                            
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


    </div>
@endsection
