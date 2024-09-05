<div class="uicore-body-content">
    <div id="uicore-page">
        <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite"
            class="uicore uicore-navbar elementor-section elementor-section-boxed uicore-h-classic uicore-sticky ui-smart-sticky uicore-transparent">
            <div class="uicore-header-wrapper">
                <nav class="uicore elementor-container">
                    <div class="uicore-branding">
                        <Link href="{{ route('home') }}" rel="home">
                        <img class="uicore uicore-logo uicore-main" src="{{ asset('assets/images/logo.png') }}"
                            alt="Social Media" />
                        <img class="uicore uicore-logo uicore-second" src="{{ asset('assets/images/logo-white.png') }}"
                            alt="Social Media" />
                        <img class="uicore uicore-logo uicore-mobile-main" src="{{ asset('assets/images/logo.png') }}"
                            alt="Social Media" />
                        <img class="uicore uicore-logo uicore-mobile-second"
                            src="{{ asset('assets/images/logo-white.png') }}" alt="Social Media" />
                        </Link>
                    </div>
                    <div class="uicore-nav-menu">
                        <div class="uicore-menu-container uicore-nav">
                            <ul class="uicore-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5">
                                    <a href="{{ route('services.index') }}"><span class="ui-menu-item-wrapper">الخدمات</span></a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6">
                                    <a href="{{ route('pages.view', ['about-us']) }}"><span
                                            class="ui-menu-item-wrapper">عن محتوى</span></a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
                                    <a href="#metrics"><span class="ui-menu-item-wrapper">آراء العملاء</span></a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
                                    <a href="#tracking"><span class="ui-menu-item-wrapper">تواصل معنا</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="uicore uicore-extra">
                            <div class="uicore-custom-area">
                                <div class="uicore-hca">
                                    <h5 class="wp-block-heading"
                                        style="
                          font-size: 16px;
                          font-style: normal;
                          font-weight: 500;
                        ">
                                        <a href="#">تواصل معنا</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="uicore-cta-wrapper">
                                <a href="#" data-toggle="animate-section" data-target="#order-form" target="_self"
                                    class="uicore-btn uicore-inverted">
                                    <span class="elementor-button-text"> اطلب الخدمة </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="uicore-toggle uicore-ham">
                        <span class="bars">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </span>
                    </button>
                </nav>
            </div>
        </div>
        <div id="content" class="uicore-content">
            {{-- <script id="uicore-page-transition">
                window.onload = window.onpageshow = function() {};
            </script> --}}
            <div id="primary" class="content-area">
                <article id="post-13" class="post-13 page type-page status-publish hentry">
                    <main class="entry-content">
                        <div data-elementor-type="wp-page" data-elementor-id="13" class="elementor elementor-13">
                            <div class="elementor-section elementor-top-section elementor-element elementor-element-3eeba9e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="3eeba9e" data-element_type="section"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-background-overlay"></div>
                                @yield('header')
                            </div>
                            @yield('content')
                        </div>
                    </main>
                </article>
            </div>
        </div>
        <footer id="uicore-tb-footer" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
            <div data-elementor-type="uicore-tb" data-elementor-id="53" class="elementor elementor-53">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-7b34b48 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="7b34b48" data-element_type="section" data-settings='{"background_background":"classic"}'>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6be4ed5"
                            data-id="6be4ed5" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1c1f961 elementor-widget__width-auto elementor-absolute e-transform elementor-hidden-mobile bdt-background-overlay-yes elementor-widget elementor-widget-image"
                                    data-id="1c1f961" data-element_type="widget"
                                    data-settings='{"_position":"absolute","_transform_rotateZ_effect":{"unit":"px","size":-15,"sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile":{"unit":"deg","size":"","sizes":[]}}'
                                    data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="97" height="97"
                                            src="{{ asset('assets/images/event-management (1).png') }}"
                                            class="attachment-full size-full wp-image-47" alt />
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e4fecb2 elementor-widget__width-auto elementor-absolute e-transform elementor-hidden-mobile bdt-background-overlay-yes elementor-widget elementor-widget-image"
                                    data-id="e4fecb2" data-element_type="widget"
                                    data-settings='{"_position":"absolute","_transform_rotateZ_effect":{"unit":"px","size":15,"sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile":{"unit":"deg","size":"","sizes":[]}}'
                                    data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="97" height="97"
                                            src="{{ asset('assets/images/event-management.png') }}"
                                            class="attachment-full size-full wp-image-44" alt />
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-27b9a9b elementor-widget__width-auto elementor-absolute elementor-hidden-mobile bdt-background-overlay-yes elementor-widget elementor-widget-image"
                                    data-id="27b9a9b" data-element_type="widget"
                                    data-settings='{"_position":"absolute"}' data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="96" height="96"
                                            src="{{ asset('assets/images/contract.png') }}"
                                            class="attachment-full size-full wp-image-45" alt />
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3291f9e elementor-widget__width-auto elementor-absolute elementor-hidden-mobile bdt-background-overlay-yes elementor-widget elementor-widget-image"
                                    data-id="3291f9e" data-element_type="widget"
                                    data-settings='{"_position":"absolute"}' data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="96" height="96"
                                            src="{{ asset('assets/images/content-marketing.png') }}"
                                            class="attachment-full size-full wp-image-46" alt />
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-579e268 elementor-widget elementor-widget-heading"
                                    data-id="579e268" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            اطلب الخدمة الآن
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-25fe528 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                                    data-id="25fe528" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        ارح بالك ودعنا نتكفل بكل شيء
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e4a18b2 elementor-widget elementor-widget-spacer"
                                    data-id="e4a18b2" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-0eff3f9 bdt-before-icon-inline--yes elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-bdt-mailchimp"
                                    data-id="0eff3f9" data-element_type="widget"
                                    data-widget_type="bdt-mailchimp.default">
                                    <div class="elementor-widget-container">
                                        <div class="bdt-newsletter-wrapper">
                                            <form action="./wp-admin/admin-ajax.php"
                                                class="bdt-mailchimp bdt-grid bdt-grid-small bdt-flex-middle" bdt-grid>
                                                <div class="bdt-width-auto bdt-before-icon">
                                                    <div class="bdt-newsletter-before-icon">

                                                    </div>
                                                </div>
                                                <div class="bdt-newsletter-input-wrapper bdt-width-expand">
                                                    <x-splade-form method="POST"
                                                        action="{{ route('orders.store') }}" stay reset-on-success
                                                        id="order-form">

                                                        <input type="text" v-model="form.name" name="name"
                                                            validation-key="name" placeholder="الإسم"
                                                            class="bdt-input" />
                                                        <input type="number" v-model="form.phone" name="phone"
                                                            placeholder="رقم الجوال" class="bdt-input" />
                                                        <input type="email" name="email"
                                                            placeholder="البريد الإلكتروني" v-model="form.email"
                                                            class="bdt-input" />


                                                        <x-splade-select name="amount" label="العدد المطلوب">
                                                            <option value="1" selected>1</option>
                                                            @for ($i = 2; $i <= 10; $i++)
                                                                <option value="{{ $i }}">
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </x-splade-select>

                                                        <div class="flex-apart"> <span>الإجمالي</span>
                                                            <span> <span v-text="form.amount * 98" /> ريال</span>
                                                        </div>


                                                        <x-splade-errors>
                                                            <div v-for="(errors, key) in errors.all">
                                                                <div v-for="error in errors"
                                                                    class="bdt-alert bdt-alert-danger bdt-alert-dismissible">
                                                                    <div class="bdt-alert-content">
                                                                        <p v-text="error"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-splade-errors>
                                                        <button label="قدم طلبك" type="submit" 
                                                            class="bdt-newsletter-btn bdt-button bdt-button-primary bdt-width-1-1 mt-2">
                                                            <div class="bdt-newsletter-btn-content-wrapper">
                                                                <div
                                                                    class="bdt-newsletter-btn-text bdt-display-inline-block">
                                                                    قدم طلبك
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </x-splade-form>
                                                </div>



                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="elementor-section elementor-top-section elementor-element elementor-element-20f1af0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="20f1af0" data-element_type="section"
                    data-settings='{"background_background":"classic"}'>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7fc7645"
                            data-id="7fc7645" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-eadd216 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="eadd216" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default"
                                        style="justify-content: space-around;">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-44b1dfa"
                                            data-id="44b1dfa" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-954ffc7 elementor-widget elementor-widget-image"
                                                    data-id="954ffc7" data-element_type="widget"
                                                    data-widget_type="image.default" style="text-align:right">
                                                    <div class="elementor-widget-container">
                                                        <img width="354" height="96"
                                                            src="{{ asset('assets/images/logo.png') }}"
                                                            class="attachment-full size-full wp-image-10" alt
                                                            srcset="
                                                        {{ asset('assets/images/logo.png') }} 354w,
                                                        {{ asset('assets/wp-content/uploads/sites/12/2023/03/pagebolt-logo-300x81.webp') }} 300w
                                                        "
                                                            sizes="(max-width: 354px) 100vw, 354px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-43d963e elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="43d963e" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">
                                                                    <span class="elementor-icon-list-text">الطائف ,
                                                                        المملكة العربية السعودية</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">
                                                                    <span class="elementor-icon-list-text">+966 55
                                                                        555 5555</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">
                                                                    <span
                                                                        class="elementor-icon-list-text">contact@m7twa.sa</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d06fefc"
                                            data-id="d06fefc" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-f1127f0 elementor-widget elementor-widget-heading"
                                                    data-id="f1127f0" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                            روابط سريعة
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4e967cd elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="4e967cd" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <a href="{{ route('services.index') }}">
                                                                    <span
                                                                        class="elementor-icon-list-text">الخدمات</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <Link
                                                                    href="{{ route('pages.view', ['privacy-policy']) }}">
                                                                <span class="elementor-icon-list-text">سياسة
                                                                    الخصوصية</span>
                                                                </Link>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <Link
                                                                    href="{{ route('pages.view', ['terms-of-use']) }}">
                                                                <span class="elementor-icon-list-text">شروط
                                                                    الاستخدام</span>
                                                                </Link>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <Link href="{{ route('pages.contact-us') }}">
                                                                <span class="elementor-icon-list-text">تواصل
                                                                    معنا </span>
                                                                </Link>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-be63760"
                                            data-id="be63760" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-bf68689 elementor-widget elementor-widget-heading"
                                                    data-id="bf68689" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                            عن محتوى
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4a4a6e9 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="4a4a6e9" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <Link href="{{ route('pages.view', ['about-us']) }}">
                                                                <span class="elementor-icon-list-text">عن
                                                                    المؤسسة</span>
                                                                </Link>
                                                            </li>

                                                            <li class="elementor-icon-list-item">
                                                                <Link href="{{ route('pages.view', ['قيمنا']) }}">
                                                                <span class="elementor-icon-list-text">قيمنا</span>
                                                                </Link>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="copyright">
                                    <p>تطوير : <a href="https://etimadsoft.com/" target="_BLANK">EtimadSoft</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div id="uicore-back-to-top" class="uicore-back-to-top uicore-i-arrow uicore_hide_mobile"></div>
    <div
        class="uicore-navigation-wrapper uicore-navbar elementor-section elementor-section-boxed uicore-mobile-menu-wrapper">
        <nav class="uicore elementor-container">
            <div class="uicore-branding uicore-mobile">
                <a href="./" rel="home">
                    <img class="uicore uicore-logo" src="{{ asset('assets/images/logo.png') }}"
                        alt="Social Media" />
                </a>
            </div>
            <div class="uicore-branding uicore-desktop"></div>
            <button type="button" class="uicore-toggle uicore-ham">
                <span class="bars">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>
            </button>
        </nav>
        <div class="uicore-navigation-content">
            <div class="uicore-menu-container uicore-nav">
                <ul class="uicore-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5">
                        <a href="{{ route('services.index') }}"><span class="ui-menu-item-wrapper">الخدمات</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6">
                        <a href="{{ route('pages.view', ['about-us']) }}"><span class="ui-menu-item-wrapper">عن
                                محتوى</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
                        <a href="#metrics"><span class="ui-menu-item-wrapper">آراء العملاء</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
                        <a href="#tracking"><span class="ui-menu-item-wrapper">تواصل معنا</span></a>
                    </li>
                </ul>
            </div>
            <div class="uicore uicore-extra">
                <div class="uicore-cta-wrapper">
                    <a href="#" data-toggle="animate-section" data-target="#order-form" target="_self"
                        class="uicore-btn uicore-inverted">
                        <span class="elementor-button-text"> اطلب الخدمة </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
