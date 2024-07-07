<div class="animated-bg dir-rtl">
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="shape-3"></div>



</div>

<div class="content dir-rtl">
    <div class="overlay-menu overlay-1-menu" style="display: none;">

    </div>

    <div class="overlay-menu overlay-2-menu" style="display: none;">
        <div class="burger-menu d-block d-sm-none   menu-content-close " onclick="toggleMenu()">
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
        </div>
        <ul class="menu-items ">
            @if (auth()->check())
                <li class="menu-item">
                    <Link href="{{ url('results') }}">قائمة المسجلين</Link>
                </li>
                <li class="menu-item">
                    <Link href="{{ route('sessions.create') }}">إضافة جلسة جديدة</Link>
                </li>
                <li class="menu-item">
                    <Link href="{{ route('sessions.index') }}">إدارة الجلسات</Link>
                </li>
            @else
                <li class="menu-item"><a href="https://albahamajlis.org/">موقع المجلس</a></li>
                <li class="menu-item"><a href="https://system.majlis-ngos.org.sa/">الإشتراك في العضوية</a></li>
                <li class="menu-item"><a
                        href="https://albahamajlis.org/%d8%aa%d9%88%d8%a7%d8%b5%d9%84-%d9%85%d8%b9%d9%86%d8%a7/">تواصل
                        معنا</a></li>
            @endif
        </ul>
    </div>


    <div class="intro-wrapper">
        <div class="site-header">
            <Link href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                class="front-logo"></Link>
            <nav class="site-nav">
                <ul>
                    @if (auth()->check())
                        <li class="menu-item">
                            <Link href="{{ url('results') }}">قائمة المسجلين</Link>
                        </li>
                        <li class="menu-item">
                            <Link href="{{ route('sessions.create') }}">إضافة جلسة جديدة</Link>
                        </li>
                        <li class="menu-item">
                            <Link href="{{ route('sessions.index') }}">إدارة الجلسات</Link>
                        </li>
                    @else
                        <li class="menu-item"><a href="https://albahamajlis.org/">خدمات العيادة</a></li>
                        <li class="menu-item"><a href="https://system.majlis-ngos.org.sa/">مميزاتنا</a></li>
                        <li class="menu-item"><a
                                href="https://albahamajlis.org/%d8%aa%d9%88%d8%a7%d8%b5%d9%84-%d9%85%d8%b9%d9%86%d8%a7/">
                                احجز موعد</a></li>
                        <li class="menu-item"><a
                                href="https://albahamajlis.org/%d8%aa%d9%88%d8%a7%d8%b5%d9%84-%d9%85%d8%b9%d9%86%d8%a7/">
                                اتصل بنا</a></li>
                    @endif

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




        <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
        <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
        @yield('footer-js')

        <script>
            window.addEventListener('scroll', function() {
                var header = document.querySelector('.site-header');

                if (window.scrollY > 0) {
                    header.classList.add('fixed');
                } else {
                    header.classList.remove('fixed');
                }
            });
        </script>
        <footer>
            <div class="footer-content">
                <div>
                    <Link href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                        class="footer-logo"></Link>

                    <p class="footer-site-description">عيادة الحياة هي عيادة رائدة متخصصة في مجال التجميل، حيث تقدم
                        مجموعة واسعة من الخدمات الجمالية والعلاجية بأعلى مستويات الجودة والاحترافية. تسعى عيادة الحياة
                        إلى تحقيق الرضا الكامل لعملائها من خلال استخدام أحدث التقنيات والمعدات الطبية المعتمدة دوليًا،
                        بالإضافة إلى فريق من الأطباء والمختصين ذوي الخبرة والكفاءة العالية.</p>
                </div>

                <div>
                    <h5 class="footer-title">روابط سريعة</h5>

                    <ul>
                        <li class="menu-item"><a href="https://albahamajlis.org/">خدماتنا</a></li>
                        <li class="menu-item"><a href="https://system.majlis-ngos.org.sa/">مميزاتنا</a></li>
                        <li class="menu-item"><a
                                href="https://albahamajlis.org/%d8%aa%d9%88%d8%a7%d8%b5%d9%84-%d9%85%d8%b9%d9%86%d8%a7/">تواصل
                                معنا</a></li>
                    </ul>
                </div>
                <div>

                    <h5 class="footer-title">تابعنا على</h5>
                    <ul class="footer-social">
                        <li class="menu-item"><a href="https://albahamajlis.org/" class="footer-social-icon"><i class="fi fi-brands-instagram"></i></a></li>
                        <li class="menu-item"><a href="https://albahamajlis.org/" class="footer-social-icon"><i class="fi fi-brands-twitter"></i></a></li>
                        <li class="menu-item"><a href="https://albahamajlis.org/" class="footer-social-icon"><i class="fi fi-brands-snapchat"></i></a></li>
                        <li class="menu-item"><a href="https://albahamajlis.org/" class="footer-social-icon"><i class="fi fi-brands-whatsapp"></i></a></li>
                    
                    </ul>
                </div>


                <p class="copyright">
                    جميع الحقوق محفوظة - عيادة الحياة {{ date('Y') }} </p>
            </div>

        </footer>

    </div>
