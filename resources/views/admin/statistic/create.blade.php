@extends('layouts.adminLayouts')

@section('title')
    Create Statistic
@endsection

@section('content')
    @include('admin.sidebar')

    <div class="main-content">
        <section class="section">
            <h3>Create Statistic</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('admin.statistic.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="class_count">Sinflar soni:</label>
                                    <input type="number" name="class_count" class="form-control" value="{{ old('class_count') }}" required>
                                </div>


                                <div class="mb-3">
                                    <label for="student_count">O‘quvchilar soni:</label>
                                    <input type="number" name="student_count" class="form-control" value="{{ old('student_count') }}" required>
                                </div>


                                <div class="mb-3">
                                    <label for="graduate_count">Bitiruvchilar soni:</label>
                                    <input type="number" name="graduate_count" class="form-control" value="{{ old('graduate_count') }}" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="{{ route('admin.statistic.index') }}" class="btn btn-secondary"> <- Back </a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection


