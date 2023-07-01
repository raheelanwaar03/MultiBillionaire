@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Task</h4>
                            <a href="{{ route('Admin.Add.Task') }}" class="btn btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>price</th>
                                            <th>rate</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tasks as $task)
                                            <tr>
                                                <td>{{ $task->title }}</td>
                                                <td>{{ $task->price }}</td>
                                                <td>{{ $task->rate }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $task->img) }}" alt="Image"
                                                        class="img-responsive" height="60px" width="60px">
                                                </td>
                                                <td>{{ $task->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Delete.Task', ['id' => $task->id]) }}"
                                                        class="btn btn-sm btn-danger">Delelte</a>
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
        </div>
    @endsection
