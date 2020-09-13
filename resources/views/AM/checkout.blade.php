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
                    <?php  $user_id = Auth::user()->id?>
                    <a style="display: flex;align-items: center" href="{{route('AM.checkout-index',[$user_id,"curse"=>$curse])}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
{{--                    <a style="display: flex;align-items: center" href="{{route('RU.checkout-index',[$user_id,"curse"=>$curse])}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
{{--                    <a style="display: flex;align-items: center" href="{{route('EN.checkout-index',[$user_id,"curse"=>$curse])}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
                    </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                    <form action="{{route('AM.checkout-index',[$user_id,"curse"=>$curse])}}" role="search" method="get">
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
                    <form action="{{route('AM.checkout-index',[$user_id,"curse"=>$curse])}}" role="search" method="get">
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
                    <form action="{{route('AM.checkout-index',[$user_id,"curse"=>$curse])}}" role="search" method="get">
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
        <div class="col-xl-6 col-lg-8 col-12 offset-lg-1 offset-xl-0">
            @if(count($check) > 0)
              @foreach($check as $chekout)
                        <div style="border-top: 1px solid #EDF2ED;" class="bigdiv">
                            <b><div class="mb-2 prodname1 " >{{$chekout->titleAM}}</div></b>
                            <div class="row " id="sessionDiv">
                                <div class="col-1 " style="margin-top: 36px;z-index: 5 ">
                                    <form action="{{route('checkout.destroyAM',[$chekout->id,15867,"curse"=>$curse])}}" method="post">
                                      @csrf
                                        <input type="checkbox" checked>
                                        <button style="background-color: transparent;outline: none;border: 0;margin-left:-7px ;">
                                            <i class="fa fa-trash " style="color: rgba(0,0,0,0.5); " aria-hidden="true "></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-4 col-sm-3 mb-2" style="margin-left: -3%; ">
                                  @foreach(json_decode($chekout->posters) as $poster)
                                <div class="imgprod" style="background-image: url({{asset('images/'.$poster)}})">
{{--                                    <img  src="{{asset('images/'.$poster)}}" alt=" ">--}}
                                </div>
                                      @endforeach
                                </div>
                                <div class="col-4" style="display: flex;align-items: center;flex-direction: column;">
                                    <span style="font-family: arialarmmedium">Քանակ</span>
                                    <div class="mt-4">
                                        <b><span style="font-family: Arial-Arm-Regular">1</span></b>
                                    </div>
                                </div>
                                <div class="col-3" style="display: flex;align-items: center;flex-direction: column">
                                    <span style="display: block;font-family: arialarmmedium">Գին</span>
                                    <b><div class="mt-4" style="display: inline-block;font-family: Arial-Arm-Regular" class="mt-4 price">
                                      @if($curse == 0)
                                      {{round($chekout->priceAM,-1 )}}դր․
                                  @elseif($curse == 1)
                                      {{round($chekout->priceRU,-1)}}руб
                                  @else
                                      {{round($chekout->priceEN,1)}} $
                                  @endif
                                        </div>
                                    </b>
                                </div>
                            </div>
                        </div>
                      @endforeach

                        <div class="row justify-content-between mt-2 ">
                            <div class="col-md-6 col-8 ">
                                <div class="row ">
                                    <input type="text " style="margin-right: 8px;height: 29px;margin-right: 5px; " class="col-8 " placeholder="Զեղչի կտրոն ">
                                    <span style="border: 1px solid black;"><i style="padding: 5px;" class="fa fa-check" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-4 col-4 ">
                                <span style="display: flex;justify-content: flex-end;font-family: Arial-Arm-Regular; ">Առաքում</span>
                                <b><span style="font-family: arialarmmedium;display: flex;justify-content: flex-end;margin-bottom: 5px; ">300դր․</span></b>
                                <span style="display: flex;justify-content: flex-end;font-family: Arial-Arm-Regular; ">Ընդհանուր</span>
                                <b><span style="font-family: arialarmmedium;color: blue;font-size: 25px;display: flex;justify-content: flex-end;white-space: nowrap ">
                                  @if($curse == 0)
                                      {{round($allPriceAM+300,-1)}} Դրամ
                                  @elseif($curse == 1)
                                      {{$allPriceRU+50}}       руб
                                  @else
                                      {{round($allPriceEN+1,1)}} $
                                  @endif
                                 </span></b>
                            </div>
                        </div>

                    </div>
        <div class="col-xl-3 col-md-5 col-10 offset-md-4 offset-xl-0">
            <div class="card mb-3 mb-xl-0" style="width: 253px">
                <div class="card-body ">
                    <b>
                        <p class="card-title">Առաքման տվյալներ</p>
                    </b>
                    <input type="text " placeholder="Անուն ">
                    <input type="text " class="mt-2 " placeholder="Ազգանուն ">
                    <input type="phone " class="mt-2 " placeholder="Հեռախոսահամար ">
                    <input type="text " class="mt-2 " placeholder="Քաղաք ">
                    <input type="text " class="mt-2 " placeholder="Հասցե ">
                </div>
                <div style="padding: 0px 22px; ">
                    <b>
                        <p class="card-title">Վճարման եղանակ</p>
                    </b>
                    <form>
                        <input type="radio" id="male" name="checkout" checked>
                        <label for="male" style="font-family: Arial-Arm-Regular;">Visa/MasterCard/ArCa</label><br>
                        <input type="radio" id="female" name="checkout">
                        <label for="female" style="font-family: Arial-Arm-Regular;">Idram</label><br>
                        <input type="radio" id="other" name="checkout">
                        <label for="other" style="font-family: Arial-Arm-Regular;">Կանխիկ</label><br>
                        <button class="mb-2 " style="font-family: Arial-Arm-Regular;color: white;background-color: blue;border: none;outline: none;float:right;padding: 8px 14px; ">Ընդունել</button>
                    </form>
                </div>
                @else
                        <div style="width: 332px;margin: auto;display: flex;justify-content: center;flex-direction: column;align-items: center">
                            <img src="{{URL::asset("images/poisk.png")}}" alt="" style="width: 100%">
                            <span style="font-weight: bold;font-size: 19px">Ձեր Զաբյուղը Դատարկ է</span>
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section("script")
    <script src="{{URL::asset("js/cart.js") }}"></script>
@endsection
