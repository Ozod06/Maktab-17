@extends('layouts.adminLayouts')
@section('title')
    Gallery
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="container">
        <h2 class="mb-4">Gallery</h2>

        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary mb-3">+ Yangi rasm qo‘shish</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($galleries as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($item->image)
                            <img alt="rasmlar" src="{{ asset('admin/images/' . $item->image) }}"  width="80">
                        @else
                            <span class="text-muted">yo‘q</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn btn-sm btn-warning">✏️ Tahrirlash</a>

                        <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('O‘chirishga ishonchingiz komilmi?')">🗑 O‘chirish</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($galleries->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Sinf ma’lumotlari yo‘q.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection

