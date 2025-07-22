@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.faq') }}</h1>
                    <nav aria-label="breadcrumb">
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
        <div class="faq">
            <div class="container">
                <div class="collapse_Faq">
                    <div class="row">
                        <div class="col-12" style="border: 1px solid #ece1e1; padding: 20px;">
                            <a href="">Nima uchun 9-sinf bitiruvchilariga asosiy taʼlim toʻgʻrisidagi hujjatning asl
                                nusxasi berilmaydi, faqat foto nusxasi yoki elektron nusxasi beriladi? 11-sinfni
                                tugatganidan keyin sertifikat beriladimi?</a>
                            <p class="faq_answer">O'zbekistonda majburiy o'n bir yillik ta'lim joriy etilganligi va
                                9-sinf o'quvchilarining ko'pchiligi 10-sinfda o'qishni davom ettirishi sababli
                                9-sinf bitiruvchilarining sertifikatlari maktabda saqlanadi. Agar talaba 9-sinfni
                                tamomlagandan so'ng akademik litseyga, kasb-hunar maktabiga o'qishga kirsa yoki
                                yangi o'quv yurtidan ma'lumotnoma yoki Kupon asosida boshqa umumta'lim maktabiga
                                o'tkazilsa. Bu masala bo'yicha ota-onalar maktab direktoriga murojaat qilishlari
                                mumkin.

                                Majburiy o'n bir yillik ta'lim tugagandan so'ng, 11 sinf bitiruvchilariga sertifikat
                                tantanali ravishda topshiriladi.</p>
                        </div>
                        <div class="col-12 mt-5" style="border: 1px solid #ece1e1; padding: 20px;">
                            <a href="">Umumtaʼlim maktablarining 0,5 stavka shtat birligidagi rahbarlari
                                (maʼnaviy-maʼrifiy hamda oʻquv-tarbiya ishlari boʻyicha direktor oʻrinbosarlari)
                                necha soatgacha dars olishi mumkin va ish haqi qay tartibda toʻlanadi?</a>
                            <p class="faq_answer">Umumtaʼlim muassasalari rahbar xodimlariga dars soatlarini
                                ajratish meʼyorlari Vazirlar Mahkamasining 2005-yil 21-dekabrdagi 275-sonli qarori
                                bilan tasdiqlangan “Xalq taʼlimi xodimlari mehnatiga haq toʻlash toʻgʻrisida nizom”
                                asosida tartibga solingan. Ushbu Nizomning 14-bandiga koʻra xalq taʼlimi
                                muassasasining rahbar xodimi tomonidan asosiy lavozimning bir haftada 10 soatgacha
                                hajmda oʻqituvchi lavozimi bilan qoʻshib olib borilishiga (oʻquv yuklamasi
                                yuritilishiga) yoʻl qoʻyiladi hamda ular mehnatiga soatbay haq toʻlanadi.</p>
                        </div>
                        <div class="col-12 mt-5" style="border: 1px solid #ece1e1; padding: 20px;">
                            <a href="">Nima uchun 9-sinf bitiruvchilariga asosiy taʼlim toʻgʻrisidagi hujjatning asl
                                nusxasi berilmaydi, faqat foto nusxasi yoki elektron nusxasi beriladi? 11-sinfni
                                tugatganidan keyin sertifikat beriladimi?</a>
                            <p class="faq_answer">O'zbekistonda majburiy o'n bir yillik ta'lim joriy etilganligi va
                                9-sinf o'quvchilarining ko'pchiligi 10-sinfda o'qishni davom ettirishi sababli
                                9-sinf bitiruvchilarining sertifikatlari maktabda saqlanadi. Agar talaba 9-sinfni
                                tamomlagandan so'ng akademik litseyga, kasb-hunar maktabiga o'qishga kirsa yoki
                                yangi o'quv yurtidan ma'lumotnoma yoki Kupon asosida boshqa umumta'lim maktabiga
                                o'tkazilsa. Bu masala bo'yicha ota-onalar maktab direktoriga murojaat qilishlari
                                mumkin.

                                Majburiy o'n bir yillik ta'lim tugagandan so'ng, 11 sinf bitiruvchilariga sertifikat
                                tantanali ravishda topshiriladi.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
