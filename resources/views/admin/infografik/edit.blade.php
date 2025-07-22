@extends('layouts.adminLayouts')

@section('title')
    Edit Infografika
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Edit Infografika</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.infografik.update', $infografik->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="title_uz">Title (UZ)</label>
                    <input type="text" name="title_uz" id="title_uz" class="form-control"
                           value="{{ old('title_uz', $infografik->title_uz) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="title_ru">Title (RU)</label>
                    <input type="text" name="title_ru" id="title_ru" class="form-control"
                           value="{{ old('title_ru', $infografik->title_ru) }}" required>
                </div>


                <div class="form-group mb-3">
                    <label for="img">Image</label><br>
                    @if ($infografik->image)
                        <img src="{{ asset('admin/images/' . $infografik->image) }}" alt="Post Image" width="150">
                    @else
                        <p>No image uploaded.</p>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="image">Replace Image (optional)</label>
                    <input type="file" name="image" accept="image/*" id="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        </section>
    </div>
@endsection


