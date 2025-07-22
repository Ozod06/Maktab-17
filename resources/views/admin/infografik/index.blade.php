@extends('layouts.adminLayouts')
@section('title')
    Infografika
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Infografika</h1>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Infografika</h5>
                            <a href="{{ route('admin.infografik.create') }}" class="btn btn-primary mb-3">Create Infografika</a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title (uz)</th>
                                        <th scope="col">Title (ru)</th>
                                        <th scope="col">Img</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($infografiks as $infografik)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $infografik->title_uz }}</td>
                                            <td>{{ $infografik->title_ru }}</td>
                                            <td>
                                                @if ($infografik->image)
                                                    <img src="{{ asset('admin/images/' . $infografik->image) }}" alt="img" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <form action="{{ route('admin.infografik.destroy', $infografik->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>

                                            </td>

                                            <td>
                                                <a href="{{ route('admin.infografik.edit', $infografik->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin.infografik.show', $infografik->id) }}" class="btn btn-success">Show</a>
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


