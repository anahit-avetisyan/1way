@extends("admin.front")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="flash-message" style="max-height: 100px; margin-bottom: 20px;">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <div class="alert alert-{{ $msg }}" style="width: 100%;margin-bottom: 0;display: flex; justify-content: space-between;align-items: center">
                        <span style="white-space: normal">{{ Session::get('alert-' . $msg) }}</span>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-left: 20px">&times;</a>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Projects</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">#</th>
                            <th>User Id</th>
                            <th style="width: 20%">Name</th>
                            <th style="width: 30%">UserType</th>
                            <th>Email</th>
                            <th>Created_at</th>
                            <th style="width: 20%">#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($user)
                            @foreach($user as $users)
                                <tr>
                                    <td></td>
                                    <td>{{$users->id}}</td>
                                    <td>{{$users->name}}</td>
                                    <td>{{$users->usertype}}</td>
                                    <td>{{$users->email}}</td>
                                    <td>{{$users->created_at}}</td>
                                    <td style="padding: inherit;">
                                        <form  action="{{route('user.edit',$users->id)}}" method="get" >
                                            <button type="submit" data-toggle="tooltip" title="Edit User" class="btn btn-info btn-sm">
                                                Edit
                                            </button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
