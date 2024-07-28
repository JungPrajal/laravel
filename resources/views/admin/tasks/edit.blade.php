@extends('admin.layouts.main')

@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Task</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update', $task->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Title</label>
                                <input type="text" class="form-control" id="validationCustom01" name="title" value="{{ $task->title }}" required>
                                <span style="color:red;">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Description</label>
                                <input type="text" class="form-control" id="validationCustom02" name="description" value="{{ $task->description }}" required>
                                <span style="color:red;">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Image</label>
                                <input type="file" class="form-control" id="validationCustom02" name="image">
                                @if($task->image)
                                    <img src="{{ asset('uploads/' . $task->image) }}" alt="Task Image" width="100" class="mt-2">
                                @endif
                                <span style="color:red;">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 text-end">
                                <button class="btn btn-primary" type="submit" name="submit">Update Task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
