@extends('layouts.dashboard.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables {{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.clients.index') }}">clients</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <th>Full name</th>
                                            <th>Phone home</th>
                                            <th>Phone one</th>
                                            <th>Phone two</th>
                                            <th>compane</th>
                                            <th>Location</th>
                                            <th>Detales</th>
                                            <th>Qr Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $index => $client)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $client->first_name . ' ' . $client->last_name }}</td>
                                                <td>{{ $client->phone }}</td>
                                                <td>{{ $client->phone_one }}</td>
                                                <td>{{ $client->phone_two }}</td>
                                                <td>{{ $client->companes->name }}</td>
                                                <td>{{ $client->type_location }}</td>
                                                <td>{{ $client->detales }}</td>
                                                <td>{{ $client->users->qr_code }}</td>
                                                <td>X</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>#</td>
                                            <th>Full name</th>
                                            <th>Phone home</th>
                                            <th>Phone one</th>
                                            <th>Phone two</th>
                                            <th>compane</th>
                                            <th>Location</th>
                                            <th>Detales</th>
                                            <th>Qr Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
