@extends('admin.site')
@section('content')
    <style>
        .teachersWrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: flex-start;
        }

        .teacherCard {
            width: 240px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s ease;
            flex-shrink: 0;
        }

        .teacherCard:hover {
            transform: translateY(-5px);
        }

        .teacherCard .photo img {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .teacherCard .description {
            padding: 15px;
        }

        .teacherCard .description h2 {
            font-size: 20px;
            margin: 10px 0 5px;
            color: #333;
        }

        .teacherCard .description p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        .teacherCard .description a {
            color: #007BFF;
            text-decoration: none;
        }

        .teacherCard .description a:hover {
            text-decoration: underline;
        }

        h1 {
            font-size: 26px;
            margin: 30px 0 10px;
            color: #222;
        }

        hr {
            margin: 30px 0;
            border-top: 2px solid #eee;
        }

        /* 🖥️ Responsive qo'llab-quvvatlash: */
        @media (max-width: 1024px) {
            .teacherCard {
                width: 45%; /* Tabletda ikkita yonma-yon */
            }
        }

        @media (max-width: 600px) {
            .teacherCard {
                width: 100%; /* Telefonlarda bir qatorga bittadan */
            }

            .teachersWrapper {
                justify-content: center; /* Telefonlarda markazga */
            }
        }
    </style>




    <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.teachers') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.teachers') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Image Header End -->

<!-- Main section Start -->
<main>
    <section>
        @foreach($employees as $empcategory => $teachersGroup)
            <h1>{{ $teachersGroup[0]->empcategory->{'name_' . app()->getLocale()} }}</h1>

            <div class="teachersWrapper">
                @foreach($teachersGroup as $emp)
                    <div class="teacherCard">
                        <div class="photo">
                            <img alt="image" src="{{ asset('admin/images/' . $emp->img) }}">
                        </div>
                        <div class="description">
                            <h2>{{ $emp->{'name_' . app()->getLocale()} }}</h2>
                            <p>Lavozimi: {{ $emp->position->{'name_' . app()->getLocale()} }}</p>
                            <p>Telefon: <a href="tel:{{ $emp->phone }}">{{ $emp->phone }}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>


            <hr>
        @endforeach

    </section>
</main>
<!-- Main section End -->

@endsection
