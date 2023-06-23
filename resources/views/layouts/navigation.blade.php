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
        <div class="wrapper-inline">
            <div class="bottom-menu-section">
                <ul class="bottom-menu list-unstyled list-inline">
                    <li>
                        <a href="{{ route('LandingPage') }}">
                            <div class="text-center p-2">
                                <i class="fa fa-home" aria-hidden="true" style="font-size:30px;color:#FFDB08"></i>
                                <p>Home</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('User.Perform.Task') }}">
                            <div class="text-center p-2">
                                <i class="fa fa-podcast" aria-hidden="true" style="font-size:30px;color:#FFDB08"></i>
                                <p>Mission</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('User.Vip.Levels') }}">
                            <div class="text-center p-2">
                                <i class="fa fa-star" aria-hidden="true" style="font-size:30px;color:#FFDB08"></i>
                                <p>Vip</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('User.My.Team') }}">
                            <div class="text-center p-2">
                                <i class="fa fa-users" aria-hidden="true" style="font-size:30px;color:#FFDB08"></i>
                                <p>Team</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('User.My.Profile') }}">
                            <div class="text-center p-2">
                                <i class="fa fa-user-o" aria-hidden="true" style="font-size:30px;color:#FFDB08"></i>
                                <p>Mine</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
