@extends('layouts.adminLayouts')

@section('title')
    Create Infografika
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Create Infografika</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.infografik.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="title_uz">Title (UZ)</label>
                    <input type="text" name="title_uz" id="title_uz" class="form-control" value="{{ old('title_uz') }}" >
                </div>

                <div class="form-group mb-3">
                    <label for="title_ru">Title (RU)</label>
                    <input type="text" name="title_ru" id="title_ru" class="form-control" value="{{ old('title_ru') }}" >
                </div>


                <div class="form-group mb-3">
                    <label for="img">Image</label>
                    <input type="file" name="image" accept="admin/images" id="img" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary">Create Infografika</button>
            </form>
        </section>
    </div>
@endsection


