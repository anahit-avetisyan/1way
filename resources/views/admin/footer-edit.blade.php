@extends("admin.app")
@section("add")

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
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Անվանումը
                            </th>
                            <th style="width: 30%">
                                Հասանելիություն
                            </th>
                            <th>
                                Քանակ
                            </th>
                            <th style="width: 8%" class="text-center">
                                Նկարագիր
                            </th>
                            <th style="width: 8%" class="text-center">
                                Գինը
                            </th>
                            <th style="width: 8%" class="text-center">
                                Տարադրամը
                            </th>
                            <th style="width: 8%" class="text-center">
                                Նկարը
                            </th>
                            <th style="width: 8%" class="text-center">
                                Կատեգորիան
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
                                <a>
                                    Apranqi 1
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Patverov</span>
                            </td>
                            <td >
                                15
                            </td>
                            <td>
                                .............
                            </td>
                            <td>
                                1.500
                            </td>
                            <td>
                                Dram
                            </td>
                            <td>payt.jpg</td>
                            <td>Payt</td>
                            <td style="    padding: inherit;">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    Apranqi 1
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Patverov</span>
                            </td>
                            <td >
                                15
                            </td>
                            <td>
                                .............
                            </td>
                            <td>
                                1.500
                            </td>
                            <td>
                                Dram
                            </td>
                            <td>payt.jpg</td>
                            <td>Payt</td>
                            <td style="    padding: inherit;">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
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
    <!-- /.content-wrapper -->
@endsection
