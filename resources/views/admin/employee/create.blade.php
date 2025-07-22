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
                              <div class="card-title">Create employee</div>
                              <hr>
                              <form action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group">
                                      <label for="input-6">Name (uz):</label>
                                      <input type="text" class="form-control @error('name_uz') is-invalid @enderror" id="input-6" placeholder="Name..." name="name_uz" >
                                      @error('name_uz') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="input-6">Name (ru):</label>
                                      <input type="text" class="form-control @error('name_ru') is-invalid @enderror" id="input-6" placeholder="Name..." name="name_ru">
                                      @error('name_ru') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="input-6">Email:</label>
                                      <input type="email" class="form-control  @error('email') is-invalid @enderror" id="input-6" placeholder="Email..." name="email" >
                                      @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="input-6">Mobile:</label>
                                      <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="input-6" placeholder="Phone..." name="phone" >
                                      @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="input-6">Img:</label>
                                      <input type="file" class="form-control @error('img') is-invalid @enderror" id="input-6" placeholder="Img..." name="img" >
                                      @error('img') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="input-6">Work_time:</label>
                                      <input type="time" class="form-control  @error('work_time') is-invalid @enderror" id="input-6" placeholder="WorkTime..." name="work_time" >
                                      @error('work_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                  </div>

                                  <div class="form-group">
                                      <label for="input-7">EmpCategory</label>
                                      <select name="emp_category_id" id="" class="form-control">
                                          @foreach($empcategories as $empcategory)
                                              <option value="{{ $empcategory->id }}">{{ $empcategory->name_uz }}</option>
                                          @endforeach
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label for="input-7">Position</label>
                                      <select name="position_id" id="" class="form-control">
                                          @foreach($positions as $position)
                                              <option value="{{ $position->id }}">{{ $position->name_uz }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-outline-success btn-round px-5">Save</button>
                                      <a href="{{ route('admin.employee.index') }}" class="btn btn-secondary"> <- Back </a>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>

@endsection

