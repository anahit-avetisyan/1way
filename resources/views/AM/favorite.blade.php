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
                    <?php $user =  Auth::user()->id ?>
                    <a style="display: flex;align-items: center" href="{{route("AM.favorite",[$user,$curse])}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
                    </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                    <form action="{{route('AM.favorite',[$user,$curse])}}" role="search" method="get">
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
                    <form action="{{route('AM.favorite',[$user,$curse])}}" role="search" method="get">
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
                    <form action="{{route('AM.favorite',[$user,$curse])}}" role="search" method="get">
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
        <div class="col-lg-10 col-12 " style="padding-left:25px">
            @if(count($favorite) > 0)
            @foreach( $favorite as $favo)
                <div style="border-top: 1px solid #edf2ed;">
                    <b><div class="mb-2">{{$favo->titleAM}}</div></b>
                    <div class="row">
                        <div class="ml-2 ml-sm-0" style="margin-top: 37px;z-index: 5">
                            <input type="checkbox" checked>
                            <form action="{{route('destroyFavorite',[$favo->id,"curse"=>$curse])}}" method="post">
                                @csrf
                                <button style="background-color: transparent;outline: none;border: 0;margin-left:-7px ;">
                                    <i class="fa fa-trash " style="color: rgba(0,0,0,0.5); " aria-hidden="true "></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-md-3 col-lg-2 col-5 mb-2  imageDiv">
                            <div>
                                @foreach(json_decode($favo->posters) as $poster)
                                    <div class="imgprod" style="background-image: url({{asset('images/'.$poster)}})">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-2 col-md-3 col-lg-4 quan" style="flex-direction: column;display: flex;align-items: center;">
                            <span class="mb-4">Քանակ</span>
                            <span>1</span>
                        </div>
                        <div class="col-md-2 col-4" style="flex-direction: column;display: flex;align-items: center;">
                            <span class="mb-4">Գին</span>
                            <b class="price"><span>15000 դրամ</span></b>
                        </div>
                    </div>
                </div>
            @endforeach
                <form style="display: flex;justify-content: end;width: 82%;" action="{{route('AM.favoriteCheck',[$favorite[0]->product_id,$user,$curse])}}" method-="get">
                    <div class="col-md-2 col-lg-3 col-12 offset-sm-1 offset-lg-0 mb-2 mb-lg-0 cartText ">
                        <?php $user_id = Auth::user()->id ?>
                        <button class="butn">Ավելացնել Զամբյուղ</button>
                    </div>
                </form>
                @else
                    <div style="width: 332px;margin: auto;display: flex;justify-content: center;flex-direction: column;align-items: center">
                        <img src="{{URL::asset("images/poisk.png")}}" alt="" style="width: 100%">
                        <span style="font-weight: bold;font-size: 19px">Հավանած Ապրանք Չունեք</span>
                    </div>
                @endif
            </div>
        @endsection
        @section("script")
            <script src="{{ URL::asset('../js/script.js') }}"></script>
        @endsection
