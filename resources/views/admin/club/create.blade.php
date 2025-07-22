@extends('layouts.adminLayouts')

@section('title')
    Create Clubs
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Create Clubs</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.club.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="teacher_firstname_uz">Teacher Firstname (UZ)</label>
                    <input type="text" name="teacher_firstname_uz" id="teacher_firstname_uz" class="form-control" value="{{ old('teacher_firstname_uz') }}" >
                </div>

                <div class="form-group mb-3">
                    <label for="teacher_firstname_ru">Teacher Firstname (RU)</label>
                    <input type="text" name="teacher_firstname_ru" id="teacher_firstname_ru" class="form-control" value="{{ old('teacher_firstname_ru') }}" >
                </div>

                <div class="form-group mb-3">
                    <label for="teacher_lastname_uz">Teacher Lastname (UZ)</label>
                    <input type="text" name="teacher_lastname_uz" id="teacher_lastname_uz" class="form-control" value="{{ old('teacher_lastname_uz') }}" >
                </div>

                <div class="form-group mb-3">
                    <label for="teacher_lastname_ru">Teacher Lastname (RU)</label>
                    <input type="text" name="teacher_lastname_ru" id="teacher_lastname_ru" class="form-control" value="{{ old('teacher_lastname_ru') }}" >
                </div>


                <div class="form-group mb-3">
                    <label for="img">Image</label>
                    <input type="file" name="image" accept="image/*" id="img" class="form-control">
                </div>


                <div class="form-group mb-3">
                    <label for="days">Days</label>
                    <input type="text" name="days" id="days" class="form-control" value="{{ old('days') }}">
                </div>


                <div class="form-group mb-3">
                    <label for="time">Time</label>
                    <input type="time" name="time" id="time" class="form-control" value="{{ old('time') }}">
                </div>

                <div class="form-group mb-3">
                    <select name="grade" id="grade" class="form-control">
                        <option value="">Tanlang</option>
                        <option value="5-7" {{ old('grade') == '5-7' ? 'selected' : '' }}>5-7 sinf</option>
                        <option value="8-9" {{ old('grade') == '8-9' ? 'selected' : '' }}>8-9 sinf</option>
                        <option value="10-11" {{ old('grade') == '10-11' ? 'selected' : '' }}>10-11 sinf</option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="title_uz">Title (UZ)</label>
                    <input type="text" name="title_uz" class="form-control" value="{{ old('title_uz', $club->title_uz ?? '') }}">
                </div>

                <div class="form-group">
                    <label for="title_ru">Title (RU)</label>
                    <input type="text" name="title_ru" class="form-control" value="{{ old('title_ru', $club->title_ru ?? '') }}">
                </div>



                <button type="submit" class="btn btn-primary">Create Clubs</button>
            </form>
        </section>
    </div>
@endsection


