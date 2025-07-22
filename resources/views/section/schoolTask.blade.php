@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.schooltask') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.schooltask') }}</li>
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
            <div class="mainQuoteBox">
                <div></div>
                <div class="quoteBox">
                    <p>{{ __('message.school2') }}</p>
                    <span>{{ __('message.school3') }}</span>
                </div>
            </div>
        </div>

        <div class="ourMissionBig">
            <div class="container">
                <div class="content">
                    <h1 class="greenTitle">{{ __('message.task1') }}</h1>
                    <p>{{ __('message.task2') }}</p>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="greenTitle center">{{ __('message.task3') }}</h1>
            <p class="text-center">{!! __('message.task4') !!} </p>

            <ul class="tasksListWithTicks">
                <li>{!! __('message.task5') !!}</li>
                <li>{!! __('message.task6') !!}</li>
                <li>{!! __('message.task7') !!}</li>
                <li>{!! __('message.task8') !!}</li>
                <li>{!! __('message.task9') !!}</li>
                <li>{!! __('message.task10') !!}</li>
            </ul>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
