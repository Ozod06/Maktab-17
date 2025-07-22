@extends('layouts.adminLayouts')
@section('title')
    Posts
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Posts</h1>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Posts</h5>
                            <a href="{{ route('admin.post.create') }}" class="btn btn-primary mb-3">Create Posts</a>

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
                                    @foreach($posts as $post)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $post->title_uz }}</td>
                                            <td>{{ $post->title_ru }}</td>
                                            <td>{{ $post->body_uz }}</td>
                                            <td>{{ $post->body_ru }}</td>
                                            <td>
                                                @if ($post->image)
                                                    <img src="{{ asset('admin/images/' . $post->image) }}" alt="img" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $post->category->name_uz ?? '-' }}</td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                </form>

                                            </td>

                                            <td>
                                                <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin.post.show', $post->id) }}" class="btn btn-success">Show</a>
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

