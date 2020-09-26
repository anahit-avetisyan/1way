@extends("admin.front")
@section("content")
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="{{route("product.create")}}">
                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Ավելացնել</button>
                                    </a></h3>

                            </div>
                            <div class="form-group brend-select-container">
                                <label for="inputStatus">Ապրանքանիշ (Brand)</label>
                                <select name="brend_id" class="form-control select-brend"  >
                                    <option selected value=""></option>
                                    @isset($brends)
                                        @foreach($brends as $brend)
                                            <option value="{{$brend->user_id}}">{{$brend->title}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 1%">
                                id
                            </th>
                            <th style="width: 8%">
                                Անվանումը
                            </th>
                            <th style="width: 8%">
                               Կոդ
                            </th>
                            <th style="width: 2%" class="text-center">
                                Գինը
                            </th>

{{--                            <th style="width: 8%" class="text-center">--}}
{{--                                Նկարագիր--}}
{{--                            </th>--}}

                            <th style="width: 8%" class="text-center">
                                Նկարը
                            </th>
                            <th style="width: 8%" class="text-center">
                             Ապրանքանիշ (Brand)
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
                        @isset($products)

                        @foreach($products as $key=>$product)


                        <tr>
                            <td>
                                {{$key+1}}
                            </td>
                            <td>
                                {{$product->id}}
                            </td>
                            <td>
                                <a>
{{--                                    {{dd($product)}}--}}
                                    {{mb_substr($product->titleAM,0,17)}}
                                </a>
                                <br/>
                                <a>
                                    {{mb_substr($product->titleRU,0,17)}}
                                </a>
                                <br>
                                <a>
                                    {{mb_substr($product->titleEN,0,17)}}
                                </a>
                            </td>
                            <td>
                                {{$product->code}}
                            </td>
                            <td class="project-state">
{{--                                <span class="badge badge-success">--}}
{{--                                    @if($product->availabilityAM)--}}
{{--                                        Առկա է--}}
{{--                                    @else--}}
{{--                                        Պատվերով--}}
{{--                                    @endif--}}
                                    {{$product->priceAM}}&nbsp;&nbsp;դր
                                     <br>
                                       {{$product->priceRU}}&nbsp;&nbsp;руб
                                    <br>
                                    {{$product->priceEN}}&nbsp;&nbsp;$
{{--                                </span>--}}
                            </td>
{{--                            <td >--}}
{{--                                <a href="">{{mb_substr($product->descriptionAM, 0, 20)}}</a>--}}
{{--                                <br>--}}
{{--                                <a href="">{{mb_substr($product->descriptionRU, 0, 20)}}</a>--}}
{{--                                <br>--}}
{{--                                <a href="">{{mb_substr($product->descriptionEN, 0, 20)}}</a>--}}
{{--                            </td>--}}
                            <td>
                                @php $img = json_decode($product->posters) @endphp
                                    <img src="{{asset('images/'.$img[0])}}" width="60">
                            </td>


                            <td>
                                <?php $gdfxhdhd= \App\Brend::where("user_id",$product->brend_id)->get() ?>
                                @foreach($gdfxhdhd as $gfgdfd)
                                    <a href="{{route("brandIndex",["id"=>$product->brend_id])}}">
                                    {{$gfgdfd->title}}
                                    </a>
                                @endforeach
                            </td>

                            <td>
                               <?php $sdvs= \App\Category::where("id",$product->category_id)->get() ?>
                                @foreach($sdvs as $fbgdfb)
                                {{$fbgdfb->titleAM}}
                                   @endforeach
                            </td>
                            <td style="    padding: inherit;">
                                <div style="display: flex">
                                <form  action="{{route('product.edit',$product->id)}}" method="get" style="color: black;text-align: left">
                                    <button class="btn waves-effect waves-light btn-rounded btn-warning" style="text-align: center;border-radius: 15px;outline: none">Փոփոխել</button>
                                </form>
                                &nbsp;&nbsp;&nbsp;
                                <form action="{{route('product.destroy',$product->id)}}" method="post" style="color: black;text-align: left">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել</button>
                                </form>
                                    &nbsp;&nbsp;
                                @isset(Auth::user()->id)
                                    <?php  $user_id = Auth::user()->id?>
                                @endisset
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <form action="{{route('product.top',$product->id)}}" method="post" style="color: black;text-align: left ">
                                        @csrf
                                        <button class="btn waves-effect waves-light btn-rounded btn-success" style="text-align: center;border-radius: 15px;outline: none">Ավելացնել ԹՈՓ</button>
                                    </form>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
{{--                                    <button ></button>--}}
                                    <!-- Button trigger modal -->
                                    <button type="button" data-id="{{$product->id}}" class="previewButton btn waves-effect waves-light btn-rounded btn-primary watch-product-button" style="text-align: center;border-radius: 15px;outline: none" >
                                        Դիտել
                                    </button>

{{--                                    <a href="{{route("product.single",$product->id)}}">--}}
{{--                                    --}}
{{--                                    </a>--}}
                                </div>
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
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <div class="modal" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="watch-modal-title"> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  >

                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="inputName">Անվանում</label>
                                                        <input name="titleAM" disabled type="text"  class="form-control product-name-am">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputName">Անվանում/RU</label>
                                                        <input name="titleRU"  disabled type="text"   class="form-control product-name-ru">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputName">Անվանում/EN</label>
                                                        <input name="titleEN" disabled  type="text" id="inputName" class="form-control product-name-en">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputStatus">Հասանելիություն</label>
                                                        <select disabled name="availability"  class="form-control custom-select select-availability">
                                                            <option selected disabled="disabled" style="color: #38eba1!important;"><h2>Ապրանքի Հասանելիություն</h2></option>
                                                            <option value="0">Պատվերով</option>
                                                            <option value="1">Առկա է</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputName">Քանակ</label>
                                                        <input disabled name="quantity"  type="text"   class="form-control quantity">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDescription">Նկարագիր</label>
                                                        <input name="descriptionAM"  disabled type="text" class="form-control product-description-am" id="product-description "
                                                               placeholder="Add product description...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDescription">Նկարագիր/RU</label>
                                                        <textarea name="descriptionRU" disabled type="text" class="form-control product-description-ru" id="product-description "
                                                                  placeholder="Add product description..."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDescription">Նկարագիր/EN</label>
                                                        <textarea name="descriptionEN" disabled type="text" class="form-control product-description-en" id="product-description "
                                                                  placeholder="Add product description..."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDescription">Կոդ</label>
                                                        <textarea name="code"  disabled type="text" class="form-control product-code" id="product-description"
                                                                  placeholder="Add product description..."></textarea>
                                                    </div>
                                                    <div class="form-group" style="border-bottom:1px solid black">
                                                        <br>
                                                        <div class="addDiv">
                                                            <label for="fvefrbve">Օրինակ՝ (Չափսը)</label>
                                                            <select name="sizeName" class="product-size-type">
                                                                <option value="Չափս">Չափս</option>
                                                                <option value="Տարողություն">Տարողություն</option>
                                                                <option value="Քաշ">Քաշ</option>
                                                                <option value="Տարիք">Տարիք</option>
                                                                <option class="etc">Այլ․․․</option>
                                                            </select>
                                                            <input id="fvefrbve" disabled type="text" name="size[]" placeholder="Չափս" class="product-size">

                                                        </div>
                                                    </div>

                                                    <div class="form-group " style="border-bottom:1px solid black">
                                                        <label for="inputDescription">Գույներ</label>
                                                        <br />
                                                        <label for="1"><input id='1' disabled class="product-color" type="checkbox" name="color[]" value="red" /><div style="background-color:red ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label for="2"><input id='2' disabled class="product-color"  type="checkbox" name="color[]" value="orange" /><div style="background-color:orange ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label for="3"><input id='3' disabled class="product-color" type="checkbox" name="color[]" value="yellow" /><div style="background-color:yellow ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label for="4"><input id='4' disabled class="product-color" type="checkbox" name="color[]" value="white" /><div style="background-color:white ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="5"><input disabled  class="product-color" id='5' type="checkbox" name="color[]" value="mistyrose" /> <div style="background-color:mistyrose ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label for="6"><input disabled class="product-color" id='6' type="checkbox" name="color[]" value="lightcyan" /><div style="background-color:lightcyan;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="7"><input disabled class="product-color"  id='7' type="checkbox" name="color[]" value="pink" /><div style="background-color:pink ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="8"><input disabled class="product-color"  id='8' type="checkbox" name="color[]" value="darkgray" /><div style="background-color:darkgray ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="9"><input disabled class="product-color" id='9' type="checkbox" name="color[]" value="aqua" /><div style="background-color:aqua;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="10"><input disabled class="product-color" id='10' type="checkbox" name="color[]" value="blue" /><div style="background-color:blue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="11"><input disabled class="product-color"  id='11' type="checkbox" name="color[]" value="firebrick" /><div style="background-color:firebrick ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label for="12"><input disabled class="product-color"  id='12' type="checkbox" name="color[]" value="seagreen" /><div style="background-color:seagreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="13"><input disabled class="product-color"  id='13' type="checkbox" name="color[]" value="blueviolet" /><div style="background-color:blueviolet ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="14"><input disabled class="product-color"  id='14' type="checkbox" name="color[]" value="black" /><div style="background-color:black ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="15"><input disabled class="product-color"  id='15' type="checkbox" name="color[]" value="darkolivegreen" /><div style="background-color:darkolivegreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="16"><input disabled class="product-color"  id='16' type="checkbox" name="color[]" value="darkgreen" /><div style="background-color:darkgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="17"><input disabled class="product-color"  id='17' type="checkbox" name="color[]" value="forestgreen" /><div style="background-color:forestgreen ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="18"><input disabled class="product-color"  id='18' type="checkbox" name="color[]" value="midnightblue" /><div style="background-color:midnightblue ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="19"><input disabled class="product-color"  id='19' type="checkbox" name="color[]" value="indigo" /><div style="background-color:indigo	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="20"><input disabled id='20' type="checkbox"  class="product-color"  name="color[]" value="plum" /><div style="background-color:plum	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="21"><input disabled class="product-color" id='21' type="checkbox" name="color[]" value="seagreen" /><div style="background-color:seagreen	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="22"><input disabled class="product-color"  id='22' type="checkbox" name="color[]" value="aquamarine" /><div style="background-color:aquamarine	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <label  for="23"><input disabled id='23'  class="product-color"  type="checkbox" name="color[]" value="seashell" /><div style="background-color:seashell	 ;width: 30px;height: 30px;margin-right: 8px;border:1px solid black"></div></label>
                                                        <br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputDescription">Զեղջ</label>
                                                        <input name="sale" disabled type="number"   class="form-control product-sale" id="product-description"
                                                        >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">Գին/AM</label>
                                                        <input name="priceAM" disabled  type="text" id="inputClientCompany" class="form-control price-am">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">Գին/RU</label>
                                                        <input name="priceRU" disabled type="text" id="inputClientCompany" class="form-control price-ru">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">Գին/EN</label>
                                                        <input name="priceEN" disabled  type="text" id="inputClientCompany" class="form-control price-en">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputProjectLeader">Նկարը</label>
                                                        <div class="img-container">

                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputStatus">Ապրանքանիշ</label>
                                                        <select disabled name="brend_id" class="form-control product-brend" id="category_id">
                                                            <option selected disabled>Ապրանքանիշ</option>
                                                            @isset($brends)
                                                                @foreach($brends as $brend)
                                                                    <option value="{{$brend->id}}">{{$brend->title}}</option>
                                                                @endforeach
                                                            @endisset
                                                        </select>
                                                    </div>
                                                    {{--                            {{dd($category)}}--}}
                                                    <div class="form-group">
                                                        <label for="inputStatus">Կատեգորիա</label>
                                                        <select disabled name="category_id" class="form-control product-category" id="category">
                                                            <option selected disabled>Կատեգորիա</option>
                                                            @isset($category)
                                                                @foreach($category as $categories)
                                                                    <option value="{{$categories->id}}">{{$categories->titleAM}}</option>
                                                                @endforeach
                                                            @endisset
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                        </div>
                                        <!-- /.card -->
                                    </div>
                        </div>

        </section>
        </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="{{URL::asset("dist/js/preview.js")}}"></script>

@endsection
