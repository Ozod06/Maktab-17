@extends('layouts.adminLayouts')

@section('title')
    Edit Director
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Edit Director</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.director.update', $director->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="first_name_uz">First Name (UZ)</label>
                    <input type="text" name="first_name_uz" id="first_name_uz" class="form-control" value="{{ old('first_name_uz', $director->first_name_uz) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="first_name_ru">First Name (RU)</label>
                    <input type="text" name="first_name_ru" id="first_name_ru" class="form-control" value="{{ old('first_name_ru', $director->first_name_ru) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="last_name_uz">Last Name (UZ)</label>
                    <input type="text" name="last_name_uz" id="last_name_uz" class="form-control" value="{{ old('last_name_uz', $director->last_name_uz) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="last_name_ru">Last Name (RU)</label>
                    <input type="text" name="last_name_ru" id="last_name_ru" class="form-control" value="{{ old('last_name_ru', $director->last_name_ru) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="middle_name_uz">Middle Name (UZ)</label>
                    <input type="text" name="middle_name_uz" id="middle_name_uz" class="form-control" value="{{ old('middle_name_uz', $director->middle_name_uz) }}">
                </div>

                <div class="form-group mb-3">
                    <label for="middle_name_ru">Middle Name (RU)</label>
                    <input type="text" name="middle_name_ru" id="middle_name_ru" class="form-control" value="{{ old('middle_name_ru', $director->middle_name_ru) }}">
                </div>

                <div class="form-group mb-3">
                    <label for="img">Image</label><br>
                    @if($director->image)
                        <img alt="" src="{{ asset('admin/images/' . $director->image) }}" width="100" class="mb-2">
                    @endif
                    <input type="file" name="image" id="img" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="position_id">Position</label>
                    <select name="position_id" id="position_id" class="form-control" required>
                        <option value="">Select Position</option>
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}" {{ old('position_id', $director->position_id) == $position->id ? 'selected' : '' }}>
                                {{ $position->name_uz }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $director->phone) }}">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $director->email) }}">
                </div>

                <div class="form-group mb-3">
                    <label for="work_time">Work Time</label>
                    <input type="time" name="work_time" id="work_time" class="form-control" value="{{ old('work_time', $director->work_time) }}">
                </div>

                <div class="form-group mb-3">
                    <label for="biography_uz">Biography (UZ)</label>
                    <textarea name="biography_uz" id="biography_uz" rows="4" class="form-control">{{ old('biography_uz', $director->biography_uz) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update Director</button>
            </form>
        </section>
    </div>
@endsection

