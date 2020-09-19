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
    <link rel="stylesheet" href="{{URL::asset("dist/css/custom.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{URL::asset("dist/css/custom.css")}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ապրանք</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Փոփոխել ապրանքը</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php $user_id = Auth::user()->id  ?>
        <!-- Main content -->
        <form  action="{{ route('user-product-update',$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ապրանք</h3>
                                <input type="hidden" name="user_id" value="{{$user_id}}">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Անվանում</label>
                                    <input name="titleAM" value="{{$product->titleAM}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանում/RU</label>
                                    <input name="titleRU" value="{{$product->titleRU}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանում/EN</label>
                                    <input name="titleEN" value="{{$product->titleEN}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Հասանելիություն</label>
                                    <select name="availability"  class="form-control custom-select">
                                        <option selected disabled="disabled" style="color: #38eba1!important;"><h2>Ապրանքի Հասանելիություն</h2></option>
                                        <option value="0">Պատվերով</option>
                                        <option value="1">Առկա է</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Քանակ</label>
                                    <input name="quantity" value="{{$product->quantity}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր</label>
                                    <input name="descriptionAM" value="{{$product->descriptionAM}}" type="text" class="form-control" id="product-description"
                                           placeholder="Add product description...">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր/RU</label>
                                    <input name="descriptionRU" value="{{$product->descriptionRU}}" type="text" class="form-control" id="product-description"
                                           placeholder="Add product description...">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր/EN</label>
                                    <input name="descriptionEN" value="{{$product->descriptionEN}}" type="text" class="form-control" id="product-description"
                                           placeholder="Add product description...">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Կոդ</label>
                                    <input name="code" value="{{$product->code}}" type="text" class="form-control" id="product-description"
                                           placeholder="Add product description...">
                                </div>
                                <div class="form-group" style="border-bottom:1px solid black">
                                    <br>
                                    <div class="addDiv">
                                        <label for="fvefrbve">Օրինակ՝ (Չափսը)</label>
                                        <select name="sizeName">
                                            <option value="Չափս">Չափս</option>
                                            <option value="Տարողություն">Տարողություն</option>
                                            <option value="Քաշ">Քաշ</option>
                                            <option value="Տարիք">Տարիք</option>
                                            <option class="etc">Այլ․․․</option>
                                        </select>
                                        <input id="fvefrbve" type="text" name="size[]" class="product-size" placeholder="">
                                        <span class="categoryAdd" style="cursor: pointer;background-color: green;padding: 4px 10px;color: white;font-weight: bold;font-size: 17px;border-radius: 8px;">+</span>
                                        <span class="categoryRemove" style="cursor: pointer;background-color: red;padding: 4px 10px;color: white;font-weight: bold;font-size: 17px;border-radius: 8px;">-</span>
                                    </div>
                                </div>

                                <div class="form-group" style="border-bottom:1px solid black">
                                    <label for="inputDescription">Գույներ</label>
                                    <br />
                                    <label for="1"><input id='1' class="product-color" type="checkbox" name="color[]" value="red" /><div style="background-color:red ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="2"><input id='2' class="product-color" type="checkbox" name="color[]" value="orange" /><div style="background-color:orange ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="3"><input id='3' class="product-color" type="checkbox" name="color[]" value="yellow" /><div style="background-color:yellow ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="4"><input id='4' class="product-color" type="checkbox" name="color[]" value="white" /><div style="background-color:white ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="5"><input id='5' class="product-color" type="checkbox" name="color[]" value="mistyrose" /> <div style="background-color:mistyrose ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="6"><input id='6' class="product-color" type="checkbox" name="color[]" value="lightcyan" /><div style="background-color:lightcyan;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="7"><input id='7' class="product-color" type="checkbox" name="color[]" value="pink" /><div style="background-color:pink ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="8"><input id='8' class="product-color" type="checkbox" name="color[]" value="darkgray" /><div style="background-color:darkgray ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="9"><input id='9' class="product-color" type="checkbox" name="color[]" value="aqua" /><div style="background-color:aqua;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="10"><input id='10' class="product-color" type="checkbox" name="color[]" value="blue" /><div style="background-color:blue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="11"><input id='11' class="product-color" type="checkbox" name="color[]" value="firebrick" /><div style="background-color:firebrick ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="12"><input id='12' class="product-color" type="checkbox" name="color[]" value="seagreen" /><div style="background-color:seagreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="13"><input id='13' class="product-color" type="checkbox" name="color[]" value="blueviolet" /><div style="background-color:blueviolet ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="14"><input id='14' class="product-color" type="checkbox" name="color[]" value="black" /><div style="background-color:black ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="15"><input id='15' class="product-color" type="checkbox" name="color[]" value="darkolivegreen" /><div style="background-color:darkolivegreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="16"><input id='16' class="product-color" type="checkbox" name="color[]" value="darkgreen" /><div style="background-color:darkgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="17"><input id='17' class="product-color" type="checkbox" name="color[]" value="forestgreen" /><div style="background-color:forestgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="18"><input id='18' class="product-color" type="checkbox" name="color[]" value="midnightblue" /><div style="background-color:midnightblue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="19"><input id='19' class="product-color" type="checkbox" name="color[]" value="indigo" /><div style="background-color:indigo	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="20"><input id='20' class="product-color" type="checkbox" name="color[]" value="plum" /><div style="background-color:plum	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="21"><input id='21' class="product-color" type="checkbox" name="color[]" value="seagreen" /><div style="background-color:seagreen	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="22"><input id='22' class="product-color" type="checkbox" name="color[]" value="aquamarine" /><div style="background-color:aquamarine	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="23"><input id='23' class="product-color" type="checkbox" name="color[]" value="seashell" /><div style="background-color:seashell	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <br>
                                </div>

                                <div class="form-group">
                                    <label for="inputDescription">Զեղջը</label>
                                    <input name="sale" type="number" value="{{$product->sale}}"  class="form-control" id="product-description"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Գինը/AM</label>
                                    <input name="priceAM" value="{{$product->priceAM}}" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Գինը/RU</label>
                                    <input name="priceRU" value="{{$product->priceRU}}" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Գինը/EN</label>
                                    <input name="priceEN" value="{{$product->priceEN}}" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">

                                    <label for="inputProjectLeader">Նկար</label>
                                    <div class="img-container">

                                    </div>
                                    <input name="posters[]" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple>
                                    <span class="fileError"></span>
                                </div>
                                <input type="hidden" value="{{Auth::user()->id}}" name="brend_id">
                                {{--                            {{dd($category)}}--}}
                                <div class="form-group">
                                    <label for="inputStatus">Կատեգորիան</label>
                                    <select name="category_id" class="form-control product-category" id="category">
                                        <option selected disabled>Կատեգորիան</option>
                                        @isset($category)
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->titleAM}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="subcategory_id" id="subcategory" class="form-control input-sm product-subcategory">
                                        <option selected disabled>Կատեգորիան</option>
                                        <option value=""></option>
                                    </select>
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
            <input type="submit"  value="Պահպանել (save)"  class="btn btn-success float-right">
        </div>
    </div>
    </section>
    </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "></script>

<script type="text/javascript">
    $(document).ready(function () {
        var href = window.location.href
        var indexofSearch = href.indexOf('user_product/edit/')
        var id = href.substring(indexofSearch + 18)
        id = id.replace('/z?', '')

        $.ajax({
            url: '/user-product-data/' + id,
            type: "GET",
            dataType: "json",
            success: function (data) {
                // console.log(data);
                if (data.success) {

                    console.log(data,'llll')

                    $('.product-category').val(data.product.category_id)
                    if (data.product.category_id) {
                        $.ajax({
                            url: '/z/' + data.product.category_id,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                // console.log(data);
                                $('select[name="subcategory_id"]').empty();
                                $.each(data, function (key, value) {
                                    $('select[name="subcategory_id"]').append
                                    ('<option value="' + key + '">' + value + '</option>');
                                })
                            }
                        })
                    }
                    $('.product-subcategory').val(data.product.subcategory_id)
                    var imgs = JSON.parse(data.product.posters)
                    $(".img-container").empty()
                    if (imgs.length > 0) {
                        var img = ""
                        imgs.map(function (img) {
                            var imgSrc = "/images/" + img
                            var imgTag = `<img src=${imgSrc}  width=\"60\" class=\"img-product\">`
                            $(".img-container").append(imgTag)
                        })

                    }

                    if (data.product.size && data.product.size.length > 0) {
                        $('.product-size').val(data.product.size[0])
                    }
                    if (data.product.color && data.product.color.length > 0) {
                        var colors = data.product.color
                        if (colors.length > 0) {
                            var checkbox = $(".product-color")

                            for (var i = 0; i < checkbox.length; i++) {
                                console.log($(checkbox[i]).val());
                                if (colors.includes($(checkbox[i]).val())) {
                                    $(checkbox[i]).prop("checked", true);
                                }
                            }


                        }
                    }

                }

            }
        })
    })
    $(document).ready(function () {
        $('select[name="category_id"]').on("change",function () {
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url:'/z/'+category_id,
                    type:"GET",
                    dataType: "json",
                    success:function (data) {
                        // console.log(data);
                        $('select[name="subcategory_id"]').empty();
                        $.each(data,function (key,value) {
                            $('select[name="subcategory_id"]').append
                            ('<option value="'+key+'">'+value+'</option>');
                        })
                    }
                })
            }
        })
    });
</script>
<script src="{{URL::asset("plugins/jquery/jquery.min.js")}}"></script>
<script src="{{URL::asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{URL::asset("dist/js/adminlte.min.js")}}"></script>
<script src="{{URL::asset("dist/js/demo.js")}}"></script>
<script src="{{URL::asset("dist/js/add.js")}}"></script>

</body>
</html>
