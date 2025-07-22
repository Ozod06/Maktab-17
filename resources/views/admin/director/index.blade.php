@extends('layouts.adminLayouts')
@section('title')
    Director
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Director</h1>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Director</h5>
                            <a href="{{ route('admin.director.create') }}" class="btn btn-primary mb-3">Create Director</a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">FirstName (uz)</th>
                                        <th scope="col">FirstName (ru)</th>
                                        <th scope="col">LastName (uz)</th>
                                        <th scope="col">LastName (ru)</th>
                                        <th scope="col">MiddleName (uz)</th>
                                        <th scope="col">MiddleName (ru)</th>
                                        <th scope="col">Img</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Work_time</th>
                                        <th scope="col">Bio (uz)</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($directors as $director)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $director->first_name_uz }}</td>
                                            <td>{{ $director->first_name_ru }}</td>
                                            <td>{{ $director->last_name_uz }}</td>
                                            <td>{{ $director->last_name_ru }}</td>
                                            <td>{{ $director->middle_name_uz }}</td>
                                            <td>{{ $director->middle_name_ru }}</td>
                                            <td>
                                                @if ($director->image)
                                                    <img src="{{ asset('admin/images/' . $director->image) }}" alt="img" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $director->position->name_uz ?? '-' }}</td>
                                            <td>{{ $director->phone }}</td>
                                            <td>{{ $director->email }}</td>
                                            <td>{{ $director->work_time }}</td>
                                            <td>{{ $director->biography_uz }}</td>

                                            <td class="d-flex justify-content-center align-items-center">
                                                <form action="{{ route('admin.director.destroy', $director->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>

                                            </td>

                                            <td>
                                                <a href="{{ route('admin.director.edit', $director->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin.director.show', $director->id) }}" class="btn btn-success">Show</a>
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

