@extends('layouts.adminLayouts')
@section('title')
    Clubs
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Clubs</h1>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Clubs</h5>
                            <a href="{{ route('admin.club.create') }}" class="btn btn-primary mb-3">Create Clubs</a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Teacher Firstname (uz)</th>
                                        <th scope="col">Teacher Firstname (ru)</th>
                                        <th scope="col">Teacher Lastname (uz)</th>
                                        <th scope="col">Teacher Lastname (ru)</th>
                                        <th scope="col">Img</th>
                                        <th scope="col">Days</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Grade</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clubs as $club)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $club->teacher_firstname_uz }}</td>
                                            <td>{{ $club->teacher_firstname_ru }}</td>
                                            <td>{{ $club->teacher_lastname_uz }}</td>
                                            <td>{{ $club->teacher_lastname_ru }}</td>
                                            <td>
                                                @if ($club->image)
                                                    <img src="{{ asset('admin/images/' . $club->image) }}" alt="img" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $club->days }}</td>
                                            <td>{{ $club->time }}</td>
                                            <td>{{ $club->grade }}</td>


                                            <td class="d-flex justify-content-center align-items-center">
                                                <form action="{{ route('admin.club.destroy', $club->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>

                                            </td>

                                            <td>
                                                <a href="{{ route('admin.club.edit', $club->id) }}" class="btn btn-primary">Edit</a>
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


