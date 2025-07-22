@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.gallery') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.gallery') }}</li>
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
        <div class="schoolGallery">
            <div class="container">
                <h1 class="gallery_title">{{ __('message.gallery') }}</h1>
                <div class="row">
                    @foreach ($galleries as $item)
                        <div class="col-12 mb-2">
                            <img src="{{ asset('admin/images/' . $item->image) }}" alt="Img" width="100%" height="90%">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
