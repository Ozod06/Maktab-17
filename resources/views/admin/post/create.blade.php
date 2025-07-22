@extends('layouts.adminLayouts')

@section('title')
    Create Posts
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Create Posts</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="body_uz">Body (UZ)</label>
                    <textarea name="body_uz" class="form-control" required>{{ old('body_uz') }}</textarea>

                </div>

                <div class="form-group mb-3">
                    <label for="body_ru">Body (RU)</label>
                    <textarea name="body_ru" class="form-control" required>{{ old('body_ru') }}</textarea>

                </div>

                <div class="form-group mb-3">
                    <label for="img">Image</label>
                    <input type="file" name="image" accept="admin/images" id="img" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name_uz }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Create Posts</button>
            </form>
        </section>
    </div>
@endsection

