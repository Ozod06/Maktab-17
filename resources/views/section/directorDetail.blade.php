@extends('admin.site')
@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle text-dark">Rahbar batafsil</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Asosiy</a></li>
                        <li class="breadcrumb-item">Rahbariyat Batafsil</li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <main>
        <section>
            <div class="leaderShip container">

                {{-- Agar oddiy direktor bo‘lsa --}}
                @if ($director)
                    <div class="leaderInfo">
                        <div class="photo">
                            <img src="{{ asset('admin/images/' . $director->image) }}" alt="Director Photo">
                        </div>
                        <div class="description">
                            <h1 class="staffTitle"><b>{{ strtoupper($director->first_name_uz) }}</b><br>
                                {{ strtoupper($director->last_name_uz) }}<br>
                                {{ strtoupper($director->middle_name_uz) }}</h1>
                            <h2>{{ $director->position->name_uz }}</h2>
                            <div class="contactInfo">
                                <div><i class="far fa-clock"></i><span>{{ $director->work_time }}</span></div>
                                <div><i class="fas fa-phone-alt"></i><span>{{ $director->phone }}</span></div>
                                <div><i class="far fa-envelope-open"></i><span>{{ $director->email }}</span></div>
                            </div>
                            <div class="collapseBox mt-3">
                                <a class="btn btn-link" data-bs-toggle="collapse" href="#bio{{ $director->id }}" role="button" aria-expanded="false">
                                    Biografiya
                                </a>
                                <div class="collapse" id="bio{{ $director->id }}">
                                    <div class="card card-body">{{ $director->biography_uz }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Agar zam direktor bo‘lsa --}}
                @if ($zamDirector)
                    <div class="leaderInfo mt-5">
                        <div class="photo">
                            <img src="{{ asset('admin/images/' . $zamDirector->image) }}" alt="Zam Director Photo">
                        </div>
                        <div class="description">
                            <h1 class="staffTitle"><b>{{ strtoupper($zamDirector->first_name_uz) }}</b><br>
                                {{ strtoupper($zamDirector->last_name_uz) }}<br>
                                {{ strtoupper($zamDirector->middle_name_uz) }}</h1>
                            <h2>{{ $zamDirector->position->name_uz }}</h2>
                            <div class="contactInfo">
                                <div><i class="far fa-clock"></i><span>{{ $zamDirector->work_time }}</span></div>
                                <div><i class="fas fa-phone-alt"></i><span>{{ $zamDirector->phone }}</span></div>
                                <div><i class="far fa-envelope-open"></i><span>{{ $zamDirector->email }}</span></div>
                            </div>
                            <div class="collapseBox mt-3">
                                <a class="btn btn-link" data-bs-toggle="collapse" href="#bio{{ $zamDirector->id }}" role="button" aria-expanded="false">
                                    Biografiya
                                </a>
                                <div class="collapse" id="bio{{ $zamDirector->id }}">
                                    <div class="card card-body">{{ $zamDirector->biography_uz }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>


        </section>
    </main>
@endsection
