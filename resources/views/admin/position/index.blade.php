@extends('layouts.adminLayouts')
@section('title')
    Position
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Positions</h1>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Position</h5>
                            <a href="{{ route('admin.position.create') }}" class="btn btn-primary mb-3">Create Position</a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name (uz)</th>
                                        <th scope="col">Name (ru)</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($positions as $position)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $position->name_uz }}</td>
                                            <td>{{ $position->name_ru }}</td>

                                            <td>
                                                <form action="{{ route('admin.position.destroy', $position->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.position.edit', $position->id) }}" class="btn btn-primary">Edit</a>
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

