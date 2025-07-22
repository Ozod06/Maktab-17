@extends('admin.site')
@section('content')
    <div class="container mt-5">
        <h2>{{ $class->name }} sinfi dars jadvali</h2>

        @if($class->schedule_img)
            <iframe src="{{ asset('admin/images/'.$class->schedule_img) }}"
                    style="width: 980px;height: 700px" >
            </iframe>
        @else
            <p>Jadval hali yuklanmagan</p>
        @endif
    </div>
    <div>
        <a href="{{ route('education') }}" class="btn btn-secondary"> ⬅️ Back </a>
    </div>
@endsection

