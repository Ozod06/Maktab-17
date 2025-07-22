@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.rules') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.rules') }}</li>
                        </ol>
                    </nav>
                    <!-- <div class="imageBox">
                        <img alt="." src="image/123.jpg_large">
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Image Header End -->

<!-- Header End -->

<!-- Main section Start -->
<main>
    <section>
        <div class="school-rules">
            <div class="container">
                <h4 class="text-center">{{ __('message.rules1') }}</h4>
                <p style="text-align: justify;" class="">{!! __('message.rules2') !!}</p>


                <h4 class="text-center">{{ __('message.rules3') }}</h4>
                <p style="text-align: justify;">{!! __('message.rules4') !!}</p>

            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
