@extends('layouts.adminLayouts')
@section('title')
    Statistics
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h3>Statistics</h3>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Statistics</h5>
                            <a href="{{ route('admin.statistic.create') }}" class="btn btn-primary mb-3">Create Statistics</a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ClassCount</th>
                                        <th scope="col">StudentCount</th>
                                        <th scope="col">TeacherCount</th>
                                        <th scope="col">GraduateCount</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($statistics as $statistic)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $statistic->class_count }}</td>
                                            <td>{{ $statistic->student_count }}</td>
                                            <td>{{ $statistic->teacher_count }}</td>
                                            <td>{{ $statistic->graduate_count }}</td>

                                            <td>
                                                <form action="{{ route('admin.statistic.destroy', $statistic->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.statistic.edit', $statistic->id) }}" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


