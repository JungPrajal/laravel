@extends('admin.layouts.main')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Tasks</h1>
                <div class="table-responsive">
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Ram</td>
                                <td>Shyam</td>
                                <td>Hari</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Show</a>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
