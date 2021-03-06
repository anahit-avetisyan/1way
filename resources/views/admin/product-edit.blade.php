@extends("admin.app")
@section("add")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Փափոխել ապրանքը</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Փափոխել ապրանքը</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form  action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
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
                                    <textarea name="descriptionAM"   type="text" class="form-control" id="product-description"
                                              placeholder="Add product description...">{{$product->descriptionAM}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր/RU</label>
                                    <textarea name="descriptionRU"   type="text" class="form-control" id="product-description"
                                              placeholder="Add product description...">{{$product->descriptionRU}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Նկարագիր/EN</label>
                                    <textarea name="descriptionEN"   class="form-control" id="product-description"
                                              placeholder="Add product description...">{{$product->descriptionEN}}</textarea>
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
                                        <input id="fvefrbve" type="text" name="size[]" class="product-size" placeholder=" ">
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
                                    <label for="11"><input id='11' class="product-color"type="checkbox" name="color[]" value="firebrick" /><div style="background-color:firebrick ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="12"><input id='12' class="product-color" type="checkbox" name="color[]" value="seagreen" /><div style="background-color:seagreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="13"><input id='13' class="product-color"type="checkbox" name="color[]" value="blueviolet" /><div style="background-color:blueviolet ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="14"><input id='14' class="product-color"type="checkbox" name="color[]" value="black" /><div style="background-color:black ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
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
                                <div class="form-group">
                                    <label for="inputStatus">Ապրանքանիշ</label>
                                    <select name="brend_id"   class="form-control brand product-brend" id="category_id">
                                        <option selected disabled>Ապրանքանիշ</option>
                                        <span class="brandError"></span>
                                        @isset($brand)
                                            @foreach($brand as $brend)
                                                <option value="{{$brend->user_id}}">{{$brend->title}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputStatus">Կատեգորիա</label>
                                    <select name="category_id"   class="form-control product-category" id="category">
                                        <option selected disabled>Կատեգորիա</option>
                                        @isset($category)
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->titleAM}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">

                                    <select name="subcategory_id" id="subcategory"    class="form-control input-sm product-subcategory">
                                        <option selected disabled>Կատեգորիա</option>
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
            <input type="submit" value="Պահպանել (save)" class="btn btn-success float-right">
        </div>
    </div>
    </section>
    </form>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "></script>

<script type="text/javascript">
    $(document).ready(function () {
        var href = window.location.href
        var indexofSearch = href.indexOf('product/')
        var id = href.substring(indexofSearch+8)
         id = id.replace('/edit?','')

        $.ajax({
            url:'/product-data/'+id,
            type:"GET",
            dataType: "json",
            success:function (data) {
                if(data.success){



                    $('.product-brend').val(data.product.brend_id )
                    $('.product-category').val(data.product.category_id)
                    if(data.product.category_id){
                        $.ajax({
                            url:'/ajax/'+data.product.category_id,
                            type:"GET",
                            dataType: "json",
                            success:function (data) {
                                $('select[name="subcategory_id"]').empty();
                                $.each(data,function (key,value) {
                                    $('select[name="subcategory_id"]').append
                                    ('<option value="'+key+'">'+value+'</option>');
                                })
                            }
                        })
                    }
                    $('.product-subcategory').val(data.product.subcategory_id)
                    var imgs = JSON.parse(data.product.posters)
                    $(".img-container").empty()
                    if(imgs.length>0){
                        var img = ""
                        imgs.map(function (img,i) {
                            var imgSrc = "/images/"+img
                            let div = $(`<div class="image-content-container"><img src="${imgSrc}" height="60" width="60"/> <div class="sort-order-image ${imgs.length==1 ? 'img-icon-display-none':''}">
                                                                 <span data-id="${i}" data-sort="up" data-product="${id}"  class="${i!=imgs.length-1 ? 'sort-product-image':'disabled-icon'}">
                                                                    <i class="fas fa-arrow-right"></i>
                                                                </span>  <span data-id="${i}" data-sort="down" data-product="${id}" class=" ${i!=0 ? 'sort-product-image':'disabled-icon'}" >
                                                                    <i class="fas fa-arrow-left"></i>
                                                                </span></div>
<div class="delete-img-container ${imgs.length==1 ? 'img-icon-display-none':''}" ><i data-id="${i}" data-sort="up" data-product="${id}"  class="fas fa-times close-icon-delete"></i></div>
</div>`)

                            $(".img-container").append(div)
                        })

                    }

                    if(data.product.size && data.product.size.length>0){
                        $('.product-size').val(data.product.size[0])
                    }
                    if(data.product.color && data.product.color.length>0){
                        var colors = data.product.color
                        if(colors.length>0){
                            var checkbox = $(".product-color")

                            for(var i = 0; i < checkbox.length; i++){
                                if(colors.includes($(checkbox[i]).val())){
                                    $(checkbox[i]).prop("checked", true);
                                }
                            }


                        }
                    }

                }

            }
        })

            $(document).on('click','.close-icon-delete',function () {

                let id = $(this).data().id
                let productId = $(this).data().product

                $.ajax({
                    url:'/product/img-delete/' +productId  + '/' + id,
                    type:"GET",
                    dataType: "json",
                    success:function (data) {

                        if (data.success == true) {
                            var imgs = JSON.parse(data.img.posters)
                            $(".img-container").empty()
                            if(imgs.length>0){
                                var img = ""
                                imgs.map(function (img,i) {
                                    var imgSrc = "/images/"+img
                                    let div = $(`<div class="image-content-container"><img src="${imgSrc}" height="60" width="60"/> <div class="sort-order-image ${imgs.length==1 ? 'img-icon-display-none':''} ">
                                                                 <span data-id="${i}" data-sort="up" data-product="${data.img.id}"  class="${i!=imgs.length-1 ? 'sort-product-image':'disabled-icon'}">
                                                                    <i class="fas fa-arrow-right"></i>
                                                                </span>  <span data-id="${i}" data-sort="down" data-product="${data.img.id}" class=" ${i!=0 ? 'sort-product-image':'disabled-icon'}" >
                                                                    <i class="fas fa-arrow-left"></i>
                                                                </span></div>
<div class="delete-img-container ${imgs.length==1 ? 'img-icon-display-none':''}" ><i data-id="${i}" data-sort="up" data-product="${data.img.id}"  class="fas fa-times close-icon-delete"></i></div>
</div>`)

                                    $(".img-container").append(div)
                                })

                            }
                        }
                    }
                })
            })
        $(document).on('click','.sort-product-image',function () {

            let id = $(this).data().id
            let productId = $(this).data().product
            let sort = $(this).data().sort
            $.ajax({
                url:'/product/img-sort/' +productId  + '/' + id+'/' + sort,
                type:"GET",
                dataType: "json",
                success:function (data) {

                    if (data.success == true) {
                        var imgs = JSON.parse(data.img.posters)
                        $(".img-container").empty()
                        if(imgs.length>0){
                            var img = ""
                            imgs.map(function (img,i) {
                                var imgSrc = "/images/"+img
                                let div = $(`<div class="image-content-container"><img src="${imgSrc}" height="60" width="60"/> <div class="sort-order-image ${imgs.length==1 ? 'img-icon-display-none':''}">
                                                                 <span data-id="${i}" data-sort="up" data-product="${data.img.id}"  class="${i!=imgs.length-1 ? 'sort-product-image':'disabled-icon'}">
                                                                    <i class="fas fa-arrow-right"></i>
                                                                </span>  <span data-id="${i}" data-sort="down" data-product="${data.img.id}" class=" ${i!=0 ? 'sort-product-image':'disabled-icon'}" >
                                                                    <i class="fas fa-arrow-left"></i>
                                                                </span></div>
<div class="delete-img-container ${imgs.length==1 ? 'img-icon-display-none':''}" ><i data-id="${i}" data-sort="up" data-product="${data.img.id}"  class="fas fa-times close-icon-delete"></i></div>
</div>`)

                                $(".img-container").append(div)
                            })

                        }
                    }
                }
        })
    })



        $('.product-category').on("change",function () {
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url:'/ajax/'+category_id,
                    type:"GET",
                    dataType: "json",
                    success:function (data) {
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
<!-- Control Sidebar -->
@endsection
@section("script")
    <script src="{{URL::asset("dist/js/add.js")}}"></script>
@endsection

