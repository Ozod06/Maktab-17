@extends('layouts.adminLayouts')
@section('title')
  Dars jadval
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="container">
        <h2 class="mb-4">📚 Sinflar ro'yxati</h2>

        <a href="{{ route('admin.classroom.create') }}" class="btn btn-primary mb-3">+ Yangi sinf qo‘shish</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Nomi</th>
                <th>Smena</th>
                <th>Jadval rasmi</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classrooms as $class)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $class->name }}</td>
                    <td>{{ $class->smena }}-smena</td>
                    <td>
                        @if ($class->schedule_img)
                            <iframe src="{{ asset('admin/images/' . $class->schedule_img) }}"  width="80"></iframe>
                        @else
                            <span class="text-muted">yo‘q</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.classroom.edit', $class->id) }}" class="btn btn-sm btn-warning">✏️ Tahrirlash</a>

                        <form action="{{ route('admin.classroom.destroy', $class->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('O‘chirishga ishonchingiz komilmi?')">🗑 O‘chirish</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($classrooms->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Sinf ma’lumotlari yo‘q.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection

