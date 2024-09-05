<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="icon" href="favicon.ico">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet">


        <meta name="robots" content="max-image-preview:large" />


        <link rel="stylesheet" id="bdt-uikit-css"
            href="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css?ver=3.15.1') }}"
            media="all" />
        <link rel="stylesheet" id="ep-helper-css"
            href="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/css/ep-helper.css?ver=6.12.2') }}"
            media="all" />

        <style id="wp-emoji-styles-inline-css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id="classic-theme-styles-inline-css">
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em;
            }

            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none;
            }
        </style>
        <link rel="stylesheet" id="elementor-frontend-css"
            href="{{ asset('assets/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.22.2') }}"
            media="all" />
        <link rel="stylesheet" id="elementor-post-53-css"
            href="{{ asset('assets/wp-content/uploads/sites/12/elementor/css/post-53.css?ver=1719309645') }}"
            media="all" />
        <link rel="stylesheet" id="elementor-icons-css"
            href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.30.0') }}"
            media="all" />
        <link rel="stylesheet" id="swiper-css"
            href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5') }}"
            media="all" />
        <link rel="stylesheet" href="{{ asset('assets/css/post-13.css?ver=1719309646') }}" media="all" />
        <link rel="stylesheet" id="uicore_global-css"
            href="{{ asset('assets/wp-content/uploads/sites/12/uicore-global.css?ver=3323') }}" media="all" />
        <link rel="stylesheet" id="google-fonts-1-css"
            href="https://fonts.googleapis.com/css?family=DM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.5.5"
            media="all" />
        <link rel="stylesheet" id="elementor-icons-shared-0-css"
            href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3') }}"
            media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-solid-css"
            href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3') }}"
            media="all" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1') }}" id="jquery-migrate-js">
        </script>

<script  type="text/javascript"  src="{{ asset('assets/js/script.js')}}"></script>

        <link rel="https://api.w.org/" href="./wp-json/" />
        <link rel="alternate" type="application/json" href="./wp-json/wp/v2/pages/13" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="./xmlrpc.php?rsd" />

        <link rel="canonical" href="./" />
        <link rel="shortlink" href="./" />

        <link href="{{ asset('assets/css/style.css?version=1.0.') }}<?= rand(1, 9888888) ?>" rel="stylesheet">

        <meta name="theme-color" content="#9d1c90" />
        <link rel="shortcut icon"
            href="{{ asset('assets/wp-content/uploads/sites/12/2023/03/pagebolt-favicon.png') }}" />
        <link rel="icon" href="{{ asset('assets/wp-content/uploads/sites/12/2023/03/pagebolt-favicon.png') }}" />
        <link rel="apple-touch-icon" sizes="152x152"
            href="{{ asset('assets/wp-content/uploads/sites/12/2023/03/pagebolt-favicon.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120"
            href="{{ asset('assets/wp-content/uploads/sites/12/2023/03/pagebolt-favicon.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76"
            href="{{ asset('assets/wp-content/uploads/sites/12/2023/03/pagebolt-favicon.png') }}" />
        <link rel="apple-touch-icon"
            href="{{ asset('assets/wp-content/uploads/sites/12/2023/03/pagebolt-favicon.png') }}" />
          

            <style>
                /*! elementor - v3.22.0 - 24-06-2024 */
                .elementor-heading-title {
                    padding: 0;
                    margin: 0;
                    line-height: 1;
                }

                .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"]>a {
                    color: inherit;
                    font-size: inherit;
                    line-height: inherit;
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                    font-size: 15px;
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                    font-size: 19px;
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                    font-size: 29px;
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                    font-size: 39px;
                }

                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                    font-size: 59px;
                }
            </style>
            <style>
                /*! elementor - v3.22.0 - 24-06-2024 */
                .elementor-column .elementor-spacer-inner {
                    height: var(--spacer-size);
                }

                .e-con {
                    --container-widget-width: 100%;
                }

                .e-con-inner>.elementor-widget-spacer,
                .e-con>.elementor-widget-spacer {
                    width: var(--container-widget-width,
                            var(--spacer-size));
                    --align-self: var(--container-widget-align-self,
                            initial);
                    --flex-shrink: 0;
                }

                .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                .e-con>.elementor-widget-spacer>.elementor-widget-container {
                    height: 100%;
                    width: 100%;
                }

                .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                    height: 100%;
                }

                .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                    height: var(--container-widget-height,
                            var(--spacer-size));
                }

                .e-con-inner>.elementor-widget-spacer.elementor-widget-empty,
                .e-con>.elementor-widget-spacer.elementor-widget-empty {
                    position: relative;
                    min-height: 22px;
                    min-width: 22px;
                }

                .e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,
                .e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    padding: 0;
                    width: 22px;
                    height: 22px;
                }
            </style>
          <style>
                /*! elementor - v3.22.0 - 24-06-2024 */
                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                    background-color: #69727d;
                    color: #fff;
                }

                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                    color: #69727d;
                    border: 3px solid;
                    background-color: transparent;
                }

                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                    margin-top: 8px;
                }

                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                    width: 1em;
                    height: 1em;
                }

                .elementor-widget-text-editor .elementor-drop-cap {
                    float: left;
                    text-align: center;
                    line-height: 1;
                    font-size: 50px;
                }

                .elementor-widget-text-editor .elementor-drop-cap-letter {
                    display: inline-block;
                }
            </style>

            <style>
                /*! elementor - v3.22.0 - 24-06-2024 */
                .elementor-widget-image {
                    text-align: center;
                }

                .elementor-widget-image a {
                    display: inline-block;
                }

                .elementor-widget-image a img[src$=".svg"] {
                    width: 48px;
                }

                .elementor-widget-image img {
                    vertical-align: middle;
                    display: inline-block;
                }
            </style>

        <style>
            .ui-link-helper svg {
                width: 22px;
            }

            .ui-link-helper {
                position: fixed;
                right: 0;
                top: calc(50vh - 111px);
                display: flex;
                flex-direction: column;
                background: white;
                width: 45px;
                cursor: pointer;
                border-left: 0;
                border-radius: 0;
                -webkit-box-shadow: 0 5px 40px rgb(0 0 0 / 7%);
                -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, 7%);
                box-shadow: 0 5px 40px rgb(0 0 0 / 7%);
                padding: 0;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                border: 1px solid #eaeaea;
                border-right: 0;
                z-index: 9999999;
            }

            .ui-link-helper .ui-tooltip {
                opacity: 0;
                visibility: hidden;
                -webkit-transform: scale(0.7);
                -moz-transform: scale(0.7);
                -ms-transform: scale(0.7);
                transform: scale(0.7);
                position: absolute;
                background-color: #fff;
                font-size: 13px;
                margin: 0;
                padding: 0px 20px;
                font-family: inherit;
                width: auto;
                font-weight: 500;
                line-height: 36px;
                letter-spacing: 0.1px;
                right: 10px;
                top: 4px;
                border-radius: 3px;
                white-space: nowrap;
                -webkit-box-shadow: 0 5px 40px rgb(0 0 0 / 7%),
                    0 0 3px -1px rgb(83 45 245 / 15%);
                -moz-box-shadow: 0 5px 40px rgb(0 0 0 / 7%),
                    0 0 3px -1px rgb(83 45 245 / 15%);
                box-shadow: 0 5px 40px rgb(0 0 0 / 7%),
                    0 0 3px -1px rgb(83 45 245 / 15%);
                -moz-transition: all 0.3s cubic-bezier(0.64, -0.09, 0.13, 1.15);
                -o-transition: all 0.3s cubic-bezier(0.64, -0.09, 0.13, 1.15);
                transition: all 0.3s cubic-bezier(0.64, -0.09, 0.13, 1.15);
                color: #f5a9a5;
            }

            .ui-link-helper .ui-tooltip-link:hover .ui-tooltip {
                opacity: 1;
                right: 60px;
                visibility: visible;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            .ui-link-helper .ui-tooltip-link {
                position: relative;
                display: flex;
                justify-content: center;
                height: 44px;
                align-items: center;
                transition: all 0.3s ease-in;
            }

            .ui-link-helper .ui-tooltip span {
                display: block;
                position: absolute;
                right: -5px;
                top: 12px;
                width: 0;
                height: 0;
                border-left: 5px solid #fff;
                border-bottom: 5px solid transparent;
                border-top: 5px solid transparent;
            }

            .ui-link-helper .ui-tooltip-link+.ui-tooltip-link {
                border-top: 1px solid #eaeaea;
            }

            .ui-link-helper .ui-tooltip-link svg {
                height: 20px;
            }

            .ui-tooltip-link:hover {
                background: rgb(83 45 245 / 5%);
            }

            .ui-tooltip-link:hover svg path {
                fill: #f5a9a5;
            }

            @media (max-width: 767px) {
                .ui-link-helper {
                    display: none;
                }
            }
        </style>
    </head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @spladeHead
</head>

<body x-data="{ page: 'home', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'a tf': darkMode === true }"
    class="home page-template-default page page-id-13 wp-embed-responsive ui-a-dsmm-slide elementor-default elementor-kit-4 elementor-page elementor-page-13">


    @splade



    <script>
        var uicore_frontend = {
            back: "Back",
            rtl: "",
            mobile_br: "1025"
        };
        console.log("Using Vault v.1.1.5");
        console.log("Powered By UiCore Framework v.4.1.5");
    </script>
    <link rel="stylesheet" id="ui-e-split-css"
        href="{{ asset('assets/wp-content/plugins/uicore-framework/assets/css/elementor/widgets/split.css?ver=4.1.5') }}"
        media="all" />
    <link rel="stylesheet" id="ep-advanced-icon-box-css"
        href="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-icon-box.css?ver=6.12.2') }}"
        media="all" />
    <link rel="stylesheet" id="ep-animated-gradient-background-css"
        href="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/css/ep-animated-gradient-background.css?ver=6.12.2') }}"
        media="all" />
    <link rel="stylesheet" id="ep-font-css"
        href="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/css/ep-font.css?ver=6.12.2') }}"
        media="all" />
    <link rel="stylesheet" id="ep-review-card-carousel-css"
        href="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/css/ep-review-card-carousel.css?ver=6.12.2') }}"
        media="all" />
    <link rel="stylesheet" id="ep-mailchimp-css"
        href="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/css/ep-mailchimp.css?ver=6.12.2') }}"
        media="all" />
    <script src="{{ asset('assets/wp-content/uploads/sites/12/uicore-global.js?ver=3323') }}" id="uicore_global-js">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/uicore-framework/assets/js/elementor/widgets/split.js?ver=4.1.5') }}"
        id="ui-e-split-js"></script>

    <script src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min.js?ver=3.15.1') }}"
        id="bdt-uikit-js"></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.22.2') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.22.2') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('assets/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2') }}" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: {
                edit: false,
                wpPreview: false,
                isScriptDebug: false,
            },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
                a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
                a11yCarouselPrevSlideMessage: "Previous slide",
                a11yCarouselNextSlideMessage: "Next slide",
                a11yCarouselFirstSlideMessage: "This is the first slide",
                a11yCarouselLastSlideMessage: "This is the last slide",
                a11yCarouselPaginationBulletMessage: "Go to slide",
            },
            is_rtl: false,
            breakpoints: {
                xs: 0,
                sm: 480,
                md: 768,
                lg: 1025,
                xl: 1440,
                xxl: 1600
            },
            responsive: {
                breakpoints: {
                    mobile: {
                        label: "Mobile Portrait",
                        value: 767,
                        default_value: 767,
                        direction: "max",
                        is_enabled: true,
                    },
                    mobile_extra: {
                        label: "Mobile Landscape",
                        value: 880,
                        default_value: 880,
                        direction: "max",
                        is_enabled: false,
                    },
                    tablet: {
                        label: "Tablet Portrait",
                        value: 1024,
                        default_value: 1024,
                        direction: "max",
                        is_enabled: true,
                    },
                    tablet_extra: {
                        label: "Tablet Landscape",
                        value: 1200,
                        default_value: 1200,
                        direction: "max",
                        is_enabled: false,
                    },
                    laptop: {
                        label: "Laptop",
                        value: 1366,
                        default_value: 1366,
                        direction: "max",
                        is_enabled: false,
                    },
                    widescreen: {
                        label: "Widescreen",
                        value: 2400,
                        default_value: 2400,
                        direction: "min",
                        is_enabled: false,
                    },
                },
            },
            version: "3.22.2",
            is_static: false,
            experimentalFeatures: {
                e_optimized_assets_loading: true,
                e_optimized_css_loading: true,
                additional_custom_breakpoints: true,
                container_grid: true,
                e_swiper_latest: true,
                e_onboarding: true,
                home_screen: true,
                "ai-layout": true,
                "landing-pages": true,
            },
            urls: {
                assets: "https:\/\/pagebolt.uicore.co\/social-media\/wp-content\/plugins\/elementor\/assets\/",
            },
            swiperClass: "swiper",
            settings: {
                page: [],
                editorPreferences: []
            },
            kit: {
                active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
            },
            post: {
                id: 13,
                title: "Social%20Media%20%E2%80%93%20PageBolt%20WordPress%20Theme",
                excerpt: "",
                featuredImage: false,
            },
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.22.2') }}"
        id="elementor-frontend-js"></script>
    <script
        src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-advanced-icon-box.min.js?ver=6.12.2') }}"
        id="ep-advanced-icon-box-js"></script>
    <script src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/vendor/js/granim.min.js?ver=1') }}"
        id="granim-js"></script>
    <script
        src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-animated-gradient-background.min.js?ver=6.12.2') }}"
        id="ep-animated-gradient-background-js"></script>
    <script
        src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-review-card-carousel.min.js?ver=6.12.2') }}"
        id="ep-review-card-carousel-js"></script>
    <script
        src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-background-overlay.min.js?ver=6.12.2') }}"
        id="ep-background-overlay-js"></script>
    <script
        src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-mailchimp.min.js?ver=6.12.2') }}"
        id="ep-mailchimp-js"></script>
    <script src="{{ asset('assets/wp-content/plugins/bdthemes-element-pack/assets/js/common/helper.min.js?ver=6.12.2') }}"
        id="element-pack-helper-js"></script>

</body>

</html>
