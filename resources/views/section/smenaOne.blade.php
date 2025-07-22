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

                <div class="container mt-5">
                    <h2>1-smena sinflari</h2>

                    <div class="servicesList">
                        @foreach($classrooms as $class)
                            <a href="{{ route('class.show', $class->id) }}">
                                <div>
                                    <div class="icon">
                                        <img alt="icon" src="{{ asset('/admin/flags/jadval.jpg') }}">
                                    </div>
                                    <span>{{ $class->name }} dars jadvali</span>
                                </div>

                            </a>
                        @endforeach
                    </div>
                 </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->

    @endsection
