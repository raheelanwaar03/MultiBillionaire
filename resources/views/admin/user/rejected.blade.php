@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Rejectd Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Balance</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->balance }}</td>
                                                <td>{{ $user->status }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Make.Users.Approved', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-success">Approved</a>
                                                    <a href="{{ route('Admin.Make.Users.Rejected', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-danger">Rejected</a>
                                                    <a href="{{ route('Admin.Make.Users.Pending', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-warning">Pending</a>
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
