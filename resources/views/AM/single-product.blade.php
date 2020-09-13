@extends("layouts.footer")
@section("lang_curse")
<div class="languageExchangeContainer d-md-inline-block d-none">
        <div class="currentLanguageExchange">
            <div>
                Հայ/
                @if($curse == 1)
                    РУБ
                @elseif ($curse == 2)
                    USD
                @elseif ($curse == 0)
                    AMD
                @endif
            </div>
        </div>

        <div class="languageExchange">
            <div class="triangle-up activeMenu">
            </div>
            <div class="cont fade">
                <div class="languageContainer">
                    <div class="language">

                    </div>
                    <div class="languagesBox dropDown l_e_active">
                    <a style="display: flex;align-items: center" href="{{route("AM.single",[$product->id,"curse"=>$curse])}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
{{--                    <a style="display: flex;align-items: center" href="{{route("RU.single",[$product->id,"curse"=>$curse])}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
{{--                    <a style="display: flex;align-items: center" href="{{route("EN.single",[$product->id,"curse"=>$curse])}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
                    </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                    <form action="{{route('AM.single',[$product->id,"curse"=>$curse])}}" role="search" method="get">
                        @csrf
                        <button type="submit" name="curse"  value="0"><svg
                                version="1.1"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 330 330"
                                style="enable-background: new 0 0 330 330;"
                                xml:space="preserve"
                            >

                      <path
                          id="XMLID_352_"
                          d="M240,190h-15v-30h15c8.284,0,15-6.716,15-15s-6.716-15-15-15h-15V75c0-41.355-33.645-75-75-75
                   S75,33.645,75,75c0,8.284,6.716,15,15,15s15-6.716,15-15c0-24.813,20.187-45,45-45s45,20.187,45,45v55h-75c-8.284,0-15,6.716-15,15
                   s6.716,15,15,15h75v30h-75c-8.284,0-15,6.716-15,15s6.716,15,15,15h75v95c0,8.284,6.716,15,15,15c8.284,0,15-6.716,15-15v-95h15
                   c8.284,0,15-6.716,15-15S248.284,190,240,190z"
                      />
                    </svg>AMD</button>
                    </form>
                    <form action="{{route('AM.single',[$product->id,"curse"=>$curse])}}" role="search" method="get">
                        @csrf
                        <button type="submit" name="curse" value="1"><svg
                                version="1.1"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 330 330"
                                style="enable-background: new 0 0 330 330;"
                                xml:space="preserve"
                            >
                      <path
                          id="XMLID_449_"
                          d="M180,170c46.869,0,85-38.131,85-85S226.869,0,180,0c-0.183,0-0.365,0.003-0.546,0.01h-69.434
                   c-0.007,0-0.013-0.001-0.019-0.001c-8.284,0-15,6.716-15,15v0.001V155v45H80c-8.284,0-15,6.716-15,15s6.716,15,15,15h15v85
                   c0,8.284,6.716,15,15,15s15-6.716,15-15v-85h55c8.284,0,15-6.716,15-15s-6.716-15-15-15h-55v-30H180z M180,30.01
                   c0.162,0,0.324-0.003,0.484-0.008C210.59,30.262,235,54.834,235,85c0,30.327-24.673,55-55,55h-55V30.01H180z"
                      />
                    </svg>RUB</button>
                    </form>
                    <form action="{{route('AM.single',[$product->id,"curse"=>$curse])}}" role="search" method="get">
                        @csrf
                        <button type="submit" name="curse" value="2"><svg
                                version="1.1"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 329.991 329.991"
                                style="enable-background: new 0 0 329.991 329.991;"
                                xml:space="preserve"
                            >
                      <path
                          id="XMLID_462_"
                          d="M179.996,151.501V62.571c17.458,6.192,30,22.865,30,42.42c0,8.284,6.716,15,15,15c8.284,0,15-6.716,15-15
                   c0-36.219-25.808-66.523-60-73.491V15c0-8.284-6.716-15-15-15c-8.284,0-15,6.716-15,15v16.5c-34.192,6.968-60,37.272-60,73.491
                   s25.808,66.522,60,73.491v88.929c-17.459-6.192-30-22.865-30-42.42c0-8.284-6.716-15-15-15s-15,6.716-15,15
                   c0,36.219,25.808,66.523,60,73.491v16.509c0,8.284,6.716,15,15,15c8.284,0,15-6.716,15-15v-16.509c34.192-6.968,60-37.272,60-73.491
                   S214.187,158.469,179.996,151.501z M119.996,104.991c0-19.555,12.541-36.228,30-42.42v84.84
                   C132.537,141.219,119.996,124.546,119.996,104.991z M179.996,267.411v-84.84c17.458,6.192,30,22.865,30,42.42
                   S197.454,261.219,179.996,267.411z"
                      />
                    </svg>USD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("content")

                <div class="col-lg-10">
                    <div class="row" style="font-size: 13px;">
                        <div class="col-xl-6 col-lg-5">
                            @if($categ && $subcateg !=null)
{{$categ->titleAM}}/{{$subcateg->titleAM}}
                            @else

                            @endif
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <a style="text-decoration: none;color: #0d0735" href="{{route("AM.brand",["curse"=>$curse,"brend_id"=>$brands->user_id])}}">
                                <p style="margin-left:-13px;font-family: Arial-Arm-Regular">
                                    <span style="background-color: black;display: inline-block;border-radius: 50%;width: 15px;height: 15px;"></span>
                                    {{$brands->title}}
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-9 col-12" id="single">
{{--                            @php $img = json_decode($product->posters)--}}
{{--                            @endphp--}}
{{--                            <div class="imgdiv" style="background-image: url({{asset('images/'.$img[0])}})">--}}
{{--                            </div>--}}
{{--                            <div class="col-12 ">--}}
{{--                                <span class="arrowslideleft1" style="margin-top: -15%;font-size: 29px;cursor: pointer;"><i class='fa fa-angle-left'></i></span>--}}
{{--                                @foreach(json_decode($product->posters) as $key => $poster)--}}
{{--                                    @if ($key < 4) <img class="miniprod1 miniproduct showimg " src="{{asset('images/'.$poster)}}" alt=" ">--}}
{{--                                        @else--}}
{{--                                        <img class="miniprod1 miniproduct miniprod2  hiddenimg " src="{{asset('images/'.$poster)}}" alt=" ">--}}
{{--                                        @endif--}}
{{--                                        @endforeach--}}
{{--                                        <span class="arrowslide1" style="margin-top: -15%;cursor: pointer;"><i style="font-size: 29px;" class='fa fa-angle-right'></i></span>--}}
{{--                            </div>--}}

                            <div class="demo">
                                <ul id="lightSlider">
                                    @php $img = json_decode($product->posters);
                                    @endphp

                                    @if(count($img) < 2)
                                        <li data-thumb="{{asset('images/'.$img[0])}}">
                                            <div class="imgdiv" style="background-image: url('{{asset('images/'.$img[0])}}')"></div>
                                        </li>
                                    @else
                                        @foreach(json_decode($product->posters) as $poster)
                                            <li data-thumb="{{asset('images/'.$poster)}}">
                                                <img src="{{asset('images/'.$poster)}}" />
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-4 col-12 descdiv">
                            <div class="row">
                                    <h4 class="prodname" name="titleAM">{{$product->titleAM}}</h4>
                                </div>
                                <div class="col-6">
                                    <h6 class="card-subtitle mb-2 text-muted" style="margin-left: -27px;font-family: Arial-Arm-Regular" name="code">Կոդ {{$product->code}}</h6>
                                </div>
                                <div class="col-6">
                                    <p class="card-text" style="margin-left: -27px;"><i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i></p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6  order-lg-1 order-2">
                                        <span class="finalprice" style="white-space: nowrap;margin-left: -13px;color: #073b4c;font-size: 23px;font-weight: bold;font-family: arialarmmedium">
                                            @if($curse == 1)
                                            {{round($finelPriceRU)}} руб
                                            @elseif ($curse == 2)
                                            {{round($finelPriceEN,1,1)}}$
                                            @elseif ($curse == 0)
                                            {{round($finelPriceAM,-1,3)}} Դրամ
                                            @endif </span>
                                    </div>
                                    @if(isset($product->sale))
                                        <div class=" col-lg-6 mb-2 mt-md-3 mt-lg-0  order-lg-2 order-1">
                                            <div class="ssale">
                                                <div>
                                                    <span>{{$product->sale}}%</span>
                                                    <span>Զեղչ</span>
                                                </div>
                                                <span class="newPrice">@if($curse == 1)
                                                        {{$product->priceRU}}&nbsp;руб
                                                    @elseif ($curse == 2)
                                                        {{$product->priceEN}}&nbsp;$
                                                    @elseif ($curse == 0)
                                                        {{$product->priceAM}}&nbsp;Դրամ
                                                    @endif</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @if($product->color != "N;")
                                <div class="col-6">
                                    <p style="margin-left: -27px;margin-bottom: 5px;font-family: Arial-Arm-Regular">Գույներ</p>
                                </div>
                                <div class="col-12">
                                    <div style="display: flex;margin-bottom: 3%;margin-left: -53px;">
                                        @if($product->color != "N;")
                                        <ul class="ks-cboxtags col-12" style="margin-left: 3%;">
                                        <?php $rrr = 100; ?>
                                             @foreach (unserialize($product->color) as $color)
                                            <li>
                                              <input class="colorRadioInput " type="radio" name="color" id="{{$rrr}}"  value="{{$color}}" style="display: none;">
                                              <label class="colorRadio checkcolor" for="{{$rrr}}" style="background-color: {{ $color }};border: none; width:30px; height:30px">
                                              </label>
                                            </li>
                                                <?php $rrr+=1 ?>
                                            @endforeach
                                            <span class="errcolor" style="color: red;display:none;"></span>
                                        </ul>
                                            @endif
                                    </div>
                                </div>
                                @endif
                                <div id="newDiv">
                                    <span class="spanX">X</span>
                                    <div class="newImg"></div>
                                </div>
                            @if($product->size != "[null]")
                                <div class="col-6">
                                    <p style="margin-left: -27px;margin-bottom: 9px;font-family: Arial-Arm-Regular">{{$product->sizeName}}</p>
                                </div>
                                <div class="col-12" style="margin-left: -27px;margin-bottom: 22px;">
                                    <div style="display: flex;">
                                        @if($product->size != "N;")
                                        <ul class="ks-cboxtags col-12" style="margin-left: -4%;display: flex">
                                            <?php $mmm = 1025189; ?>
                                            @foreach (unserialize($product->size) as $size)
                                            <li style="margin-left: 7px">
                                                <input style="display: none;" type="radio" name="size" class="sizeRadioInput " id="{{$mmm}}" value="{{ $size }}">
                                                <label class="sizeRadio check" for="{{$mmm}}">{{$size}}</label>
                                            </li>
                                                    <?php $mmm+=1 ?>
                                            @endforeach
                                            <span class="err" style="color: red;display:none;"></span>

                                        </ul>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                <div class="col-xl-9 col-lg-12 col-sm-6 col-9" style="margin-left: -20px">
                                    <div class="row" style="justify-content: space-between;align-items: center">
                                        <div>
                                            <span style="background-color: white;">
                                                <span class="minus" style="border-radius: 50px;border: 1px solid black;background-color: white;outline: none;padding: 2px 5px;cursor: pointer;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            </span>
                                            <input type="text" class="quantityRadioInput priceinp" style="width: 29px;text-align: center;" id="ciout">
                                            <label for="ciout" class="quantityRadio"></label>
                                            <span class="mxvalue" style="display: none;">30</span>
                                            <span>
                                                <span class="plus" style="border-radius: 50px;border: 1px solid black;background-color: white;outline: none;padding: 2px 5px;cursor: pointer;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </span>
                                        </div>
                                        <div class="mt-lg-2 mt-2 mt-xl-0 mt-md-0" style="display: flex">
                                            <div>
                                                <form onsubmit="return formValidate()" action="{{route("AM.cart",[$product->id,"curse"=>$curse])}}" method="get">
                                                    <div style="display: none">
                                                        <input class="forSizeRadio" type="checkbox" name="size" value="1" />
                                                        <input class="forColorRadio" type="checkbox" name="color" value="2" />
                                                        <input name="quantity" id="quantity"/>
                                                    </div>
                                                <button  onclick=javascript:sender() style="font-size: 14px;font-family: arialarmmedium;margin-right: 2px;background-color: #0d0735;color: #98f2fe;border: 0;outline: none;height: 44px;width: 96px" type="submit">ԳՆԵԼ</button>
                                            </form>
                                        </div>
                                        @if (isset(Auth::user()->id))
                                            <?php $user =  Auth::user()->id ?>
                                                <form action="{{route('AM.checkout',["id"=>$product->id,"user_id"=>$user,"curse"=>$curse])}}" method="get">
                                                    <div style="display: none">
                                                        <input class="forSizeRadio" type="checkbox" name="size" value="1" />
                                                        <input class="forColorRadio" type="checkbox" name="color" value="2" />
                                                        <input class="forQuantityRadio" type="checkbox" name="quantity" value="3" />
                                                    </div>
                                                    <button style="background-color: #0d0735;border: 0;outline: none;height: 44px;width: 44px;margin-right: 2px;"><i style="color: #98f2fe;" class="fa fa-shopping-cart"></i></button>
                                                </form>
                                            @else
                                            <a href="{{route('login.login',$curse)}}">
                                                <button style="background-color: #0d0735;border: 0;outline: none;height: 44px;width: 44px;margin-right: 2px;">
                                                    <i style="color: #98f2fe;" class="fa fa-shopping-cart"></i>
                                                </button>
                                            </a>
                                            @endif
                                            @if (isset(Auth::user()->id))
                                             <?php $user =  Auth::user()->id ?>
                                            <form action="{{route('AM.favorite-store',[$product->id,$user,"curse"=>$curse])}}" method="get">
{{--                                                <div style="display: none">--}}
{{--                                                <input class="checkBoxer-2" type="radio" name="check2" id="" value="1" />--}}
{{--                                                <input class="checkBoxer-2" type="radio" name="check2" id="" value="2" />--}}
{{--                                                <input class="checkBoxer-2" type="radio" name="check2" id="" value="3" />--}}
{{--                                                </div>--}}
                                                <button style="background-color: #0d0735;border: 0;outline: none;height: 44px;width: 44px">
                                                    <i style="color: #98f2fe;" class="fa fa-heart"></i>
                                                </button>
                                            </form>
                                            @else
                                            <a href="{{route('login.login',$curse)}}">
                                            <button style="background-color: #0d0735;border: 0;outline: none;height: 44px;width: 44px">
                                                <i style="color: #98f2fe;" class="fa fa-heart"></i>
                                            </button>
                                            </a>
                                            @endif
                                            </div>
                                            </div>
                                            </div>
                            <div class="flash-message" style="max-height: 100px;margin-left: 4%">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                        <div class="alert alert-{{ $msg }}" style="background-color: #0d0735;color: #98f2fe;position: absolute;width: 71%;height: 43px;z-index: 1;display: flex;margin-top: 5px;align-items: center;justify-content: center;opacity: 1;">
                                            <span style="white-space: normal;position: absolute;padding-top: 2px;">{{ Session::get('alert-' . $msg) }}</span>
{{--                                            <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #98f2fe;">&times;</a>--}}
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                                                <div class="col-12 delivery1 " style="margin-top: 6%; ">
                                                    <h5 class="delivery ">Առաքում՝ Երևանում ԱՆՎՃԱՐ</h5>
                                                    <p class="delivery ">Առաքման մեթոդ՝ Առաքիչի շնորհիվ</p>
                                                    <p class="delivery ">Առաքման ժամկետ՝ 2օր</p>
                                                </div>
                                     </div>

                            </div>
                        <div style="margin-top: 5%; ">
                            <span style="font-family: Arial-Arm-Regular" name="descriptionAM">{{$product->descriptionAM}} </span>
                        </div>
                    </div>

            <div style="margin-left: 18%;margin-top: 3%;margin-bottom: 6%;font-family: arialarmmedium; "><b> Նմանատիպ ապրանքներ</b></div>
                <div class="col-lg-10 col-12 offset-lg-2">
                    <div class="col">
                        <div class="row justify-content-between">
                            @foreach ($like as  $product)
                                @if ($product->sale == null)
                                <div class="productItem mb-4">
                                    <div>
                                        @php $img = json_decode($product->posters)
                                        @endphp
                                        <a href="{{ route('AM.single',[$product->id,"curse"=>$curse]) }}" title="{{$product->titleAM}}">

                                            <div class="ItemSquare" style="background-image: url({{asset('images/'.$img[0])}});"></div>

                                            <p style="color: black;" >{{$product->titleAM}}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                            <span class="stars d-flex flex-nowrap">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                <span style="padding-left: 5px">
                                                                @if($curse == 1)
                                                        {{str_replace('          ','',$product->priceR)}}руб
                                                    @elseif ($curse == 2)
                                                        {{str_replace('            ','',$product->priceEN)}}$
                                                    @elseif ($curse == 0)
                                                        {{str_replace('           ','',$product->priceAM)}} դր․
                                                    @endif
                                                            </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @else
                                    <div class="productItem mb-4">
                                        <div>
                                            <div class="saleNumber"  style="background-color: #072935;border-radius: 50%;color: white;height: 35px;width: 35px;padding: 5px 2px;float: right;margin-right: -14px;margin-top: -18px;">{{$product->sale}}%</div>
                                            @php $img = json_decode($product->posters)
                                            @endphp
                                            <a href="{{ route('AM.single',[$product->id,"curse"=>$curse]) }}" title="{{$product->titleAM}}">

                                                <div class="ItemSquare" style="background-image: url({{asset('images/'.$img[0])}});"></div>

                                                <p style="color: black;" >{{$product->titleAM}}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                            <span class="stars d-flex flex-nowrap">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                    <span style="padding-left: 5px">
                                                               <?php
                                                        //===================================
                                                        $rrr = $product->priceAM * $product->sale/100;

                                                        $ttt = $product->priceAM - $rrr;
                                                        //===================================
                                                        $qqq = $product->priceRU * $product->sale/100;

                                                        $eee = $product->priceRU - $qqq;
                                                        //===================================
                                                        $yyy = $product->priceEN * $product->sale/100;

                                                        $fff = $product->priceEN - $yyy;
                                                        //===================================
                                                        ?>
                                                        @if($curse == 1)
                                                            {{str_replace('          ','',round($eee))}}руб
                                                        @elseif ($curse == 2)
                                                            {{str_replace('            ','',round($fff,1,1))}}$
                                                        @elseif ($curse == 0)
                                                            {{str_replace('           ','',round($ttt,-1,3))}} դր.
                                                        @endif
                                                     </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <style>
                        @media only screen and (max-width:374px) {
                            .ItemSquare{
                                width: 125px!important;
                                height: 125px!important;
                            }

                        }

                        @media only screen and (max-width:524px){
                            .ItemSquare{
                                width: 165px!important;
                                height: 165px!important;
                            }
                        }

                        @media only screen and (max-width:420px){
                            .ItemSquare{
                                width: 140px!important;
                                height: 140px!important;
                            }
                        }

                        @media only screen and (max-width:330px){
                            .ItemSquare{
                                width: 115px!important;
                                height: 115px!important;
                            }
                        }
                    </style>
                </div>
                </div>
                </div>
@endsection
@section("script")
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/lightslider.js') }}"></script>
    <script src="{{ URL::asset('js/single.js') }}"></script>
@endsection

