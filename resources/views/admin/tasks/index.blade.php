@extends('admin.layouts.main')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-4">Tasks</h1>
                    <div class="table-responsive">
                        <a class="btn btn-primary btn-sm mb-3" href="{{ route('tasks.create') }}" role="button">Create</a>
                        <table class="table table-hover table-bordered">
                            <thead class="table-info">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>
                                            @if ($task->image)
                                                <img src="{{ asset('uploads/' . $task->image) }}" alt="{{ $task->title }}"
                                                    width="50">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $task->status }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Show</a>
                                            <a href="{{ route('tasks.edit', $task->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $tasks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
