<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Project Add</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <a href="{{route("admin.index",0)}}">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{URL::asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                   {{ Auth::user()->name }}
                </div>
            </div>
            </a>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">ԲԱՂԱԴՐԻՉՆԵՐԸ</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Կայքի Տեսքը
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("logo.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Logo(Նկար)</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("slider.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider(Նկար)</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("contact.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Կոնտակտներ</p>
                                </a>
                            </li>
                        </ul>
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route("curse.index")}}" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Curse</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("promo.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Promo</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("govazd.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Promo(SLIDER)</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">Users</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Գլխավոր
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("user.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-header">Վաճաոված ԱՊՐԱՆՔՆԵՐ</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Գլխավոր
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("finish.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-header">Տեսականի</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Գլխավոր
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("product.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("category.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("subcategory.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("product.indexTop")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("brand.index")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Brand</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <br><br><br><br>
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
    @yield("add")



<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield("script")
<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<script src="{{ URL::asset('dist/js/validatorProduct.js')}}"></script>
</body>
</html>