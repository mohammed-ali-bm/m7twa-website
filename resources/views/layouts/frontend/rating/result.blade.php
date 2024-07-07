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
@endsection
@section('content')
    <div class="page-container">
        <div class="py-6 app-layout">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden  sm:rounded-lg">
                    <div class=" p-3  ">


                        <div class="page-content">



                            <h2 class="sub-title">قائمة التقييمات</h2>


                            @foreach ($ratings as $rating)
                                <div class="attended-item">

                                    <div class="name">
                                        <h4>{{ $rating->guest->name }}</h4>
                                        <p>{{ $rating->guest->job_title }} - {{ $rating->guest->company }}</p>
                                    </div>
                                    <div class="contact">
                                        <h4> <i class="fi fi-rr-phone-flip d-none"></i> <a
                                                href="tel:{{ $rating->guest->phone }}">{{ $rating->guest->phone }}</a></h4>
                                        <p><i class="fi fi-rr-envelope d-none"></i><a
                                                href="mailto:{{ $rating->guest->email }}">{{ $rating->guest->email }}</a>
                                        </p>
                                    </div>
                                    <div class="date">
                                        <p>{{ timeBetween(strtotime($rating->created_at)) }}</p>
                                    </div>
                                    <div class="status">


                                        <i class="fi fi-rr-star" style="position: relative;top :2px"></i><span> {{ calculateAvg($rating->factors) }}</span>
                                    </div>
                                    <div class="options">
                                        <a href="#" data-toggle="expand"
                                            data-target="#details-{{ $rating->guest->id }}"><i
                                                class="fi fi-rr-angle-small-down"></i></a>



                                    </div>

                                    <div class="expandable " id="details-{{ $rating->guest->id }}">

                                        <br>

                                        @foreach ($rating->factors as $factor)
                                            <p style="text-align: right"> {{ $factor->factor->title }} <br>
                                                {{ $factor->value }} </p>
                                            <br>
                                        @endforeach
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
