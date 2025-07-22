@extends('layouts.adminLayouts')
@section('title')
    EmpCategory
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h3>EmpCategory</h3>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">EmpCategory</h5>
                            <a href="{{ route('admin.empcategory.create') }}" class="btn btn-primary mb-3">Create EmpCategory</a>

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
                                    @foreach($empcategories as $empcategory)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $empcategory->name_uz }}</td>
                                            <td>{{ $empcategory->name_ru }}</td>

                                            <td>
                                                <form action="{{ route('admin.empcategory.destroy', $empcategory->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.empcategory.edit', $empcategory->id) }}" class="btn btn-primary">Edit</a>
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


