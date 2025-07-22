{{-- resources/views/errors/404.blade.php --}}
@extends('admin.site')

@section('content')
    <div class="container text-center mt-5">
        <div class="error-code" style="font-size: 80px; font-weight: bold; color: #1a1a1a;">404</div>
        <div class="error-message" style="font-size: 24px; color: #555;">Sahifa topilmadi</div>
        <div class="alert alert-danger mt-4">Siz izlagan sahifa mavjud emas.</div>
        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Bosh sahifaga qaytish</a>
    </div>
@endsection



