@extends('layouts.adminLayouts')

@section('title')
    Edit Post
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Edit Post</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="title_uz">Title (UZ)</label>
                    <input type="text" name="title_uz" id="title_uz" class="form-control"
                           value="{{ old('title_uz', $post->title_uz) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="title_ru">Title (RU)</label>
                    <input type="text" name="title_ru" id="title_ru" class="form-control"
                           value="{{ old('title_ru', $post->title_ru) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="body_uz">Body (UZ)</label>
                    <textarea name="body_uz" class="form-control" required>{{ old('body_uz', $post->body_uz ?? '') }}</textarea>

                </div>

                <div class="form-group mb-3">
                    <label for="body_ru">Body (RU)</label>
                    <textarea name="body_ru" class="form-control" required>{{ old('body_ru', $post->body_ru ?? '') }}</textarea>

                </div>

                <div class="form-group mb-3">
                    <label for="img">Image</label><br>
                    @if ($post->image)
                        <img src="{{ asset('admin/images/' . $post->image) }}" alt="Post Image" width="150">
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
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name_uz }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        </section>
    </div>
@endsection

