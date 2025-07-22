@extends('layouts.adminLayouts')
@section('title')
    Employees Show
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <h1>Employees</h1>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Employee</h5>
                            <a href="{{ route('admin.employee.index') }}" class="btn btn-primary mb-3">Back</a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name (uz)</th> <td>{{ $emp->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Name (ru)</th> <td>{{ $emp->name_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th> <td>{{ $emp->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Phone</th> <td>{{ $emp->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Img</th>
                                        <td> <img src="/admin/images/{{ $emp->img }}" alt="" width="100px"> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Work_time</th> <td>{{ $emp->work_time }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">EmpCategory</th> <td>{{ optional($emp->empcategory)->name_uz ?? '-' }}</td>

                                    </tr>
                                    <tr>
                                        <th scope="col">Position</th> <td>{{ $emp->position->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Actions</th>
                                    </tr>

                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

