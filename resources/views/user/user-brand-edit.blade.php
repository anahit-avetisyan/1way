<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Projects</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{URL::asset("dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
    <!-- DataTables -->
    <link rel="stylesheet" href="{{URL::asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset("dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{URL::asset("dist/css/custom.css")}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" " class="nav-link">Գլխավոր</a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    @if(Auth::user()->posters !== null)
                        @foreach(json_decode(Auth::user()->posters) as $poster)
                            <img src="{{asset('images/'.$poster)}}"  style="width: 150px" class="media-object">
                        @endforeach
                    @else
                        <img  style="width: 150px"  src="{{asset('images/avatarP.png')}}" class="media-object">
                    @endif
                </div>
                <br>
                <div class="info">
                    <br>
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">ԲԱՂԱԴՐԻՉՆԵՐ</li>
                    <li class="nav-item has-treeview">
                        @php
                            $UserId = Auth::user()->id;
                        @endphp
                        <a href="{{route("user-product",$UserId)}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ապրանք</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        @php
                            $UserId = Auth::user()->id;
                        @endphp
                        <a href="{{route("user-brand",$UserId)}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ապրանքանիշ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>Ելք
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ապրանքանիշ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Ապրանքանիշ</li>
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
        <form  action="{{ route('user-brand.update',$brand->id) }}" method="post" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Անվանումը</label>
                                    <input name="title" value="{{$brand->title}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Նկարը</label>
                                    <input name="posters[]" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple>
                                    <span class="fileError"></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
    </div>
    <div class="row">
        <div class="col-12 button-contollet-bottom">
            <a href="{{ URL::previous() }}" class="btn btn-secondary btn-first-back">Վերադառնալ</a>
            <input type="submit" value="Պահպանել (save)" class="btn btn-success float-right">
        </div>
    </div>
    </section>
    </form>
        <!-- /.content -->
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset("dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset("dist/js/demo.js")}}"></script>
<script src="{{URL::asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables -->
<script src="{{URL::asset("plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{URL::asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{URL::asset("plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{URL::asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset("dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset("dist/js/demo.js")}}"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
