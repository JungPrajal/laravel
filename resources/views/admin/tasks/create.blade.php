@extends('admin.layouts.main')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mt-5 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Registration Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data"
                                class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">title </label>
                                    <input type="text" class="form-control" id="validationCustom01" value=""
                                        name="title">
                                    <span style=
                                "color:red;">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Descrition </label>
                                    <input type="text" class="form-control" id="validationCustom02" value=""
                                        name="description">
                                    <span style="color:red;">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="validationCustom02" value=""
                                        name="image">
                                    <span style="color:red;">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
