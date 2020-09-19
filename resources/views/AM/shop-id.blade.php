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
                <a style="display: flex;align-items: center" href="{{route("AM.shop-id",['id'=>$categ1,'curse'=>$curse])}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
{{--                <a style="display: flex;align-items: center" href="{{route("RU.shop-id",['id'=>$categ1,'curse'=>$curse])}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
{{--                <a style="display: flex;align-items: center" href="{{route("EN.shop-id",['id'=>$categ1,'curse'=>$curse])}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
                </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                <form action="{{route('AM.shop-id',['id'=>$categ1,'curse'=>$curse])}}" role="search" method="get">
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
                <form action="{{route('AM.shop-id',['id'=>$categ1,'curse'=>$curse])}}" role="search" method="get">
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
                <form action="{{route('AM.shop-id',['id'=>$categ1,'curse'=>$curse])}}" role="search" method="get">
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


<div class="col-lg-10 col-12">
    <b>
        <h3 class="mb-4 ml-lg-3">
            @foreach($category as $categorys)
                {{$categorys->titleAM}}
            @endforeach
        </h3>
    </b>




                            <div class="col">

                                <div class="row products">
                                    @if(count($products) > 0)
                                    @foreach ($products as  $product)
                                            @if ($product->sale == null)
                                            <div class="productItem mb-4 mr-lg-4 mr-3">
                                                <div>
                                                    @php $img = json_decode($product->posters)
                                                    @endphp
                                                    <a href="{{ route('AM.single',[$product->id,"curse"=>$curse]) }}" title="{{$product->titleAM}}">

                                                        <div class="ItemSquare" style="background-image: url({{asset('images/'.$img[0])}});"></div>

                                                        <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
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
                                                                $ttt = $product->priceAM;
                                                                //===================================
                                                                $eee = $product->priceRU ;
                                                                //===================================
                                                                $fff = $product->priceEN;
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
                                            @else
                                                <div class="productItem mb-4 mr-lg-4 mr-3">
                                                    <div>
                                                        <div class="saleNumber"  style="background-color: #072935;border-radius: 50%;color: white;height: 35px;width: 35px;padding: 5px 2px;float: right;margin-right: -14px;margin-top: -18px;">{{$product->sale}}%</div>
                                                        @php $img = json_decode($product->posters)
                                                        @endphp
                                                        <a href="{{ route('AM.single',[$product->id,"curse"=>$curse]) }}" title="{{$product->titleAM}}">

                                                            <div class="ItemSquare" style="background-image: url({{asset('images/'.$img[0])}});"></div>

                                                            <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
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
                                    @else
                                        <div style="width: 332px;margin: auto;display: flex;justify-content: center;flex-direction: column;align-items: center">
                                            <img src="{{URL::asset("images/poisk.png")}}" alt="" style="width: 100%">
                                            <span style="font-weight: bold;font-size: 19px">Ձեր հարցումով ապրանք չկա</span>
                                            <button style="background-color: #0d0735;color: #98f2fe;border: 0;outline: none;margin-top: 20px;border: 0;outline: none;padding: 13px 26px;">Փորձեք կրկին</button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                    </div>
                    <style>
                        @media only screen and (max-width:991px) {
                            .filterButton{
                                margin-left:-14px;
                            }
                        }
                        @media only screen and (max-width:540px) {
                            .ItemSquare{
                                width: 190px!important;
                                height: 190px!important;
                            }
                            .products{
                                margin-left:10%;
                            }
                            .filterButton{
                                margin-left:46px;
                            }
                        }

                        @media only screen and (max-width:501px) {
                            .ItemSquare{
                                width: 170px!important;
                                height: 170px!important;
                            }
                            .products{
                                margin-left:7%;
                            }
                            .filterButton{
                                margin-left:29px;
                            }
                        }

                        @media only screen and (max-width:443px) {
                            .ItemSquare{
                                width: 160px!important;
                                height: 160px!important;
                            }
                            .products{
                                margin-left:4%;
                            }
                            .filterButton{
                                margin-left:15px;
                            }
                        }
                        @media only screen and (max-width:412px) {
                            .ItemSquare{
                                width: 150px!important;
                                height: 150px!important;
                            }
                            .products{
                                margin-left:2%;
                            }
                            .filterButton{
                                margin-left:7px;
                            }
                        }

                        @media only screen and (max-width:380px) {
                            .ItemSquare{
                                width: 140px!important;
                                height: 140px!important;
                            }
                            .products,.filterButton{
                                margin-left:0%;
                            }

                        }

                        @media only screen and (max-width:360px) {
                            .ItemSquare{
                                width: 180px!important;
                                height: 180px!important;
                            }
                            .productItem{
                                margin-left: 49px;
                            }
                            .filterButton{
                                margin-left:49px;
                            }
                        }
    </style>
<div style="display: flex;justify-content: flex-end">{{$products->appends(['curse'=>$curse])->links()}}</div>
@endsection
@section("script")
    <script src="{{ URL::asset('../js/shop-id.js') }}"></script>
        <script src="{{ URL::asset('js/filter.js') }}"></script>

@endsection
