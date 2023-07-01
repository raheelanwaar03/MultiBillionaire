@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Approved Users</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.User', ['id' => $user->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Level</label>
                                    <input type="text" name="level" class="form-control" value="{{ $user->level }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Balance</label>
                                    <input type="text" name="balance" class="form-control" value="{{ $user->balance }}">
                                </div>
                                <div class="">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
