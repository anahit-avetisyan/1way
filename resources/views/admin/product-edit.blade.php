@extends("admin.app")
@section("add")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Project Add</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
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
                                    <label for="inputName">Անվանումը</label>
                                    <input name="titleAM" value="{{$product->titleAM}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">ԱնվանումըRU</label>
                                    <input name="titleRU" value="{{$product->titleRU}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">ԱնվանումըEN</label>
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
                                    <label for="inputDescription">ՆկարագիրRU</label>
                                    <input name="descriptionRU" value="{{$product->descriptionRU}}" type="text" class="form-control" id="product-description"
                                           placeholder="Add product description...">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">ՆկարագիրEN</label>
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
                                        <input id="fvefrbve" type="text" name="size[]" placeholder="բլա բլա բլա">
                                        <span class="categoryAdd" style="cursor: pointer;background-color: green;padding: 4px 10px;color: white;font-weight: bold;font-size: 17px;border-radius: 8px;">+</span>
                                        <span class="categoryRemove" style="cursor: pointer;background-color: red;padding: 4px 10px;color: white;font-weight: bold;font-size: 17px;border-radius: 8px;">-</span>
                                    </div>
                                </div>

                                <div class="form-group" style="border-bottom:1px solid black">
                                    <label for="inputDescription">Գույներ</label>
                                    <br />
                                    <label for="1"><input id='1' type="checkbox" name="color[]" value="red" /><div style="background-color:red ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="2"><input id='2' type="checkbox" name="color[]" value="orange" /><div style="background-color:orange ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="3"><input id='3' type="checkbox" name="color[]" value="yellow" /><div style="background-color:yellow ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="4"><input id='4' type="checkbox" name="color[]" value="white" /><div style="background-color:white ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="5"><input id='5' type="checkbox" name="color[]" value="mistyrose" /> <div style="background-color:mistyrose ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="6"><input id='6' type="checkbox" name="color[]" value="lightcyan" /><div style="background-color:lightcyan;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="7"><input id='7' type="checkbox" name="color[]" value="pink" /><div style="background-color:pink ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="8"><input id='8' type="checkbox" name="color[]" value="darkgray" /><div style="background-color:darkgray ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="9"><input id='9' type="checkbox" name="color[]" value="aqua" /><div style="background-color:aqua;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="10"><input id='10' type="checkbox" name="color[]" value="blue" /><div style="background-color:blue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="11"><input id='11' type="checkbox" name="color[]" value="firebrick" /><div style="background-color:firebrick ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="12"><input id='12' type="checkbox" name="color[]" value="seagreen" /><div style="background-color:seagreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="13"><input id='13' type="checkbox" name="color[]" value="blueviolet" /><div style="background-color:blueviolet ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="14"><input id='14' type="checkbox" name="color[]" value="black" /><div style="background-color:black ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="15"><input id='15' type="checkbox" name="color[]" value="darkolivegreen" /><div style="background-color:darkolivegreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="16"><input id='16' type="checkbox" name="color[]" value="darkgreen" /><div style="background-color:darkgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="17"><input id='17' type="checkbox" name="color[]" value="forestgreen" /><div style="background-color:forestgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="18"><input id='18' type="checkbox" name="color[]" value="midnightblue" /><div style="background-color:midnightblue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="19"><input id='19' type="checkbox" name="color[]" value="indigo" /><div style="background-color:indigo	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="20"><input id='20' type="checkbox" name="color[]" value="plum" /><div style="background-color:plum	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="21"><input id='21' type="checkbox" name="color[]" value="seagreen" /><div style="background-color:seagreen	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="22"><input id='22' type="checkbox" name="color[]" value="aquamarine" /><div style="background-color:aquamarine	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <label for="23"><input id='23' type="checkbox" name="color[]" value="seashell" /><div style="background-color:seashell	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                    <br>
                                </div>

                                <div class="form-group">
                                    <label for="inputDescription">Զեղջը</label>
                                    <input name="sale" type="number" value="{{$product->sale}}"  class="form-control" id="product-description"
                                           >
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">ԳինըAM</label>
                                    <input name="priceAM" value="{{$product->priceAM}}" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">ԳինըRU</label>
                                    <input name="priceRU" value="{{$product->priceRU}}" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">ԳինըEN</label>
                                    <input name="priceEN" value="{{$product->priceEN}}" type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Նկարը</label>
                                    <input name="posters[]" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple>
                                    <span class="fileError"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Band</label>
                                    <select name="brend_id" class="form-control brand" id="category_id">
                                        <option selected disabled>Band</option>
                                        <span class="brandError"></span>
                                        @isset($brand)
                                            @foreach($brand as $brend)
                                                <option value="{{$brend->user_id}}">{{$brend->title}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                {{--                            {{dd($category)}}--}}
                                <div class="form-group">
                                    <label for="inputStatus">Կատեգորիան</label>
                                    <select name="category_id" class="form-control" id="category">
                                        <option selected disabled>Կատեգորիան</option>
                                        @isset($category)
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->titleAM}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">

                                    <select name="subcategory_id" id="subcategory" class="form-control input-sm">
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
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Porject" class="btn btn-success float-right">
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
        $('select[name="category_id"]').on("change",function () {
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url:'/ajax/'+category_id,
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
<!-- Control Sidebar -->
@endsection
@section("script")
    <script src="{{URL::asset("dist/js/add.js")}}"></script>
@endsection

