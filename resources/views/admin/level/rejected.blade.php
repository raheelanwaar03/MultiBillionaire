@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Level</th>
                                            <th>Trx Id</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($levelRequests as $level)
                                            <tr>
                                                <td>{{ $level->user_name }}</td>
                                                <td>{{ $level->level }}</td>
                                                <td>{{ $level->trxId }}</td>
                                                <td><img src="{{ asset('images/' . $level->img) }}"
                                                        alt="{{ $level->img }}" class="img-responsive" height="80px"
                                                        width="80px"></td>
                                                <td>{{ $level->status }}</td>
                                                <td>{{ $level->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Unlock.User.Level', ['user_id' => $level->user_id]) }}"
                                                        class="btn btn-sm btn-primary">Unlock</a>
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
