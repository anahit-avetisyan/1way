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
                        {{--{{dd()}}--}}
                    </div>
                    <div class="languagesBox dropDown l_e_active">
                        <a style="display: flex;align-items: center" href="{{route("AM.contact",$curse)}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
{{--                        <a style="display: flex;align-items: center" href="{{route("RU.contact",$curse)}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
{{--                        <a style="display: flex;align-items: center" href="{{route("EN.contact",$curse)}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
                    </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                        <form action="{{route('AM.contact',$curse)}}" role="search" method="get">
                            @csrf
                            <button type="submit" name="curse"  value="0"><span style="color:#63c876;margin-right: 6px;font-size: 13px;font-family: currency;margin-top: 2px">֏</span>AMD</button>
                        </form>
                        <form action="{{route('AM.contact',$curse)}}" role="search" method="get">
                            @csrf
                            <button type="submit" name="curse"  value="1"><span style="color:#63c876;margin-right: 6px;font-size: 13px;font-family: currency;margin-top: 2px">₽</span>RUB</button>
                        </form>
                        <form action="{{route('AM.contact',$curse)}}" role="search" method="get">
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h3>ԿԱՊ ՄԵԶ ՀԵՏ</h3>
@endsection
