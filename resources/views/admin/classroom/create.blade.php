@extends('layouts.adminLayouts')
@section('title')
    Create employee
@endsection

@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h3>Create employee</h3>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h1>Yangi sinf qo‘shish</h1>

                            <form action="{{ route('admin.classroom.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label>Nomi (1-A, 10-B):</label>
                                <input type="text" name="name" required><br>

                                <label>Smena:</label>
                                <select name="smena" required>
                                    <option value="1">1-smena</option>
                                    <option value="2">2-smena</option>
                                    <option value="3">Qoshimcha darslar</option>
                                </select><br>

                                <label>Jadval (PDF):</label>
                                <input type="file" name="schedule_img" id="fileInput" accept="application/pdf"><br>

                                <button type="submit">Saqlash</button>
                            </form>
                            <script>
                                document.querySelector('select[name="smena"]').addEventListener('change', function() {
                                    const selected = this.value;
                                    const fileInput = document.getElementById('fileInput');

                                    if (selected === '3') {
                                        // Qo‘shimcha darslar uchun rasm
                                        fileInput.setAttribute('accept', 'image/jpeg,image/png');
                                    } else {
                                        // Smena 1/2 uchun faqat PDF
                                        fileInput.setAttribute('accept', 'application/pdf');
                                    }
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


