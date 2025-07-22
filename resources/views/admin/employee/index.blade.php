@extends('layouts.adminLayouts')
@section('title')
    Employees
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
                             <a href="{{ route('admin.employee.create') }}" class="btn btn-primary mb-3">Create Employee</a>

                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                     <tr>
                                         <th scope="col">#</th>
                                         <th scope="col">Name (uz)</th>
                                         <th scope="col">Name (ru)</th>
                                         <th scope="col">Email</th>
                                         <th scope="col">Phone</th>
                                         <th scope="col">Img</th>
                                         <th scope="col">Work_time</th>
                                         <th scope="col">EmpCategory</th>
                                         <th scope="col">Position</th>
                                         <th scope="col">Actions</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach($employees as $emp)
                                         <tr>
                                             <th scope="row">{{ $loop->iteration }}</th>
                                             <td>{{ $emp->name_uz }}</td>
                                             <td>{{ $emp->name_ru }}</td>
                                             <td>{{ $emp->email }}</td>
                                             <td>{{ $emp->phone }}</td>
                                             <td>
                                                 @if ($emp->img)
                                                     <img src="{{ asset('admin/images/' . $emp->img) }}" alt="img" width="50">
                                                 @else
                                                     No Image
                                                 @endif
                                             </td>
                                             <td>{{ $emp->work_time }}</td>
                                             <td>{{ $emp->empcategory->name_uz ?? '-' }}</td>
                                             <td>{{ $emp->position->name_uz ?? '-' }}</td>

                                             <td class="d-flex justify-content-center align-items-center">
                                                 <form action="{{ route('admin.employee.destroy', $emp->id) }}" method="POST" style="display:inline-block;">
                                                     @csrf
                                                     @method('DELETE')
                                                     <button onclick="return confirm('O\'chirishni xohlaysizmi?')" class="btn btn-sm btn-danger">Delete</button>
                                                 </form>

                                             </td>

                                             <td>
                                                 <a href="{{ route('admin.employee.edit', $emp->id) }}" class="btn btn-primary">Edit</a>
                                                 <a href="{{ route('admin.employee.show', $emp->id) }}" class="btn btn-success">Show</a>
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
