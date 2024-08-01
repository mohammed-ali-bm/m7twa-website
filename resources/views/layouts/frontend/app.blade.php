<div class="animated-bg dir-rtl">
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="shape-3"></div>



</div>

<div class="glow-container">
    <div class="ball"></div>
    <div class="ball" style="--delay:-12s;--size:0.35;--speed:25s;"></div>
    <div class="ball" style="--delay:-10s;--size:0.3;--speed:15s;"></div>

</div>

<div class="content dir-rtl content-container">


    <div class="overlay-menu overlay-2-menu" style="display: none;">

        <div class="burger-menu d-block d-sm-none   menu-content-close " onclick="toggleMenu()">
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
        </div>
        <ul class="menu-items ">
            <Link href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                class="front-logo"></Link>
            <li class="menu-item">
                <Link href="{{ route('flats.index') }}" data-target="#features-section">تصفح الشقق</Link>
            </li>

            <li class="menu-item"><a href="tel:0555077344" data-target="#services-section">قسم المقاولات</a></li>
            <li class="menu-item"><a href="tel:0538777907" data-target="#features-section">معمل الجبس</a></li>



        </ul>
    </div>


    <div class="intro-wrapper">
        <div class="site-header">
            <Link href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                class="front-logo"></Link>
            <nav class="site-nav">
                <ul>

                    <li class="menu-item">
                        <Link href="{{ route('flats.index') }}" data-target="#features-section">تصفح الشقق</Link>
                    </li>
                    <li class="menu-item"><a href="tel:0555077344" data-target="#services-section">قسم المقاولات</a>
                    </li>
                    <li class="menu-item"><a href="tel:0538777907" data-target="#features-section">معمل الجبس</a></li>



                    {{-- <li>
                        <Link href="{{ route('home') }}">حسابي</Link>
                    </li>
                    <li>
                        <Link href="{{ route('home') }}">الإحصائيات</Link>
                    </li>
                    <li>
                        <Link href="{{ route('home') }}"> الإعدادات</Link>
                    </li> --}}
                    {{-- <li><Link href="{{ route('pages.view' , ['slung' => 'سياسة-الخصوصية']) }}">سياسة الخصوصية</Link></li> --}}
                    {{-- <li><Link href="{{ route('pages.view' , ['slung' => 'من-نحن']) }}">من نحن</Link></li> --}}
                    {{-- <li><Link href="{{ route('contact.index') }}">اتصل بنا</Link></li> --}}
                </ul>
            </nav>

            <div class="mobile-menu-icon">
                <div class="burger-menu d-block d-sm-none " onclick="toggleMenu()">
                    <div class="burger-bar"></div>
                    <div class="burger-bar"></div>
                    <div class="burger-bar"></div>
                </div>
            </div>
        </div>


        @yield('content')




        @yield('footer-js')

        <div class="z-30 bg-glass">
            <footer class="">
                <div class="footer-content">
                    <div class="scroll-fade-only">
                        <Link href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                            class="footer-logo"></Link>
                        <p class="footer-site-description">

                            شركة أصول الدار العقارية تعتبر من الشركات الرائدة في مجال تطوير وإدارة العقارات الفاخرة.
                            تأسست برؤية تهدف إلى تقديم حلول عقارية مبتكرة ومستدامة تلبي احتياجات السوق المتنوعة. تتميز
                            الشركة بمشاريعها المتميزة التي تجمع بين التصميم العصري والجودة العالية، وتحرص على تقديم
                            خدمات متكاملة تتجاوز توقعات العملاء. تسعى أصول الدار لتعزيز رضا العملاء من خلال تقديم تجربة
                            سكنية فريدة تلبي أعلى معايير الراحة والأمان.
                        </p>
                    </div>


                    <p class="copyright">
                        جميع الحقوق محفوظة - اصول الدار العقارية {{ date('Y') }} </p>
                </div>
            </footer>
        </div>

    </div>
</div>
