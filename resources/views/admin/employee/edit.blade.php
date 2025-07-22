@extends('layouts.adminLayouts')
@section('title')
    Employee edit
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h3>Edit employee</h3>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Employee edit</div>
                            <hr>
                            <form action="{{ isset($emp) ? route('admin.employee.update', $emp->id) : '#' }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(isset($emp))
                                    @method('PUT')
                                @endif

                                <div class="form-group">
                                    <label for="input-6">Name (uz):</label>
                                    <input type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz" value="{{ old('name_uz', $emp->name_uz ?? '') }}">
                                    @error('name_uz') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="input-6">Name (ru):</label>
                                    <input type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru" value="{{ old('name_ru', $emp->name_ru ?? '') }}">
                                    @error('name_ru') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="input-6">Email:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $emp->email ?? '') }}">
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="input-6">Mobile:</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $emp->phone ?? '') }}">
                                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="input-6">Img:</label>
                                    <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                                    @if($emp->img)
                                        <div class="mt-2">
                                            <img src="{{ asset('/admin/images/' . $emp->img) }}" width="100" alt="Employee image">
                                        </div>
                                    @endif
                                    @error('img') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="input-6">Work Time:</label>
                                    <input type="time" class="form-control @error('work_time') is-invalid @enderror" name="work_time" value="{{ old('work_time', $emp->work_time ?? '') }}">
                                    @error('work_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="input-7">Category</label>
                                    <select name="emp_category_id" class="form-control @error('emp_category_id') is-invalid @enderror">
                                        @foreach($empcategories as $empcategory)
                                            <option value="{{ $empcategory->id }}" {{ old('emp_category_id', $emp->emp_category_id) == $empcategory->id ? 'selected' : '' }}>
                                                {{ $empcategory->name_uz }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="input-7">Position</label>
                                    <select name="position_id" class="form-control @error('position_id') is-invalid @enderror">
                                        @foreach($positions as $position)
                                            <option value="{{ $position->id }}" {{ old('position_id', $emp->position_id) == $position->id ? 'selected' : '' }}>
                                                {{ $position->name_uz }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('position_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-primary btn-round px-5">Edit</button>
                                    <a href="{{ route('admin.employee.index') }}" class="btn btn-secondary"> <- Back </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

