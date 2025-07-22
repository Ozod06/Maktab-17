@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.presentation') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.presentation') }}</li>
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
        <div class="container">
            <div class="page_content mb-5 mt-5"><b></b>
                <p></p>
                <p><strong>{{ __('message.byujed1') }}</strong></p>

                <p>{{ __('message.byujed2') }}</p>

                <p>{{ __('message.byujed3') }}</p>

                <p>{{ __('message.byujed4') }}</p>

                <p>{{ __('message.byujed5') }}</p>

                <p>{{ __('message.byujed6') }}</p>

                <p>{{ __('message.byujed7') }}</p>
                <p></p>
            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
