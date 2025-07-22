@extends('layouts.adminLayouts')

@section('title')
    Edit Resourse
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Edit Resourse</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.resourse.update', $resourse->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="title_uz">Title (UZ)</label>
                    <input type="text" name="title_uz" id="title_uz" class="form-control"
                           value="{{ old('title_uz', $resourse->title_uz) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="title_ru">Title (RU)</label>
                    <input type="text" name="title_ru" id="title_ru" class="form-control"
                           value="{{ old('title_ru', $resourse->title_ru) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="body_uz">Body (UZ)</label>
                    <textarea name="body_uz" class="form-control" required>{{ old('body_uz', $resourse->body_uz ?? '') }}</textarea>

                </div>

                <div class="form-group mb-3">
                    <label for="body_ru">Body (RU)</label>
                    <textarea name="body_ru" class="form-control" required>{{ old('body_ru', $resourse->body_ru ?? '') }}</textarea>

                </div>

                <div class="form-group mb-3">
                    <label for="img">Image</label><br>
                    @if ($resourse->image)
                        <img src="{{ asset('admin/images/' . $resourse->image) }}" alt="Post Image" width="150">
                    @else
                        <p>No image uploaded.</p>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="image">Replace Image (optional)</label>
                    <input type="file" name="image" accept="image/*" id="image" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $resourse->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name_uz }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Resourse</button>
            </form>
        </section>
    </div>
@endsection


