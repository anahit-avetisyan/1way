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

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="{{route("indexText.create")}}">
                                            <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Avelacnel</button>
                                        </a></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                anvanumyAM
                            </th>
                            <th style="width: 20%">
                                anvanumyRU
                            </th>
                            <th style="width: 20%">
                                anvanumyEN
                            </th>
                            <th style="width: 20%">
                                anvanumyAM2
                            </th>
                            <th style="width: 20%">
                                anvanumyRU2
                            </th>
                            <th style="width: 20%">
                                anvanumyEN2
                            </th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($text)
                        @foreach($text as $texts)
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
{{--                                {{dd($texts)}}--}}
                               {{$texts->textAM}}
                            </td>
                            <td>{{$texts->textRU}}</td>
                            <td>{{$texts->textEN}}</td>
                            <td>
                                {{$texts->text1AM}}
                            </td>
                            <td>{{$texts->text2RU}}</td>
                            <td>{{$texts->text3EN}}</td>
                            <td style="    padding: inherit;">
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
