<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>1way.am/ԳործԸնկեր</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset("plugins/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("plugins/jqvmap/jqvmap.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("dist/css/adminlte.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <link rel="stylesheet" href="{{URL::asset("plugins/daterangepicker/daterangepicker.css")}}">
    <link rel="stylesheet" href="{{URL::asset("plugins/summernote/summernote-bs4.css")}}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
                    <li class="nav-header">ԲԱՂԱԴՐԻՉՆԵՐԸ</li>
                    <li class="nav-item has-treeview">
                        @php
                            $UserId = Auth::user()->id;
                        @endphp
                        <a href="{{route("user-product",$UserId)}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ապրանքներ</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        @php
                            $UserId = Auth::user()->id;
                        @endphp
                        <a href="{{route("user-product",$UserId)}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Logo</p>
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
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Բարի Գալուստ</h3>
                                <p>1way.am</p>
                            </div>
                            <div class="icon">
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <section class="col-lg-7 connectedSortable">

                    </section>
                </div>
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<script src="{{URL::asset("plugins/jquery/jquery.min.js")}}"></script>
<script src="{{URL::asset("plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{URL::asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{URL::asset("plugins/chart.js/Chart.min.js")}}"></script>
<script src="{{URL::asset("plugins/sparklines/sparkline.js")}}"></script>
<script src="{{URL::asset("plugins/jqvmap/jquery.vmap.min.js")}}"></script>
<script src="{{URL::asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
<script src="{{URL::asset("plugins/jquery-knob/jquery.knob.min.js")}}"></script>
<script src="{{URL::asset("plugins/moment/moment.min.js")}}"></script>
<script src="{{URL::asset("plugins/daterangepicker/daterangepicker.js")}}"></script>
<script src="{{URL::asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<script src="{{URL::asset("plugins/summernote/summernote-bs4.min.js")}}"></script>
<script src="{{URL::asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<script src="{{URL::asset("dist/js/adminlte.js")}}"></script>
<script src="{{URL::asset("dist/js/pages/dashboard.js")}}"></script>
<script src="{{URL::asset("dist/js/demo.js")}}"></script>
</body>
</html>
