@extends('layouts.adminLayouts')

@section('title')
    Edit EmpCategory
@endsection

@section('content')
    @include('admin.sidebar')

    <div class="main-content">
        <section class="section">
            <h3>Edit EmpCategory</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('admin.empcategory.update', $empcategory->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name_uz">Name (uz):</label>
                                    <input type="text" id="name_uz" name="name_uz" class="form-control @error('name_uz') is-invalid @enderror" value="{{ old('name_uz', $empcategory->name_uz) }}">
                                    @error('name_uz')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name_ru">Name (ru):</label>
                                    <input type="text" id="name_ru" name="name_ru" class="form-control @error('name_ru') is-invalid @enderror" value="{{ old('name_ru', $empcategory->name_ru) }}">
                                    @error('name_ru')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.empcategory.index') }}" class="btn btn-secondary"> <- Back </a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection



