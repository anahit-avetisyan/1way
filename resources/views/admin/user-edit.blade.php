@extends("admin.app")
@section("add")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users</h3>

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
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Id
                            </th>
                            <th style="width: 20%">
                               Անուն
                            </th>
                            <th style="width: 20%">
                                Ստեղծվել է (created_at)
                            </th>
                            <th style="width: 30%">
                                Օգտագործողի տեսակը (User Type)
                            </th>
                            <th>
                                Էլ․ հասցե (Email)
                            </th>

                            <th style="width: 20%">
                                #
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                {{$user->id}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{ $user->created_at}}
                            </td>
                            <form  action="{{route('user.update',$user->id)}}" method="post" style="color: black;text-align: left">
                                @method("PUT")
                                @csrf
                                <td>
                                    <select name="user" class="form-control" id="category_id">
                                        <option disabled selected>Ընտրիր User-ի տեսակը</option>
                                        <option value="admin">Admin</option>
                                        <option value="meneger">Menager</option>
                                    </select>
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td style="padding: inherit;">
                                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success" style="text-align:center;border-radius:15px;outline:none">Պահպանել</button>
                            </form>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
