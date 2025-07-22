@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.symbol') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.symbol') }}</li>
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
        <div class="state_sybmols">
            <div class="container">
                <div class="sybmols">
                    <div class="row">
                        <!-- Gerb -->
                        <h2 style="text-transform: uppercase;">O'zbekiston respublikasi davlat gerbi</h2>
                        <div class="col-12 text-center mt-5">
                            <img src="/image/Gerb.png" alt="Img" width="20%">
                        </div>
                        <p style="font-size: 18px; font-weight: 400;">
                            <br> <br> Davlat gerbi O'zbekiston Respublikasining 1992-yil 2-iyuldagi 616-XII-sonli
                            "O'zbekiston
                            Respublikasining gospital gerbi to'g'risida" gi Qonuni bilan tasdiqlangan. <br> <br>

                            O'zbekiston Respublikasining mag'rur gerbi tog'lar, daryolar va gulchambar bilan
                            o'ralgan, quloqlarning o'ng tomonida va ochiq qutilar bilan paxtaning chap tomonida
                            turgan gulli o'simliklar ustidan botayotgan quyosh tasvirlarini ifodalaydi. Gerbning
                            yuqori qismida respublika tomonidan tasdiq ma'nosini anglatuvchi oktaedr olinadi, bu
                            ishning bir qismi ichida yulduz bilan. Gerbning markazida qush ochiq qanotli Humo
                            qushi-baxtli va ozodaliksevarlik ramzi tasvirlangan. Ayvon kamonidagi pastda
                            "O'zbekiston" ato etilgan O'zbekiston Respublikasi Davlat bayrog'ini ifodalovchi
                            gulchambar joylashgan.
                        </p>
                        <!-- Bayrog' -->
                        <h2 style="text-transform: uppercase; margin-top: 50px;">O'zbekiston respublikasi davlat
                            bayrog'i</h2>
                        <div class="col-12 text-center mt-5">
                            <img src="/image/Flag-uz.jpg" alt="Img" width="30%">
                        </div>
                        <p style="font-size: 18px; font-weight: 400;">
                            <br> <br>O'zbekiston Respublikasining davlat bayrog'i O'zbekiston Respublikasining
                            1991-yil 18-noyabrdagi 407-XII-sonli "O'zbekiston Respublikasi bayrog'ining
                            davlatchiligi to'g'risida" gi Qonuni bilan tasdiqlangan. <br> <br>

                            O'zbekiston Respublikasining davlat bayrog'i O'zbekiston gosudarentlangan suvenir
                            Respublikasining nominal qiymati hisoblanadi.

                            O'zbekiston Respublikasining davlat bayrog'i xalqaro munosabatlarda O'zbekiston
                            Respublikasini ifodalaydi.

                            O'zbekiston Respublikasi davlat bayrog'i barcha uzun ranglarda to'yingan ko'k, oq va
                            to'yingan yashil rangdagi uchta gorizontal chiziqlardan iborat to'g'ri burchakli panel
                            bo'ladi.
                        </p>
                        <!-- Madhiya -->
                        <h2 style="text-transform: uppercase; margin-top: 50px;">O'zbekiston respublikasi davlat
                            madhiyasi</h2>
                        <p style="font-size: 18px; font-weight: 400;">
                            <br> <br>
                            "O'zbekiston Respublikasining Davlat madhiyasi to'g'risida" 1992-yil 10-dekabrdagi
                            768-XI-sonli O'zbekiston Respublikasi orqali taqdim etilgan O'zbekiston Respublikasi
                            Davlat madhiyasining matni va musiqiy versiyasi. <br> <br>

                            O'zbekiston Respublikasining Davlat madhiyasi - yangi nom.

                            Hurmatli o'zbek madhiyasiga bo'lgan chuqur intilish O'zbekiston Respublikasi har bir
                            fuqarosining vatanparvarlik burchidir.
                        </p>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <b>Mutal Burkhonov musiqasi <br>
                                Abdulla Oripov she'ri </b>
                            <br> <br>
                            <strong>....</strong> <br>
                            <p style="text-align: justify; word-spacing: 0px; font-weight: 500;">Serquyosh, hur
                                o'lkam, elga baxt,
                                najot,
                                Sen o'zing do'stlarga yo'ldosh, mehribon!
                                Yashnagay to abad ilmu fan, ijod,
                                Shuhrating porlasin toki bor jahon!
                                <br> <br>
                                Naqorat: <br>
                                Oltin bu vodiylar — jon O'zbekiston,
                                Ajdodlar mardona ruhi senga yor!
                                Ulug'xalq qudrati jo'sh urgan zamon,
                                Olamni Mahliyo aylagan Diyor!
                                <br> <br>
                                Bag'ri keng o'zbekning o'chmas iymoni,
                                Erkin, yosh avlodlar senga zo'r qanot!
                                Istiqlol mash'ali, tinchlik posboni,
                                Haqsevar, ona yurt, mangu bo'l obod!
                                <br> <br>
                                Naqorat: <br>
                                Oltin bu vodiylar — jon O'zbekiston,
                                Ajdodlar mardona ruhi senga yor!
                                Ulug'xalq qudrati jo'sh urgan zamon,
                                Olamni Mahliyo aylagan Diyor!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
