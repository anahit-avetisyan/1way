@extends("layouts.footer")
@section("lang_curse")
    <div class="languageExchangeContainer d-md-inline-block d-none">
        <div class="currentLanguageExchange">
            <div style="display: flex;align-items: center;">
                {{--                <img src="{{URL::asset("images/armenia.png")}}"--}}
                <img src="{{URL::asset("images/hay.png")}}" style="width: 15px" /> &nbsp;Հայ&nbsp;/&nbsp;
                @if($curse == 1)
                    <span style="color:#63c876;">&#8381 </span><span style="width: #98f2fe"> RUB</span>
                @elseif ($curse == 2)
                    <span style="color:#63c876;"> $ </span><span style="width: #98f2fe">USD</span>
                @elseif ($curse == 0)
                    <span style="color:#63c876;"> &#1423&nbsp; </span><span style="width: #98f2fe">AMD</span>
                @endif
            </div>
        </div>

        <div class="languageExchange">
            <div class="triangle-up activeMenu">
            </div>
            <div class="cont fade">
                <div class="languageContainer">
                    <div class="language">
                        {{--{{dd()}}--}}
                    </div>
                    <div class="languagesBox dropDown l_e_active">
                        <a style="display: flex;align-items: center" href="{{route("AM.index",$curse)}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
                        {{--                        <a style="display: flex;align-items: center" href="{{route("RU.index",$curse)}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
                        {{--                        <a style="display: flex;align-items: center" href="{{route("EN.index",$curse)}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
                    </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                        <form action="{{route('AM.index',$curse)}}" role="search" method="get">
                            @csrf
                            <button type="submit" name="curse"  value="0"><span style="color:#63c876;margin-right: 6px;font-size: 13px;font-family: currency;margin-top: 2px">֏</span>AMD</button>
                        </form>
                        <form action="{{route('AM.index',$curse)}}" role="search" method="get">
                            @csrf
                            <button type="submit" name="curse"  value="1"><span style="color:#63c876;margin-right: 6px;font-size: 13px;font-family: currency;margin-top: 2px">₽</span>RUB</button>
                        </form>
                        <form action="{{route('AM.index',$curse)}}" role="search" method="get">
                            @csrf
                            <button type="submit" name="curse"  value="2"><span style="color:#63c876;margin-right: 6px;font-size: 13px;font-family: currency;margin-top: 2px">$</span>USD</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section("content")
    <div class="col-lg-10 col-12">
        <div class="row">
            <div class="col-12 top_slider">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 sliderMain">
                        <div id="demo" class="carousel slide" data-ride="carousel" >

                            @php

                                $activeStatus = true
                            @endphp
                            <div class="carousel-inner" style="height: 155px;">
                                @for( $i = 0 ; $i< count($sliders);$i++)
                                    @if ($i == 0)
                                        <div class="carousel-item active" style="height: 195px">
                                            @else
                                                <div class="carousel-item" style="height: 195px">
                                                    @endif
                                                    <img style="width: 100%;height:auto" src="{{asset('images/'.json_decode($sliders[$i]->posters)[0])}}">
                                                </div>
                                                @endfor
                                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                    <span class="sliderArrow">&#x2039;</span>
                                                    
                                                </a>
                                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                                    <span class="sliderArrow">&#x203A;</span>
                                                </a>
                                        </div>
                                        <ol class="carousel-indicators
                                    " style="bottom: -45px!important;">
                                            <li data-target="#demo" style="border-radius: 50%;height:
                            8px!important;width:
                             8px!important;text-decoration:
                             none;background-color: black " data-slide-to="0" class="active"></li>
                                            <li data-target="#demo" style="border-radius: 50%;height:
                            8px!important;width:
                             8px!important;text-decoration:
                             none;background-color: black " data-slide-to="1"></li>
                                            <li data-target="#demo " data-slide-to="2 " style="border-radius: 50%;height:
                            8px!important;width:
                             8px!important;text-decoration:
                             none;background-color: black "></li>
                                            <li data-target="#demo " data-slide-to="3 " style="border-radius: 50%;height:
                            8px!important;width:
                             8px!important;text-decoration:
                             none;background-color: black "></li>
                                        </ol>

                            </div>
                            <form
                                class="form-inline headerForm bottomForm d-md-none d-block mt-3"
                                action="{{route('AM.search',$curse)}}"
                                role="search" method="get">
                                <div class="input-group input-group-sm searchContainer">
                                    <input style="border: 0;outline: none;border-radius: 0;height: 47px;
}"
                                           class="form-control form-control-navbar headerSearch"
                                           type="search"
                                           name="search"
                                           placeholder="Որոնում"
                                           aria-label="Search"/>
                                    <div style="display: flex;align-items: center;padding: 9px;background-color: #3a326d;height: 47px;"><button style="outline: none;border: 0;background-color: transparent"><i style="color: #98f2fe;" class="fa fa-search"></i></button></div>
                                </div>
                            </form>
                            <div class="container d-md-none mt-3">
                                <div class="row categoryCircle">
                                    <div class="col-12">
                                        <div class="circleDiv" style="margin-bottom: 5px">
                                            @foreach ($categoriesArr as $key => $categ)
                                                @if ($key <5)
                                                    <a id="categhref" style="display:contents;" class="mb-2" href="{{route('AM.shop-id2',["id"=>$categ['category']->id,"curse"=>$curse])}}">
                                                        @php $img = json_decode($categ['category']->posters)
                                                        @endphp
                                                        <div style="display: flex;align-items: center;flex-direction: column;">
                                                            <img class="showcategory" src="{{asset('images/'.$img[0])}}" >
                                                            <span style="color: #072935;">{{mb_substr($categ['category']->titleAM,0,4).".."}}</span>
                                                        </div>

                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="circleDiv">
                                            @foreach ($categoriesArr as $key => $categ)
                                                @if ($key >= 5 && $key <10)
                                                    <a id="categhref" style="display:contents;" class="mb-2" href="{{route('AM.shop-id2',["id"=>$categ['category']->id,"curse"=>$curse])}}">
                                                        @php $img = json_decode($categ['category']->posters)
                                                        @endphp
                                                        <div style="display: flex;align-items: center;flex-direction: column;">
                                                            <img class="showcategory" src="{{asset('images/'.$img[0])}}" >
                                                            <span style="color: #072935;">{{mb_substr($categ['category']->titleAM,0,4).".."}}</span>
                                                        </div>

                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-lg-flex justify-content-center d-none">
                            @for ($i=0; $i< 1; $i++)
                                @php $img = json_decode($govazd[$i]->posters)@endphp
                                <a href="{{$govazd[$i]->link}}">
                                    <div>
                                        <img style="width: 155px;margin-left: -34px;border: 1px solid #EDEBE6;" src="{{asset('images/'.$img[0])}}" style="height: 200px;width: 200px">
                                        <button id="promoButton">60% ԶԵՂՉ</button>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>


                </div>
                <b>
                    @foreach($text as $texts)
                        <a href="{{route("AM.top",$curse)}}" style="text-decoration: none;margin-top: 3%">
                            <p class="salestr mb-3" style="margin-top: 3%" >
                                {{$texts->textAM}}
                            </p>
                        </a>
                    @endforeach
                </b>
                <div class="container apranqner1">
                    <div class="row products">
                        <div class="col">
                            <div class="row TopSale">
                                @foreach ($productTop as $key => $product)
                                    @if ($product->sale == null)
                                        @if ($key < 15)
                                            <div class="productItem mb-4 ml-3 mr-lg-3 mr-md-2 mr-2">
                                                <div>
                                                    @php $img = json_decode($product->posters) @endphp
                                                    <a href="{{ route('AM.single',[$product->product_id,"curse"=>$curse]) }}" title="{{$product->titleAM}}"style="text-decoration: none">
                                                        <div style=" background-image: url({{asset('images/'.$img[0])}});
                                                            background-size: contain;
                                                            height: 155px;
                                                            width: 155px;
                                                            border: 1px solid #EDEBE6;
                                                            background-repeat: no-repeat;
                                                            background-position: 50%;" class="ItemSquare">
                                                        </div>
                                                    @if(strlen($product->titleAM) > 27)
                                                        <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
                                                        @else
                                                            <p style="color: black;" >{{$product->titleAM}}</p>
                                                        @endif
                                                        <div class="d-flex justify-content-between align-items-center desc">
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
                                        @endif
                                    @else
                                        @if ($key < 15)
                                            <div class="productItem mb-4 ml-3 mr-lg-3 mr-md-2 mr-2">
                                                <div>
                                                    <div class="saleNumber"  style="background-color: #072935;border-radius: 50%;color: white;height: 35px;width: 35px;padding: 5px 2px;float: right;margin-right: -14px;margin-top: -18px;">{{$product->sale}}%</div>
                                                    @php $img = json_decode($product->posters) @endphp
                                                    <a href="{{ route('AM.single',[$product->product_id,"curse"=>$curse]) }}" title="{{$product->titleAM}}"style="text-decoration: none">
                                                        <div style=" background-image: url({{asset('images/'.$img[0])}});
                                                            background-size: contain;
                                                            height: 155px;
                                                            width: 155px;
                                                            border: 1px solid #EDEBE6;
                                                            background-repeat: no-repeat;
                                                            background-position: 50%;" class="ItemSquare">
                                                        </div>

                                                        @if(strlen($product->titleAM) > 27)
                                                            <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
                                                        @else
                                                            <p style="color: black;" >{{$product->titleAM}}</p>
                                                        @endif
                                                        <div class="d-flex justify-content-between align-items-center desc">
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
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="arrow" style="color: grey;font-size: 25px;font-weight: bolder;cursor: pointer;display: flex;justify-content: center">&#65088;</div>
                    <div class="container hidden" id="hiddenremove">
                        <div class="row ml-md-1">
                            <div class="col-lg-2  big-box" id="mrtop">
                            </div>
                            <div class="col" style="margin-top:0%">
                                <div class="row hidden1">
                                    @foreach ($productTop as $key => $product)

                                        @if ($product->sale == null)
                                            @if ($key >= 15 && $key <30)
                                                <div class="productItem bottomProduct ml-3 mr-lg-3 mr-2">
                                                    <div>
                                                        <div class="saleNumber"  style="background-color: #072935;border-radius: 50%;color: white;height: 35px;width: 35px;padding: 5px 2px;float: right;margin-right: -14px;margin-top: -18px;">{{$product->sale}}%</div>
                                                        @php $img = json_decode($product->posters)
                                                        @endphp
                                                        <a href="{{ route('AM.single',[$product->id,$curse]) }}" style="text-decoration: none" title="{{$product->titleAM}}">
                                                            <div class="ItemSquare" style=" background-image: url({{asset('images/'.$img[0])}});
                                                                background-size: contain;
                                                                height: 155px;
                                                                /* width: 161px; */
                                                                border: 1px solid #EDEBE6;
                                                                background-repeat: no-repeat;
                                                                background-position: 50%;"></div>
                                                            @if(strlen($product->titleAM) > 27)
                                                                <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
                                                            @else
                                                                <p style="color: black;" >{{$product->titleAM}}</p>
                                                            @endif
                                                            <div class="d-flex justify-content-between align-items-center desc">
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
                                            @endif
                                        @else
                                            @if ($key >= 15 && $key <30)
                                                <div class="productItem mb-4 ml-3 mr-lg-3 mr-2">
                                                    <div>
                                                        <div class="saleNumber"  style="background-color: #072935;border-radius: 50%;color: white;height: 35px;width: 35px;padding: 5px 2px;float: right;margin-right: -14px;margin-top: -18px;">{{$product->sale}}%</div>
                                                        @php $img = json_decode($product->posters) @endphp
                                                        <a href="{{ route('AM.single',[$product->product_id,"curse"=>$curse]) }}" title="{{$product->titleAM}}"style="text-decoration: none">
                                                            <div style=" background-image: url({{asset('images/'.$img[0])}});
                                                                background-size: contain;
                                                                height: 155px;
                                                                width: 155px;
                                                                border: 1px solid #EDEBE6;
                                                                background-repeat: no-repeat;
                                                                background-position: 50%;" class="ItemSquare">
                                                            </div>

                                                            @if(strlen($product->titleAM) > 27)
                                                                <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
                                                            @else
                                                                <p style="color: black;" >{{$product->titleAM}}</p>
                                                            @endif
                                                            <div class="d-flex justify-content-between align-items-center desc">
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
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="sailContainer">
                            @for ($i=0; $i
                            < 1; $i++) @php $img = json_decode($promo[$i]->posters)
                            @endphp
                            <div class="sailBox" style="width: 49%">
                                <a href="{{$promo[$i]->link}}">
                                    <div>
                                        <img class="add1" style="width: 100%;" src="{{asset('images/'.$img[0])}}" alt="">
                                    </div>
                                </a>
                            </div>
                            @endfor
                            @for ($i=1; $i
                            < 2; $i++) @php $img = json_decode($promo[$i]->posters)
                            @endphp
                            <div class="sailBox " style="width: 49%">
                                <a href="{{$promo[$i]->link}}">
                                    <div>
                                        <img class="add2" style="width:100%" src="{{asset('images/'.$img[0])}}" alt="">
                                    </div>
                                </a>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                @foreach($text as $texts)
                    <div class="topprod">
                        <a style="text-decoration: none;" href="{{route("AM.sale",$curse)}}">  <b>
                                {{$texts->text1AM}}
                            </b>
                        </a>
                    </div>
                @endforeach
                <div class="container apranqner2">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                @foreach ($productsSal as $key => $product)
                                    @isset($product->sale)
                                        @if ($key < 15) <div class="productItem bottomProduct ml-3 mr-lg-3 mr-2">
                                            <div>
                                                <div class="saleNumber"  style="background-color: #072935;border-radius: 50%;color: white;height: 35px;width: 35px;padding: 5px 2px;float: right;margin-right: -14px;margin-top: -18px;">{{$product->sale}}%</div>
                                                @php $img = json_decode($product->posters)
                                                @endphp
                                                <a href="{{ route('AM.single',[$product->id,$curse]) }}" style="text-decoration: none" title="{{$product->titleAM}}">
                                                    <div class="ItemSquare" style=" background-image: url({{asset('images/'.$img[0])}});
                                                        background-size: contain;
                                                        height: 155px;
                                                        /* width: 161px; */
                                                        border: 1px solid #EDEBE6;
                                                        background-repeat: no-repeat;
                                                        background-position: 50%;"></div>
                                                    @if(strlen($product->titleAM) > 27)
                                                        <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
                                                    @else
                                                        <p style="color: black;" >{{$product->titleAM}}</p>
                                                    @endif
                                                    <div class="d-flex justify-content-between align-items-center desc">
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
                                    @endisset
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="arrow1" style="display: flex;justify-content: center;color: grey;font-size: 25px;font-weight: bolder;cursor: pointer;">&#65088;</div>
                    <div class="container" style="margin:0;padding:0">
                        <div class="row">
                            <div class="sailContainer">
                                @for ($i=0; $i
                                < 1; $i++) @php $img = json_decode($promo[$i]->posters)
                                @endphp
                                <div class="sailBox" style="width: 49%">
                                    <a href="{{$promo[$i]->link}}">
                                        <div>
                                            <img class="add1" style="width: 100%;" src="{{asset('images/'.$img[0])}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                @endfor
                                @for ($i=1; $i
                                < 2; $i++) @php $img = json_decode($promo[$i]->posters)
                                @endphp
                                <div class="sailBox " style="width: 49%">
                                    <a href="{{$promo[$i]->link}}">
                                        <div>
                                            <img class="add2" style="width:100%" src="{{asset('images/'.$img[0])}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="container" id="hidden2">
                        <div class="row">
                            <div class="row">
                                @foreach ($productsSal as $key => $product)
                                    @if ($key >= 15 && $key <30)
                                        <div class="productItem bottomProduct ml-3 mr-lg-3 mr-2">
                                            <div>
                                                <div class="saleNumber"  style="background-color: #072935;border-radius: 50%;color: white;height: 35px;width: 35px;padding: 5px 2px;float: right;margin-right: -14px;margin-top: -18px;">{{$product->sale}}%</div>
                                                @php $img = json_decode($product->posters)
                                                @endphp
                                                <a href="{{ route('AM.single',[$product->id,$curse]) }}" style="text-decoration: none" title="{{$product->titleAM}}">
                                                    <div class="ItemSquare" style=" background-image: url({{asset('images/'.$img[0])}});
                                                        background-size: contain;
                                                        height: 155px;
                                                        /* width: 161px; */
                                                        border: 1px solid #EDEBE6;
                                                        background-repeat: no-repeat;
                                                        background-position: 50%;"></div>
                                                    @if(strlen($product->titleAM) > 27)
                                                        <p style="color: black;" >{{mb_substr($product->titleAM,0,27).".."}}</p>
                                                    @else
                                                        <p style="color: black;" >{{$product->titleAM}}</p>
                                                    @endif
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
                    </div>
                </div>
            </div>
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
                                margin-left: 49px !important;
                            }
                            .filterButton{
                                margin-left:49px;
                            }
                        }
    </style>
@endsection
@section("script")
    <script src="{{ URL::asset('../js/script.js') }}"></script>
@endsection
