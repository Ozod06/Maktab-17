
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('./css/animate.css') }}">
    <!-- Font awesome style -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css') }}">


    <!-- Custom style for this template -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
<!-- Header Start -->
<header>
    <div class="bannerBox">
        <!-- Header Nav Start -->
        <div class="headerBar">


            <div class="topMainMenu">
                <a href="http://127.0.0.1:8000/" class="topMain-logo">
                    <img src="{{ asset('image/Gerb.png') }}" alt="" width="10%">
                    <p>{{ __('message.school') }}</p>
                </a>
                <ul>
                    <li>
                        <a href="https://vacancy.argos.uz/">{{ __('message.work') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('schoolRules') }}">{{ __('message.rules') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}">{{ __('message.faq') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('stateSymbol')}}">{{ __('message.symbol') }}</a>
                    </li>
                </ul>
                <div class="additionalFuntions">
                    <a href="#" class="eye"><i class="fa-regular fa-eye text-white me-2"></i></a>
                    <a href="#" class="searchBtn text-white">|
                        <i class="fa-solid fa-magnifying-glass text-white mb-3 ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="headerMenuBox">
                    <div class="bigMenuBtn">
                        <button type="button" class="borderedBtn">
                            <div class="menuBars">

                            </div>
                        </button>
                        <!-- Click bolganda Brauzer chap tomondan chiqadi -->
                        <div class="overlay">
                            <div class="container">
                                <div class="topLogoGerb">
                                    <img src="image/Gerb.png" alt="Logo" width="13%">
                                </div>

                                <div class="listMenu">
                                    <ul>
                                        <li><a href="{{route('schoolTask')}}">{{ __('message.aboutschool') }}</a>
                                            <ul>
                                                <li><a href="{{route('schoolTask')}}">{{ __('message.schooltask') }}</a></li>
                                                <li><a href="{{route('director')}}">{{ __('message.director') }}</a></li>
                                                <li><a href="{{route('teachers')}}">{{ __('message.teachers') }}</a></li>
                                                <li><a href="{{route('rekvizit')}}">{{ __('message.presentation') }}</a></li>
                                            </ul>
                                        </li><li><a href="{{route('education')}}">{{ __('message.education') }}</a>
                                            <ul>
                                                <li><a href="{{route('education')}}">{{ __('message.shift1') }}</a></li>
                                                <li><a href="{{route('education')}}">{{ __('message.shift2') }}</a></li>
                                                <li><a href="{{route('education')}}">{{ __('message.additional') }}</a></li>
                                                <li><a href="{{route('education')}}">{{ __('message.sports') }}</a></li>
                                            </ul>
                                        </li><li><a href="{{route('schoolNews')}}">{{ __('message.information') }}</a>
                                            <ul>
                                                <li><a href="{{route('schoolNews')}}">{{ __('message.news') }}</a></li>
                                                <li><a href="{{route('gallery')}}">{{ __('message.gallery') }}</a></li>
                                                <li><a href="{{route('infoGrafika')}}">{{ __('message.infografica') }}</a></li>
                                            </ul>
                                        </li></ul>
                                    <ul class="simple">
                                        <li><a href="{{route('usefulResourse')}}">{{ __('message.resourse') }}</a></li>
                                        <li><a href="{{route('contact')}}">{{ __('message.connect') }}</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- Click bolganda Brauzer chap tomondan chiqadi -->
                    </div>
                    <div class="mainMenuBox">
                        <div class="menuList">

                            <!--  -->
                            <div class="menuLine"></div>
                            <!--  -->
                            <div class="bottomMainMenu">
                                <ul class="menu">
                                    <li>
                                        <a href="{{route('schoolTask')}}" class="">{{ __('message.aboutschool') }}</a>

                                        <ul class="menu_ul-li">
                                            <li>
                                                <a href="{{route('schoolTask')}}">{{ __('message.schooltask') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('director')}}">{{ __('message.director') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('teachers')}}">{{ __('message.teachers') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('rekvizit')}}">{{ __('message.presentation') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('education')}}">{{ __('message.education') }}</a>
                                        <ul class="menu_ul-li">
                                            <li>
                                                <a href="{{route('education')}}">{{ __('message.shift1') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('education')}}">{{ __('message.shift2') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('education')}}">{{ __('message.additional') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('education')}}">{{ __('message.sports') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('usefulResourse')}}">{{ __('message.resourse') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('schoolNews')}}">{{ __('message.information') }}</a>
                                        <ul class="menu_ul-li">
                                            <li>
                                                <a href="{{route('schoolNews')}}">{{ __('message.news') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('gallery')}}">{{ __('message.gallery') }}</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="{{route('infoGrafika')}}">{{ __('message.infografica') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">{{ __('message.connect') }} </a>
                                    </li>
                                </ul>
                            </div>


                            <!-- Search Start-->
                            <form id="w2" class="mainSearchForm" action="{{ route('search') }}" method="get">
                                <div class="input-group">
                                    <input type="text" id="mainSearch" class="form-control" placeholder="{{ __('message.search') }}"
                                           name="ContentSearch">

                                    <div class="input-group-prepend">
                                        <button class="btn __searchBtn closeBtn" type="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                            </form>

                            <!-- Search End-->

                            @php
                                $lang = session('lang', 'uz'); // default 'uz'
                            @endphp

                            <div class="dropdown langBar text-end gap-3">
                                <button class="btn btn-light border dropdown-toggle d-flex align-items-center gap-2" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    @if($lang == 'ru')
                                        <img src="{{ asset('admin/flags/ru.png') }}" alt="ru" width="20"> Рус
                                    @else
                                        <img src="{{ asset('admin/flags/uz.png') }}" alt="uz" width="20"> Uzb
                                    @endif
                                </button>
                                <ul class="dropdown-menu text-start" aria-labelledby="langDropdown">
                                    @if($lang == 'ru')
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center gap-2" href="{{ url('/lang/uz') }}">
                                                <img src="{{ asset('admin/flags/uz.png') }}" alt="uz" width="20"> Uzb
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center gap-2" href="{{ url('/lang/ru') }}">
                                                <img src="{{ asset('admin/flags/ru.png') }}" alt="ru" width="20"> Рус
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>


                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->


        <!-- Big logo start -->

        <!-- Big Logo end -->
    </div>
</header>
<!-- Header End -->


<!-- Main Section Start -->

<!-- Main Section End -->
@yield('content')
<!-- Footer Start  -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <ul class="footer_menu">
                    <li>
                        <a href="https://vacancy.argos.uz/">{{ __('message.work') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('schoolRules') }}">{{ __('message.rules') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}">{{ __('message.faq') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('stateSymbol')}}">{{ __('message.symbol') }}</a>
                    </li>
                </ul>
            </div>
            <div class="footer_contact-left">
                <a href="#">
                    <i class="fab fa-instagram"></i>
                    <span>{{ __('message.media') }}</span>
                </a>
                <a href="#">
                    <i class="fas fa-envelope"></i>
                    <span>{{ __('message.media') }}.com</span>
                </a>
            </div>
            <div class="footer_contact-right">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    <span>{{ __('message.media') }}</span>
                </a>
                <a href="#">
                    <i class="fab fa-telegram-plane"></i>
                    <span>{{ __('message.media') }}</span>
                </a>
            </div>
            <div class="footer_logo">
                    <span>
                        <img src="{{ asset('./image/Gerb.png') }}" alt="Logo" width="20%">
                    </span>
                <a href="">
                    <b>{!! __('message.school1') !!}</b>
                </a>
            </div>


            <a href="#" class="it_live-logo">
                <img src="{{ asset('./image/It live logo for red-04-04.png') }}" alt="IT_Live" class="it_live-img">
            </a>
            <span class="year_text">
                    {{ __('message.deference') }}
                </span>
        </div>
    </div>
</footer>
<!-- Footer End -->

</body>

<!-- Js -->


<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js') }}"></script>
<script src="{{ asset('/js/tilt.jquery.js') }}"></script>
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Js -->







</html>
