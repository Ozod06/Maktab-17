@extends('admin.site')
@section('content')
<header>
    <div class="bigBannerContent" style="background-image: url('image/329-maktab.jpg');">
        <div class="bannerContent">
            <div class="container-fluid">
                <div class="row">
                    <div class="logoTextBox">
                        <div class="col-12"></div>
                        <h1 class="logoTextBox__title text-center">
                            <b>{!! __('message.school1') !!}</b>

                        </h1>
                        <div class="quote text-center">
                            <p class="">{{ __('message.school2') }}</p>
                            <span class="">{{ __('message.school3') }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

    <main>

        <section>
            <div class="container">

                <!-- Service List Start  -->
                <div class="mainServicesList">
                    <a href="{{ route('education') }}">
                        <div class="icon">
                            <img alt="icon" src="image/oquvchi.png" width="45%" style="margin-left: 60px;">
                        </div>
                        <h1>{{ __('message.cardList1') }}</h1>
                        <div class="description">
                            <p>2-sinf dars jadvali</p>
                            <p>1-sinf dars jadvali</p>
                            <p>8-sinf dars jadvali</p>
                            <p>4-sinf dars jadvali</p>
                        </div>

                        <button type="button">{{ __('message.cardbtn') }}</button>
                    </a>
                    <a href="#">
                        <div class="icon">
                            <img alt="icon" src="image/Ota-ona.png" width="45%" style="margin-left: 75px;">
                        </div>
                        <h1>{{ __('message.cardList2') }}</h1>
                        <div class="description">

                        </div>

                        <button type="button">{{ __('message.cardbtn') }}</button>
                    </a>
                    <a href="{{ route('teachers') }}">
                        <div class="icon">
                            <img alt="icon" src="image/oqtuvchi.png" width="45%" style="margin-left: 80px;">
                        </div>
                        <h1>{{ __('message.cardList3') }}</h1>
                        <div class="description">

                        </div>

                        <button type="button">{{ __('message.cardbtn') }}</button>
                    </a>
                </div>
                <!-- Service List End -->


                <!-- School Info Start  -->
                <div class="row">
                    <h1 class="text-center text-uppercase mt-5 title">{{ __('message.statistic') }}</h1>
                    <div class="col-lg-3 col-md-6">
                        <div class="school_info" data-tilt data-tilt-scale="1.1">
                            <h2>{{ $statistic['class_count'] }}</h2>
                            <p>{{ __('message.statistic1') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="school_info" data-tilt data-tilt-scale="1.1">
                            <h2>{{ $statistic['student_count'] }}</h2>
                            <p>{{ __('message.statistic2') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="school_info" data-tilt data-tilt-scale="1.1">
                            <h2>{{ $statistic['teacher_count'] }}</h2>
                            <p>{{ __('message.statistic3') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="school_info" data-tilt data-tilt-scale="1.1">
                            <h2>{{ $statistic['graduate_count'] }}</h2>
                            <p>{{ __('message.statistic4') }}</p>
                        </div>
                    </div>
                </div>

                <!-- School Info End -->


                <hr class="sections__line">
                <!-- Online School Come Start -->
                <div class="onlineSchool">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 text-md-center d-md-inline-block d-flex align-items-center wow fadeInLeft"
                             data-wow-duration=".9s" data-wow-delay=".6s">
                            <div class="onlineSchool__info ">
                                <h1>
                                    {!! __('message.onlineschool1') !!}
                                </h1>
                                <p>
                                    {!! __('message.onlineschool2') !!}
                                </p>
                                <button class="btns" type="button">{{ __('message.cardbtn') }}</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".6s">
                            <div class="onlineSchool__img">
                                <img src="image/onlineSchool2.png" width="75%" alt="OnlineSchool">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Online School Come End -->

                <hr class="sections__line">

                <!-- Section News Start -->

                <div class="tab-content">
                    <!-- Content for Yangiliklar tab -->
                    <div class="tab-pane fade active show" id="tab1">
                        <div class="imageCardBoxes">
                            <div class="row">

                                @foreach($posts as $post)
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                        <a href="{{ route('index', $post->id) }}">

                                            <div class="imageBox">
                                                <img alt="image" src="{{ asset('admin/images/' . $post->image) }}" width="170px">
                                            </div>
                                            <h1>{{ $post->{'body_'. app()->getLocale()} }}</h1>
                                            <span>{{ $post->created_at->format('d M Y') }}</span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                            <!-- Section News End -->

                <hr class="sections__line mt-0">

                <!--Map Section Start  -->
                <div class="mapArea">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6131044.44664104!2d64.608575!3d41.381166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b20750bb92946b%3A0x54012c9057e544c8!2s11-%20umumiy%20o%CA%BBrta%20ta%CA%BClim%20maktabi!5e0!3m2!1sru!2s!4v1694608189347!5m2!1sru!2s"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!--Map Section End  -->

                <hr class="sections__line mt-5">

                <!-- Contact Section Start -->
                <div class="contact">
                    <h1 class="text-center text-uppercase mb-5 title title_map">{{ __('message.contact') }}</h1>
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <form method="POST" action="{{ route('sendEmail') }}">
                                @csrf
                                <div class="row contact_row1 text-sm-center">
                                    <div class="col-lg-6 col-md-12 ">
                                        <input type="text" placeholder="{{ __('message.contact1') }}" name="name">
                                    </div>
                                    <div class="col-lg-6 col-md-12 ">
                                        <input type="email" placeholder="{{ __('message.contact2') }}" name="email">
                                    </div>
                                </div>
                                <div class="row contact_row2 text-sm-center">
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" value="+998" placeholder="{{ __('message.contact3') }}" name="phone">
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" placeholder="{{ __('message.contact4') }}" name="mavzu">
                                    </div>
                                </div>

                                    <div class="col-12">

                                        <button type="submit" class="contact_btn text-center">{{ __('message.contact6') }}</button>
                                    </div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <h2 class="mb-3 contact__title">{{ __('message.school') }}</h2>

                            <table id="w9" class="table table-striped table-bordered detail-view">
                                <tbody>
                                <tr>
                                    <th>{{ __('message.leader') }}:</th>
                                    <td>Aripova Umida Djangirovna</td>
                                </tr>
                                <tr>
                                    <th>{{ __('message.contact3') }}:</th>
                                    <td>+99891-191-84-48</td>
                                </tr>
                                <tr>
                                    <th>{{ __('message.fax') }}:</th>
                                    <td>+99891-191-84-48</td>
                                </tr>
                                <tr>
                                    <th>{{ __('message.social') }}:</th>
                                    <td>{{ __('message.media') }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('message.social1') }}:</th>
                                    <td>{{ __('message.media') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Contact Section End -->

                <hr class="sections__line mt-5">

                <!-- Useful Links Start -->
                <div class="usefulLinks">
                    <div class="container">
                        <h1 class="mb-5">{{ __('message.links') }}</h1>
                        <div class="slider">
                            <a href="">
                                <div class="slider_content">
                                    <img src="image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>{{ __('message.slider') }}</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="image/Oliy majlis.jpg" width="10%" alt="Image 1">
                                    <h1>{{ __('message.slider1') }}</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="image/mygovUz.jpg" width="10%" alt="Image 1">
                                    <h1>{{ __('message.slider2') }}</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>{{ __('message.slider') }}</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>{{ __('message.slider') }}</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>{{ __('message.slider3') }}</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="image/mygovUz.jpg" width="10%" alt="Image 1">
                                    <h1>{{ __('message.slider4') }}</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Useful Links End -->
            </div>
        </section>
    </main>
@endsection
