@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.education') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.education') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Image Header End -->
<!-- Header End -->

<!-- Main section Start -->
<main>
    <section>
        <div class="main_tabs" style="padding: 10px 0;">
            <div class="container">

                <div class="serviceTabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <a class="nav-link show active" data-toggle="tab" href="{{route('smenaOne')}}" role="tab"
                               aria-selected="true">{{ __('message.shift1') }}</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="{{route('smenaTwo')}}" role="tab"
                               aria-selected="false">{{ __('message.shift2') }}</a>
                        </li>


                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="{{route('additionallesson')}}" role="tab"
                               aria-selected="false">{{ __('message.additional') }}</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link " data-toggle="tab" href="#tab4" role="tab"
                               aria-selected="true">{{ __('message.sports') }}</a>
                        </li>

                    </ul>
                </div>
                <div class="tab-content mt-5">

                    <!-- 1  --  SMENA -->
                    <div class="tab-pane fade active show" id="tab1" role="tabpanel">
                        <!-- 1-smena -->
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="servicesList">
                                @foreach($smena1 as $class)
                                    <a href="{{ route('class.show', $class->id) }}">
                                        <div>
                                        <div class="icon">
                                            <img src="{{ asset('admin/flags/jadval.jpg') }}" alt="icon">
                                        </div>
                                        <span>{{ $class->name }} dars jadvali</span>
                                        </div>

                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- 2  --  SMENA -->
                    <!-- 2-smena -->
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="servicesList">
                            @foreach($smena2 as $class)
                                <a href="{{ route('class.show', $class->id) }}">
                                    <div class="icon">
                                        <img src="{{ asset('admin/images/' . $class->image) }}" alt="icon">
                                    </div>
                                    <span>{{ $class->name }} dars jadvali</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Qo'shimcha Darslar -->
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="servicesList">
                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Hunarmandlar</span>
                                </div>
                                <span>Hunarmandlar</span>
                            </a>

                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Sehrli qo'llar</span>
                                </div>
                                <span>Sehrli qo'llar</span>
                            </a>

                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Mohir qo'llar</span>
                                </div>
                                <span>Mohir qo'llar</span>
                            </a>

                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Dasturchilar</span>
                                </div>
                                <span>Dasturchilar</span>
                            </a>

                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Matematiklar</span>
                                </div>
                                <span>Matematiklar</span>
                            </a>

                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Yosh kimyogarlar </span>
                                </div>
                                <span>Yosh kimyogarlar</span>
                            </a>

                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Yosh biolog</span>
                                </div>
                                <span>Yosh biolog</span>
                            </a>

                            <a href="{{route('additionallesson')}}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Al Xorazmiy avlodlari</span>
                                </div>
                                <span>Al Xorazmiy avlodlari </span>
                            </a>
                        </div>
                    </div>
                    <!-- Sport To'garaklari -->
                    <div class="tab-pane fade " id="tab4" role="tabpanel">
                        <div class="servicesList">
                            <a href="education.html">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Milliy Kurash </span>
                                </div>
                                <span>Milliy Kurash </span>
                            </a>

                            <a href="educationDetails.html">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Futbol</span>
                                </div>
                                <span>Futbol</span>
                            </a>

                            <a href="educationDetails.html">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Voleybol</span>
                                </div>
                                <span>Voleybol</span>
                            </a>

                            <a href="educationDetails.html">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Dzyudo</span>
                                </div>
                                <span>Dzyudo</span>
                            </a>

                            <a href="educationDetails.html">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Taekvando</span>
                                </div>
                                <span>Taekvando</span>
                            </a>

                            <a href="educationDetails.html">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Regbi</span>
                                </div>
                                <span>Regbi</span>
                            </a>

                            <a href="educationDetails.html">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Badiiy Gimnastika</span>
                                </div>
                                <span>Badiiy Gimnastika</span>
                            </a>

                            <a href="#">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Shaxmat</span>
                                </div>
                                <span>Shaxmat</span>
                            </a>

                            <a href="#">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="/image/book svg.jfif">
                                    </div>
                                    <span>Harakatli o'yinlar</span>
                                </div>
                                <span>Harakatli o'yinlar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main section End -->
@endsection
