<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.') }}png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&family=Noto+Kufi+Arabic:wght@200;500&family=Tajawal:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css?version=1.0.0' . rand(1, 999999)) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css?version=1.0.0' . rand(1, 999999)) }}">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-brands/css/uicons-brands.css'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @spladeHead
</head>

<body class=" antialiased">
    @include('components.tooltips')
    @splade
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

    <script src="{{ asset('assets/js/script.js?version=1.0.1') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
            const options = {
                colors: ["#491976", "#9754d6"],
                series: [{
                        name: "طلب",
                        color: "#491976",
                        data: [{
                                x: "Mon",
                                y: 231
                            },
                            {
                                x: "Tue",
                                y: 122
                            },
                            {
                                x: "Wed",
                                y: 63
                            },
                            {
                                x: "Thu",
                                y: 421
                            },
                            {
                                x: "Fri",
                                y: 122
                            },
                            {
                                x: "Sat",
                                y: 323
                            },
                            {
                                x: "Sun",
                                y: 111
                            },
                        ],
                    },
                    {
                        name: "متجر مسجل",
                        color: "#9754d6",
                        data: [{
                                x: "Mon",
                                y: 232
                            },
                            {
                                x: "Tue",
                                y: 113
                            },
                            {
                                x: "Wed",
                                y: 341
                            },
                            {
                                x: "Thu",
                                y: 224
                            },
                            {
                                x: "Fri",
                                y: 522
                            },
                            {
                                x: "Sat",
                                y: 411
                            },
                            {
                                x: "Sun",
                                y: 243
                            },
                        ],
                    },
                ],
                chart: {
                    type: "bar",
                    height: "320px",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 1,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                },
                grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    opacity: 1,
                },
            }

            if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart"), options);
                chart.render();
            }

            if (document.getElementById("column-chart2") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart2"), options);
                chart.render();
            }

            if (document.getElementById("column-chart3") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart3"), options);
                chart.render();
            }
        });
    </script>


    <script type='text/javascript'>
        $(function() {



            $("body").on("click", "[data-toggle='animate-section']", function(e) {

                e.preventDefault();
                let section = $(this).attr("data-target");
                $("html,body").animate({
                    scrollTop: $(section).offset().top - 200
                }, 1000);

            });
            $("body").on("click", "[data-toggle='expand']", function(e) {


                e.preventDefault();
                var btn = $(this);
                var target = btn.attr("data-target");

                if ($(target).hasClass("expanded")) {

                    $(target).slideUp();
                    $(target).removeClass("expanded");

                    btn.removeClass("rotated");
                    return;
                } else {
                    $(target).slideDown(300, function() {
                        $(target).addClass("expanded");

                    });

                    btn.addClass("rotated");

                }


            });

            $("body").on("change", ".product-validity-type-container select", function() {


                const val = $(this).val();
                if (val == "duration") {
                    $(".vadidity-date-container").slideUp();
                    $(".vadidity-duration-container").slideDown();
                } else if (val == "date") {
                    $(".vadidity-date-container").slideDown();
                    $(".vadidity-duration-container").slideUp();
                } else {
                    $(".vadidity-date-container").slideUp();
                    $(".vadidity-duration-container").slideUp();
                }

            });


            $("body").on("change", ".select-offers-dropdown-container select", function() {
                var select = $(this);
                var countsContainer = $(".offers-counts-container");

                console.log("changed");

                // log  all options 
                options = select.find("option");


                // loop through all options

                for (var i = 0; i < options.length; i++) {
                    var option = $(options[i]);


                    var offerId = option.val();
                    var offerName = option.text();
                    console.log(offerId);

                    //  check if offer with id exisst in countsContainer
                    if (countsContainer.find(".offer-count[data-id='" + offerId + "']").length == 0) {

                        // offer  does not exist in  add one

                        $(countsContainer.find(".offer-count[data-offer-id='" + offerId + "']")).css(
                            "display", "block");

                    } else {
                        // alert("found");
                    }
                }

                //  loop through all offers in countsContainer , remove the unselected ones
                countsContainer.find(".offer-count").each(function() {
                    var offerCount = $(this);
                    var offerId = offerCount.attr("data-offer-id");
                    var offerOption = select.find("option[value='" + offerId + "']");

                    if (offerOption.length == 0) {
                        offerCount.css("display", "none");
                    }
                });
            });
            $("body").on("click", ".copy-text-button", function(e) {

                e.preventDefault();
                var btn = $(this);
                var text = btn.attr("data-text");
                var input = $("<input>");
                input.val(text);
                $("body").append(input);
                input.select();
                document.execCommand("copy");
                input.remove();
                var classes = btn.find("i").attr("class");
                btn.find("i").removeClass(classes).addClass("fi fi-rr-check");
                setTimeout(function() {
                    btn.find("i").removeClass("fi fi-rr-check").addClass(classes);
                }, 2000);
            });



        })
    </script>

    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>



    <script>
        function initScroll() {
            const counterUpElements = gsap.utils.toArray(".counter-up");

            counterUpElements.forEach((element) => {
                const targetCount = parseInt(element.getAttribute("data-count")) || 0;

                const counterObject = {
                    count: 0,
                    set count(value) {
                        element.textContent = Math.ceil(value);
                    },
                };

                gsap.to(counterObject, {
                    count: targetCount,
                    duration: 1, // Adjust the duration as needed
                    ease: "power1.out", // Adjust the ease as needed
                    scrollTrigger: {
                        trigger: element,
                        start: "top 90%", // Adjust the start position based on your preference
                        toggleActions: "play none none reverse",
                    },
                });
            });




            const scrolFadeElements = gsap.utils.toArray(".scroll-fade-element");

            scrolFadeElements.forEach((element) => {


                gsap.fromTo(element, {

                    // y: -50,
                    // scale: 1.2,
                    opacity: 0,
                }, {
                    y: 0,
                    // scale: 1,
                    opacity: 1,
                    // delay: 2.5,

                    scrollTrigger: {
                        trigger: element,
                        start: "top bottom",
                        toggleActions: "play none none reverse",
                        markers: false,
                        // scrub: true, // Enable scrub for continuous movement
                    },
                    duration: 0.2,
                    // stagger: 0.2,
                    // ease: "power1.in",

                });

            });


            const scrolScaleElements = gsap.utils.toArray(".scroll-scale-element");

            scrolScaleElements.forEach((element) => {


                gsap.fromTo(element, {

                    // y: -50,
                    scale: 1.2,
                    opacity: 0.6,
                }, {
                    y: 0,
                    scale: 1,
                    opacity: 1,
                    // delay: 2.5,

                    scrollTrigger: {
                        trigger: element,
                        start: "top bottom",
                        toggleActions: "play none none reverse",
                        markers: false,
                        scrub: true, // Enable scrub for continuous movement
                    },
                    duration: 0.2,
                    // stagger: 0.2,
                    // ease: "power1.in",

                });

            });

            const scrolDownElements = gsap.utils.toArray(".scroll-down-element");

            scrolDownElements.forEach((element) => {


                gsap.fromTo(element, {

                    y: -20,
                    // scale: 1.2,
                    // opacity: 0,
                }, {
                    y: 0,
                    // scale: 1,
                    // opacity: 1,
                    // delay: 2.5,

                    scrollTrigger: {
                        trigger: element,
                        start: "top bottom",
                        toggleActions: "play none none reverse",
                        markers: false,
                        scrub: true, // Enable scrub for continuous movement
                    },
                    duration: 0.4,
                    // stagger: 0.2,
                    // ease: "power1.in",

                });

            });



        }


        window.addEventListener("load", initScroll);
    </script>

</body>

</html>
