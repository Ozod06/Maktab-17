@extends('layouts.adminLayouts')
@section('title')
    Resourse
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Resourse</h1>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Resourse</h5>
                            <a href="{{ route('admin.resourse.create') }}" class="btn btn-primary mb-3">Create Resourse</a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title (uz)</th>
                                        <th scope="col">Title (ru)</th>
                                        <th scope="col">Body (uz)</th>
                                        <th scope="col">Body (ru)</th>
                                        <th scope="col">Img</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($resourses as $resourse)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $resourse->title_uz }}</td>
                                            <td>{{ $resourse->title_ru }}</td>
                                            <td>{{ $resourse->body_uz }}</td>
                                            <td>{{ $resourse->body_ru }}</td>
                                            <td>
                                                @if ($resourse->image)
                                                    <img src="{{ asset('admin/images/' . $resourse->image) }}" alt="img" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $resourse->category->name_uz ?? '-' }}</td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <form action="{{ route('admin.resourse.destroy', $resourse->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>

                                            </td>

                                            <td>
                                                <a href="{{ route('admin.resourse.edit', $resourse->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin.resourse.show', $resourse->id) }}" class="btn btn-success">Show</a>
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


