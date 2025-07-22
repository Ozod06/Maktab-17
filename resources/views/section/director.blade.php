@extends('admin.site')
@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle text-dark">{{ __('message.director') }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('message.director') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <main>
        <section>
            <div class="leaderShip container">
                {{-- Asosiy direktor --}}
                @if($director)
                    <a href="{{ route('director.show', $director->id) }}" class="mainLeader">
                    <img src="{{ asset('admin/images/' . $director->image) }}" alt="Director Photo">
                        <div class="details">
                            <h1 class="staffTitle">
                                <b>{{ strtoupper($director->first_name_uz) }}</b><br>
                                {{ strtoupper($director->last_name_uz) }}<br>
                                {{ strtoupper($director->middle_name_uz) }}
                            </h1>
                            <span>{{ $director->position->name_uz }}</span>
                        </div>
                    </a>
                @endif

                <hr class="sections__line">

                {{-- Zam direktor --}}
                @if($zamDirector)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="{{ route('director.show', $zamDirector->id) }}" class="deputy_director-main">
                            <img src="{{ asset('admin/images/' . $zamDirector->image) }}" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1 class="staffTitle">
                                    <b>{{ strtoupper($zamDirector->first_name_uz) }}</b><br>
                                    {{ strtoupper($zamDirector->last_name_uz) }}<br>
                                    {{ strtoupper($zamDirector->middle_name_uz) }}
                                </h1>
                                <span>{{ $zamDirector->position->name_uz }}</span>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection
