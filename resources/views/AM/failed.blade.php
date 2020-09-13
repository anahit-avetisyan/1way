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
        <div class="register mx-auto mt-4 mb-5" style="border: 1px solid #b2bfb5;width: 380px;height: 400px;padding:16px;border-radius: 2%;">
            <div style="width: 70px;height: 70px;border-radius: 50%;margin-top: -47px;margin-left: 132px;background-color: red;"><i style="color: white;padding: 15px 20px;font-size: 40px;" class="fa fa-times"></i></div>
            <div  style="margin-top: 80px;color:#073b4c;font-weight: bold;font-size: 22px;margin-left: 29px">Ձեր վճարումը ձախողվել է</div>
            <div class="mt-5" style="color: white;background-color:red;padding: 12px 84px;border-radius: 40px; ">Վերադառնալ խանութ</div>
        </div>
@endsection
@section("script")
    <script src="{{ URL::asset('../js/script.js') }}"></script>
@endsection
