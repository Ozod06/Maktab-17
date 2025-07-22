@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.detail') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.detail') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Image Header End -->

<!-- Main section Start -->
<main>
    <section>
        <div class="leaderShip">
            <!-- Togaraklar Detail -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('admin/images/' . $detail->image) }}" class="img-fluid rounded" alt="To‘garak rasmi">
                    </div>
                    <div class="col-md-6">
                        <h3 class="fw-bold mt-3">🕒 Время:</h3>
                        <p>{{ $detail->days }}</p>
                        <p>{{ $detail->time }}</p>

                        <h3 class="fw-bold mt-3">👨‍🏫 Учитель:</h3>
                        <p>{{ $detail->teacher_firstname_uz }} {{ $detail->teacher_lastname_uz }}</p>

                        <h3 class="fw-bold mt-3">📚 Группа (sinfi):</h3>
                        <p>{{ $detail->grade }}</p>
                    </div>
                </div>
            </div>

            <hr class="sections__line">
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
