<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>1way.am/ԳործԸնկեր</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
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
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ավելացնել Ապրանք</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Ավելացնել Ապրանք</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <?php $user_id = Auth::user()->id  ?>
        <form onsubmit="return validate()" action="{{ route('user-product-store',$user_id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="content">
                <div class="row">
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
                    <input type="hidden" name="user_id" value="{{$user_id}}">
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
                                    <label for="inputName">Անվանում</label>
                                    <input name="titleAM" type="text" id="inputName" class="form-control titleAM">
                                    <span class="AMerror" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանում/RU</label>
                                    <input name="titleRU" type="text" id="inputName" class="form-control titleRU">
                                    <span class="titleRU1" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանում/EN</label>
                                    <input name="titleEN" type="text" id="inputName" class="form-control titleEN">
                                    <span class="titleEN1" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Հասանելիություն</label>
                                    <select name="availability" class="form-control custom-select">
                                        <option value="selectcard" selected disabled="disabled" style="color: #38eba1!important;"><h2>Ապրանքի Հասանելիություն</h2></option>
                                        <option value="0">Պատվերով</option>
                                        <option value="1">Առկա է</option>
                                    </select>
                                    <span class="selecterror" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Քանակ</label>
                                    <input name="quantity" type="text" id="inputName" class="form-control quantity">
                                    <span class="quantity1" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր</label>
                                    <input name="descriptionAM" value="{{ old('descriptionAM') }}" type="text" class="form-control descriptionAM" id="product-description "
                                           placeholder="Add product description...">
                                    <span class="descAMerror" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր/RU</label>
                                    <input name="descriptionRU" value="{{ old('descriptionRU') }}" type="text" class="descriptionRU form-control" id="product-description"
                                           placeholder="Add product description...">
                                    <span class="descRUerror" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր/EN</label>
                                    <input name="descriptionEN" value="{{ old('descriptionEN') }}" type="text" class="descriptionEN form-control" id="product-description"
                                           placeholder="Add product description...">
                                    <span class="descENerror" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Կոդ</label>
                                    <input name="code" value="{{ old('code') }}" type="text" class="code form-control" id="product-description"
                                           placeholder="Add product description...">
                                    <span class="codeerror" style="color: red"></span>
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
                                        <input id="fvefrbve" type="text" name="size[]" placeholder=" ">
                                        <span class="categoryAdd" style="cursor: pointer;background-color: green;padding: 4px 10px;color: white;font-weight: bold;font-size: 17px;border-radius: 8px;">+</span>
                                        <span class="categoryRemove" style="cursor: pointer;background-color: red;padding: 4px 10px;color: white;font-weight: bold;font-size: 17px;border-radius: 8px;">-</span>
                                    </div>
                                </div>


                                <div class="form-group" style="border-bottom:1px solid black">
                                    <label for="inputDescription">Գույներ</label>
                                    <br />
                                    <label for="1"><input id='1' type="checkbox" class="size2" name="color[]" value="red" /><div style="background-color:red ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="2"><input id='2' type="checkbox" class="size2" name="color[]" value="orange" /><div style="background-color:orange ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="3"><input id='3' type="checkbox" class="size2" name="color[]" value="yellow" /><div style="background-color:yellow ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="4"><input id='4' type="checkbox" class="size2" name="color[]" value="white" /><div style="background-color:white ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="5"><input id='5' type="checkbox" class="size2" name="color[]" value="mistyrose" /> <div style="background-color:mistyrose ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="6"><input id='6' type="checkbox" class="size2" name="color[]" value="lightcyan" /><div style="background-color:lightcyan;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="7"><input id='7' type="checkbox" class="size2" name="color[]" value="pink" /><div style="background-color:pink ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="8"><input id='8' type="checkbox" class="size2" name="color[]" value="darkgray" /><div style="background-color:darkgray ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="9"><input id='9' type="checkbox" class="size2" name="color[]" value="aqua" /><div style="background-color:aqua;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="10"><input id='10' type="checkbox" class="size2" name="color[]" value="blue" /><div style="background-color:blue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="11"><input id='11' type="checkbox" class="size2" name="color[]" value="firebrick" /><div style="background-color:firebrick ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="12"><input id='12' type="checkbox" class="size2" name="color[]" value="seagreen" /><div style="background-color:seagreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="13"><input id='13' type="checkbox" class="size2" name="color[]" value="blueviolet" /><div style="background-color:blueviolet ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="14"><input id='14' type="checkbox" class="size2" name="color[]" value="black" /><div style="background-color:black ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="15"><input id='15' type="checkbox" class="size2" name="color[]" value="darkolivegreen" /><div style="background-color:darkolivegreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="16"><input id='16' type="checkbox" class="size2" name="color[]" value="darkgreen" /><div style="background-color:darkgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="17"><input id='17' type="checkbox" class="size2" name="color[]" value="forestgreen" /><div style="background-color:forestgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="18"><input id='18' type="checkbox" class="size2" name="color[]" value="midnightblue" /><div style="background-color:midnightblue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="19"><input id='19' type="checkbox" class="size2" name="color[]" value="indigo" /><div style="background-color:indigo	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="20"><input id='20' type="checkbox" class="size2" name="color[]" value="plum" /><div style="background-color:plum	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="21"><input id='21' type="checkbox" class="size2" name="color[]" value="seagreen" /><div style="background-color:seagreen	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="22"><input id='22' type="checkbox" class="size2" name="color[]" value="aquamarine" /><div style="background-color:aquamarine	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="23"><input id='23' type="checkbox" class="size2" name="color[]" value="seashell" /><div style="background-color:seashell	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <span class="checkerr3" style="color: red"></span>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Զեղջ</label>
                                    <input name="sale" type="number" class="form-control" id="product-description"
                                           placeholder="Add product description...">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Գին/AM</label>
                                    <input name="priceAM" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Գին/RU</label>
                                    <input name="priceRU" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Գին/EN</label>
                                    <input name="priceEN" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Նկար</label>
                                    <input name="posters[]" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple>
                                </div>
                                <input type="hidden" value="{{Auth::user()->id}}" name="brend_id">
                                <div class="form-group">
                                    <label for="inputStatus">Կատեգորիան</label>
                                    <select name="category_id" class="form-control" id="category">
                                        <option selected disabled>Կատեգորիա</option>
                                        @isset($category)
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->titleAM}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="subcategory_id" id="subcategory" class="form-control input-sm">
                                        <option selected disabled>Կատեգորիա</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="row">
        <div class="col-12 button-contollet-bottom">
            <a href="{{ URL::previous() }}" class="btn btn-secondary btn-first-back">Վերադառնալ</a>
            <button  class="btn btn-success float-right">Պահպանել (save)</button>
        </div>
    </div>
    </section>
    </form>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('#category').on("change",function () {
            var category_id = $(this).val();
            if(category_id){

                $.ajax({
                    url:'1way/'+ category_id ,
                    type:"GET",
                    dataType: "json",
                    success:function (data) {
                        console.log(data,'llll')
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
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<script src="{{URL::asset("dist/js/add.js")}}"></script>

</body>
</html>
