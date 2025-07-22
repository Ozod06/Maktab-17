@extends('layouts.adminLayouts')

@section('title')
    Create Gallery
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Create Gallery</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group mb-3">
                    <label for="img">Image</label>
                    <input type="file" name="image" accept="admin/images" id="img" class="form-control">
                </div>



                <button type="submit" class="btn btn-primary">Create Gallery</button>
            </form>
        </section>
    </div>
@endsection



