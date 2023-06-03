<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,900" rel="stylesheet">

    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Animate css file for css3 animations. for more : https://daneden.github.io/animate.css') }} -->
    <!-- Only use animate action. If you dont use animation, you don't have to add.-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cryptocoins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/c3-chart/c3.css') }}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/global.style.css') }}">

    <!-- Swiper slider css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jqcandlestick.css') }}">

    <!--turbo slider plugin css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/turbo-slider/turbo.css') }}">
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '{{ asset('assets/js/fbevents.js') }}');
        fbq('init', '692589158011169');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=692589158011169&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>


    <div class="wrapper ">
        <div class="nav-menu">
            <nav class="menu">

                <!-- Menu navigation start -->
                <div class="nav-container">
                    <ul class="main-menu">
                        <li class="active">
                            <a href="index.html"><img src="{{ asset('assets/img/content/icons/1.png') }}"
                                    alt=""><strong class="special">Dashboard</strong> </a>
                        </li>
                        <li class="">
                            <a href="wallet.html"><img src="{{ asset('assets/img/content/icons/2.png') }}"
                                    alt=""><strong class="special">My Walet</strong> </a>
                        </li>
                        <li class="">
                            <a href="trading.html"><img src="{{ asset('assets/img/content/icons/3.png') }}"
                                    alt=""><strong class="special">Crypto Trade</strong> </a>
                        </li>
                        <li class="">
                            <a href="buy-sell.html"><img src="{{ asset('assets/img/content/icons/6.png') }}"
                                    alt=""><strong class="special">Buy & sell</strong> </a>
                        </li>
                        <li class="">
                            <a href="profile.html"><img src="{{ asset('assets/img/content/icons/5.png') }}"
                                    alt=""><strong class="special">Trader Profile</strong> </a>
                        </li>
                        <li class="">
                            <a href="affiliate.html"><img src="{{ asset('assets/img/content/icons/4.png') }}"
                                    alt=""><strong class="special">Affiliate System</strong> </a>
                        </li>
                        <li class="">
                            <a href="setting.html"><img src="{{ asset('assets/img/content/icons/11.png') }}"
                                    alt=""><strong class="special">Settings</strong> </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/content/icons/9.png') }}"
                                    alt=""><strong class="special">Login/Register</strong> <span
                                    class="fa fa-angle-down"></span></a>
                            <ul>
                                <li><a href="login.html" data-loader="show">Login</a></li>
                                <li><a href="signup.html" data-loader="show">Register</a></li>
                                <li><a href="forgot-password.html" data-loader="show">Forgot Password</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/content/icons/8.png') }}"
                                    alt=""> <strong class="special">Wizards</strong> <span
                                    class="fa fa-angle-down"></span></a>
                            <ul>
                                <li><a href="wizard-default.html" data-loader="show">Wizard Default</a></li>
                                <li><a href="wizard-fullscreen.html" data-loader="show">Wizard Fullscreen</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="charts.html"><img src="{{ asset('assets/img/content/icons/14.png') }}"
                                    alt=""><strong class="special">Charts</strong> </a>
                        </li>
                        <li>
                            <a href="forms.html" data-loader="show"><img
                                    src="{{ asset('assets/img/content/icons/7.png') }}" alt=""><strong
                                    class="special">Form Elements</strong></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('assets/img/content/icons/10.png') }}"
                                    alt=""><strong class="special"> Components</strong> <span
                                    class="fa fa-angle-down"></span></a>
                            <ul>
                                <li><a href="tab-bottom.html" data-loader="show">Tab (Bottom)</a></li>
                                <li><a href="tab-top.html" data-loader="show">Tab (Top)</a></li>
                                <li><a href="accordion.html" data-loader="show">Accordion</a></li>
                                <li><a href="popup.html" data-loader="show">Popup Modal</a></li>
                                <li><a href="checkbox-list.html" data-loader="show">Check List</a></li>
                                <li><a href="link-list.html" data-loader="show">Link List</a></li>
                                <li><a href="link-list-two-column.html" data-loader="show">Two Column Links</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><img src="{{ asset('assets/img/content/icons/15.png') }}"
                                    alt=""><strong class="special"> Pages</strong> <span
                                    class="fa fa-angle-down"></span></a>
                            <ul>
                                <li class=""><a href="profile.html" data-loader="show">User Profile</a></li>
                                <li><a href="search-result.html" data-loader="show">Search Results</a></li>
                                <li><a href="contact.html" data-loader="show">Contact</a></li>
                                <li><a href="blank.html" data-loader="show">Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Menu navigation end -->
            </nav>
        </div>

        <div class="wrapper-inline">
            <!-- Header area start -->
            <header class="no-background">


                <div class="navi-menu-button">
                    <em></em>
                    <em></em>
                    <em></em>
                </div>

            </header>

            <div class="bottom-menu-section">
                <ul class="bottom-menu list-unstyled list-inline">
                    <li>
                        <a href="index.html">
                            <img src="{{ asset('assets/img/content/l1.png') }}" alt="">
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="wallet.html">
                            <img src="{{ asset('assets/img/content/l2.png') }}" alt="">
                            <p>Wallet</p>
                        </a>
                    </li>
                    <li>
                        <a class="b-m-pluse" href="#"><i class="fa fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="setting.html">
                            <img src="{{ asset('assets/img/content/l3.png') }}" alt="">
                            <p>Cards</p>
                        </a>
                    </li>
                    <li>
                        <a href="profile.html">
                            <img src="{{ asset('assets/img/content/l4.png') }}" alt="">
                            <p>Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
