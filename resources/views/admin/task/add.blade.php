@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row page-titles">
                <h3>Admin Dashboard</h3>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">Add Task</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('Admin.Enter.Task') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="title" class="form-control input-default "
                                            placeholder="Title">
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" name="price" class="form-control input-rounded"
                                            placeholder="Price">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="rate" class="form-control input-rounded"
                                            placeholder="Earnings rate">
                                    </div><div class="mb-3">
                                        <input type="text" name="level" class="form-control input-rounded"
                                            placeholder="Level">
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" name="img" class="form-control input-rounded">
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
