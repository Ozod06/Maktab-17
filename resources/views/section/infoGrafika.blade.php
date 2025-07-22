@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.infografica') }}</h1>
                    <nav aria-label="breadcrumb">
                        <div class="imageBox">
                            <img alt="." src="{{ asset('/uploads/2021/10/KqcEMN3UlMLcUSFT-SFzhV21ayoQpzzj.jpg') }}">
                        </div>
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.infografica') }}</li>
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
        <div class="infografika">
            <div class="container">
                <div class="infografika_content">
                    @foreach($infografiks as $infografik)
                    <div class="item">
                        <a href="{{ route('index', $infografik->id) }}">
                            <div class="imageBox">
                                <img alt="image" src="{{ asset('admin/images/' . $infografik->image) }}" width="170px">
                            </div>
                            <div class="descriptionBox">
                                <h1>{{ $infografik->{'title_'. app()->getLocale()} }}</h1>
                                <span>{{ $infografik->created_at->format('d M Y') }}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
