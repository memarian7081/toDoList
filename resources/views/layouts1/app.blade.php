
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>to-do-list</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--

    TemplateMo 570 Chain App Dev

    https://templatemo.com/tm-570-chain-app-dev

    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-chain-app-dev.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo" style="width: 5%">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Chain App Dev">
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{route('index')}}" class="active">صفحه اصلی</a></li>
                        <li class="scroll-to-section"><a href="{{route('tasks.create')}}">افزودن تسک</a></li>
                        <li class="scroll-to-section"><a href="{{route('login.list')}}">لیست کاربران</a></li>
                        <li class="scroll-to-section"><a href="#newsletter">اخبار</a></li>
                        <li><div class="gradient-button"><a id="modal_trigger" href="{{route('login.create')}}"><i class="fa fa-sign-in-alt"></i> ثبت نام</a></div></li>
                        <li><div class="gradient-button"><a id="modal_trigger" href="{{route('login.login')}}"><i class="fa fa-sign-in-alt"></i>ورود</a></div></li>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li><div class="gradient-button"><a id="modal_trigger" href="{{route('logout')}}"><i class="fa fa-sign-in-alt"></i>خروج</a></div></li>
                        @endif



                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>

<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Oruse your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>با کمک ما وظایفتان را مدیریت و سازماندهی کنید</h2>
                                    <p>ما در این سایت به شما کمک میکنیم تا بتوانید وظایف و کارهای روزمره را با نظم و قانون پیش ببرید.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/slider-dec.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    @yield("content1")
</main>
<footer id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>برای دریافت اخبار و آخرین روندها به لیست پستی ما بپیوندید</h4>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <form id="search" action="#" method="GET">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <fieldset>
                                <input type="address" name="address" class="email" placeholder="ایمیل را وارد کنید..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <fieldset>
                                <button type="submit" class="main-button">ارسال <i class="fa fa-angle-right"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>درباره ما</h4>
                    <p>ایران -مشهد</p>
                    <p><a href="#">0852322</a></p>
                    <p><a href="#">info@company.co</a></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>لینک های مفید</h4>
                    <ul>
                        <li><a href="#">Free Apps</a></li>
                        <li><a href="#">App Engine</a></li>
                        <li><a href="#">Programming</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">App News</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">App Dev Team</a></li>
                        <li><a href="#">Digital Web</a></li>
                        <li><a href="#">Normal Apps</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>درباره شرکت</h4>
                    <div class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <p>شرکت برنامه ریزی در سال1403 با هدف ایجاد راه‌حل‌های نوآورانه در زمینه [حوزه کاری، مانند برنامه‌ریزی و مدیریت پروژه] تأسیس شد. ما یک تیم متخصص و پرشور هستیم که به دنبال ارتقاء کیفیت زندگی کاری افراد و سازمان‌ها از طریق ابزارهای کارآمد و کاربرپسند هستیم.</p>
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('assets/js/animation.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('assets/js/popup.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>

