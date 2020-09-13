<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lightslider.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0d0735">
    <title>1way.am</title>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row" style="align-items: center;justify-content: space-between;padding: 0 15px">
                    {{----------------------LOGO WEB--------------------}}
                    <img class="d-lg-none d-flex hamburder_menu" style="width: 63px;padding: 0 17px;" src="{{URL::asset("images/ska.png")}}" alt="">
                    @for ($i=0; $i< 1; $i++)
                        @php $imgg = json_decode($logo[$i]->posters)
                        @endphp
                        <a class="logo d-md-inline-block d-none" href="{{route("AM.index",$curse)}}"  title="1way.am">
                            <div>
                                <img style="width: 150px;" src="{{asset('images/'.$imgg[0])}}" alt="">
                            </div>
                        </a>
                    @endfor
                    {{----------------------LOGO MOBILE--------------------}}
                    @for ($i=1; $i< 2; $i++)
                        @php $imgg = json_decode($logo[$i]->posters)
                        @endphp
                        <a class="logo d-md-none d-inline-block" href="{{route("AM.index",$curse)}}"  title="1way.am">
                            <div>
                                <img style="width: 61px;" src="{{asset('images/'.$imgg[0])}}" alt="">
                            </div>
                        </a>
                    @endfor
                    {{---------------------- END LOGO MOBILE--------------------}}
                    <div class="partsContainer d-lg-flex d-none">
                        <a href="{{route("AM.index",$curse)}}">
                            <div>
                                <div>
                                    <img src="{{URL::asset("images/home.icon.png")}}" >
                                </div>
                                <span>Գլխավոր</span>
                            </div>
                        </a>
                        <a href="{{route("AM.about",$curse)}}">
                            <div>
                                <div>
                                    <img src="{{URL::asset("images/about.png")}}" >
                                </div>
                                <span>Մեր մասին</span>
                            </div>
                        </a>
                        <a href="{{route("AM.contact",$curse)}}">
                            <div>
                                <div>
                                    <img src="{{URL::asset("images/contact.png")}}" >
                                </div>
                                <span>Կապ մեզ հետ</span>
                            </div>
                        </a>
                    </div>
                    {{--        <i style="font-size:22px;color: #98f2fe;" class="fas fa-search d-none d-md-inline-block d-lg-none mobileSearch"></i>--}}
                    <form
                        class="form-inline d-lg-inline-block d-none headerForm"
                        action="{{route('AM.search',$curse)}}"
                        role="search"
                        method="get"
                        style="display: inline-block;">
                        <div class="input-group input-group-sm searchContainer">
                            <input style="border: 0;outline: none;border-radius: 0"
                                   class="form-control form-control-navbar headerSearch"
                                   type="search"
                                   name="search"
                                   placeholder="Որոնում"
                                   aria-label="Search"
                            />
                            <div style="display: flex;align-items: center;padding: 4px;background-color: #3a326d"><button style="outline: none;border: 0;background-color: transparent"><i style="color: #98f2fe;" class="fa fa-search"></i></button></div>
                        </div>
                    </form>
                    @guest
                        <a class="signIn d-none d-md-none d-lg-flex d-xl-none" style="font-size: 22px" href="{{route('login.login',$curse)}}">
                            <i class="fa fa-sign-in-alt"></i>
                        </a>
                        <div class="d-inline-block">
                            <a class="signIn  d-flex d-lg-none d-xl-flex" style="font-size: 22px" href="{{route('login.login',$curse)}}" >
                                <img src="{{URL::asset("images/user_page.png")}}" >
                                <h6>Մուտք/Գրանցվել</h6>
                                <div class="userText" style="display: flex;justify-content: center;flex-direction: column;font-size: 14px;align-items: center">
                                    <span>Մուտք</span>
                                    <span>Գրանցվել</span>
                                </div>

                            </a>
                        </div>
                    @else
                        @isset(Auth::user()->id)
                            <?php  $user_id = Auth::user()->id?>
                        @endisset
                        <a href="{{route("profile",5411818949,$user_id,518444,"dfsdf",5478489)}}" style="color:#98f2fe">
                            <i style="color:#98f2fe" class="fa fa-user"></i>
                            &nbsp;</a>
                    @endguest

                    @if (isset (Auth::user()->id))
                        <?php $user =  Auth::user()->id ?>
                        <a class="shoppingCart d-none d-md-inline-block d-lg-none"  href="{{route("AM.checkout-index",['id'=>$user,"curse"=>$curse])}}" title="Զամբյուղ">
                            <div style="background-color:#231d4a;padding: 5px">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                        </a>
                    @else
                        <a  class="shoppingCart d-none d-md-inline-block d-lg-none" style="background-color:#231d4a;padding: 5px" href="{{route("login.login",$curse)}}" title="Զամբյուղ"> <div>
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                        </a>
                    @endif
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

                                <div class="cont fade">
                                    <div class="languageContainer">
                                    </div>
                                    <div class="exchangeContainer">
                                        <div class="exchange">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
<div class="leftMenu">
    <div class="modalMenuTop">

        <div class="partsContainer" style="display: flex;margin-top: 12px;width: 90%;justify-content: space-around">
            <a href="{{route("AM.index",$curse)}}" style="display: contents;text-decoration: none">
                <div class="menuIcon">
                    <img   src="{{URL::asset("images/home.png")}}" >
                    <span style="color: #007bff;">Գլխավոր</span>
                </div>
            </a>
            <a href="{{route("AM.about",$curse)}}" style="display: contents;text-decoration: none">
                <div class="menuIcon">
                    <img   src="{{URL::asset("images/about.png")}}" >
                    <span>Մեր մասին</span>
                </div>
            </a>
            <a href="{{route("AM.contact",$curse)}}" style="display: contents;text-decoration: none">
                <div class="menuIcon" >
                    <img  src="{{URL::asset("images/contact.icon.png")}}" >
                    <span>Կապ մեզ հետ</span>
                </div>
            </a>
            <div>
                <i style="margin-left: -6px" class="fa fa-times modalClose" aria-hidden="true"></i>
            </div>
        </div>

    </div>
    <div class="langModal hidden2">
        <div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios" checked>
                <label class="form-check-label" for="materialGroupExample1"><div><img src="{{URL::asset("images/armenia.png")}}">AM</div></label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="materialGroupExample2" name="groupOfMaterialRadios">
                <label class="form-check-label" for="materialGroupExample2"><div><img src="{{URL::asset("images/russia.png")}}">RU</div></label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="materialGroupExample3" name="groupOfMaterialRadios">
                <label class="form-check-label" for="materialGroupExample3"><div><img src="{{URL::asset("images/uk.png")}}">EN</div></label>
            </div>
        </div>
    </div>
    <div class="exchangeModal hidden2">
        <div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="a" name="groupOfMaterialRadios" checked>
                <label class="form-check-label" for="a"><div><span style="color:#63c876;margin-right: 6px;font-size: 18px;font-family: currency;">֏</span>AMD</div></label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="b" name="groupOfMaterialRadios">
                <label class="form-check-label" for="b"><div><span style="color:#63c876;margin-right: 6px;font-size: 18px;font-family: currency;">₽</span>RUB</div></label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="c" name="groupOfMaterialRadios">
                <label class="form-check-label" for="c"><div><span style="color:#63c876;margin-right: 6px;font-size: 18px;font-family: currency;">$</span>USD</div></label>
            </div>
        </div>
    </div>
    <div class="container_first">
        <div class="languageDropdown">
            <div>
                <img src="{{URL::asset("images/armenia.png")}}" >Հայ
            </div>
            <i class="fa fa-angle-down"></i></div>
        <div class="currencyDropdown">
            <div>
                <span style="color:#63c876;margin-right: 6px;font-size: 20px;font-family: currency;">֏</span>AMD
            </div>
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
    {{--    <div class="leftMenuFlag mb-2 mt-3" style="display: flex;justify-content: space-around">--}}
    {{--        <a style="display: flex;align-items: center;margin-left: 28px" href="{{route("AM.index",$curse)}}"><img style="width: 35px;justify-content: center" src="{{URL::asset("images/flags/armenia.png")}}"  /></a>--}}
    {{--        <a style="display: flex;align-items: center;margin-right: 2px" href="{{route("RU.index",$curse)}}"><img style="width: 35px;justify-content: center" src="{{URL::asset("images/flags/russia.png" )}}" /></a>--}}
    {{--        <a style="display: flex;align-items: center;margin-right: 88px" href="{{route("EN.index",$curse)}}"><img style="width: 35px;justify-content: center" src="{{URL::asset("images/flags/united-states.png")}}" /></a>--}}
    {{--    </div>--}}
    {{--    <div class="leftMenuFlag " style="display: flex;justify-content: space-around">--}}
    {{--        <a style="display: flex;align-items: center;margin-left: 28px" href="{{route("AM.index",$curse)}}"><span style="color:#63c876;margin-right: 6px;font-size: 18px;font-family: currency;margin-top: 2px">֏</span>AMD</a>--}}
    {{--        <a style="display: flex;align-items: center;margin-right: 2px" href="{{route("RU.index",$curse)}}"><span style="color:#63c876;margin-right: 6px;font-size: 18px;font-family: currency;margin-top: 2px">₽</span>RUB</a>--}}
    {{--        <a style="display: flex;align-items: center;margin-right: 88px" href="{{route("EN.index",$curse)}}"><span style="color:#63c876;margin-right: 6px;font-size: 18px;font-family: currency;margin-top: 2px">$</span>USD</a>--}}
    {{--    </div>--}}


    <div class="modalMenuContentBox">
        <div class="mMCont">
            @foreach($categoriesArr as $categ)
                <div class="modalMenuItem" style="width: 99%;">
                    <div class="modalMenuBtn" style="width:100% "
                         title="{{$categ['category']->titleAM}}">&#128095;{{mb_substr($categ['category']->titleAM,0,12).".."}}&nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="modalItem">
                        <div id="customers">
                            @foreach($categ['subcategory'] as $sub_category)
                                <a href="{{route('AM.shop-id',[$sub_category->id,$curse])}}">{{$sub_category->titleAM}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>





<div class="container mt-3 mt-md-4 productContainer">
    <div class="row">
        <div class="col-lg-2 d-none d-lg-block categoryHover" style="height: 300px!important;margin-top: -8px">
            <nav class="nav">
                @foreach($categoriesArr as $categ)
                    <div class="items">
                        <div class="itemName">
                            <a style="display: flex;text-decoration: none" href="{{route('AM.shop-id2',["id"=>$categ['category']->id,"curse"=>$curse])}}">
                                <div style="display: flex;width:100%">
                                    <button class="dropbtn" style="white-space: nowrap" title="">&#128095;&nbsp;
                                        {{mb_substr($categ['category']->titleAM,0,12).".."}}

                                    </button>
                                    <i class="fa fa-angle-right" style="margin-top: 5px" aria-hidden="true"></i>
                                </div>
                            </a>

                        </div>
                        <div class="subMenu">
                            @foreach($categ['subcategory'] as $sub_category)
                                <a href="{{route('AM.shop-id',[$sub_category->id,$curse])}}">
                                    <div class="subItems">{{$sub_category->titleAM}}</div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </nav>
        </div>




        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Գաղտնաբառի վերականգնում') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Էլ․ հասցե') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ստանալ վերականգնելու հղումը') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div></div>
</div>
<footer>
    <div class="footerDiv">
        <div class="firstDiv">
            <div class="footerLogo">
                <i class="fab fa-facebook-square"></i>
                @for ($i=0; $i< 1; $i++)
                    @php $imgg = json_decode($logo[$i]->posters)
                    @endphp
                    <a class="logo d-md-inline-block d-none" href="{{route("AM.index",$curse)}}"  title="1way.am">
                        <div>
                            <img style="width: 150px;" src="{{asset('images/'.$imgg[0])}}" alt="">
                        </div>
                    </a>
                @endfor
                @for ($i=1; $i< 2; $i++)
                    @php $imgg = json_decode($logo[$i]->posters)
                    @endphp
                    <a class="logo d-md-none d-inline-block" href="{{route("AM.index",$curse)}}"  title="1way.am">
                        <div>
                            <img style="width: 61px;" src="{{asset('images/'.$imgg[0])}}" alt="">
                        </div>
                    </a>
                @endfor
            </div>
            <div class="numberOne">
                <i class="fab fa-instagram"></i>
                <div>
                    <span>Հայաստանում N1 առցանց</span>
                    <span>առևտրի հարթակը</span>
                </div>
            </div>
        </div>
        <div class="secondDiv">
            <span class="contact">Կապ մեզ հետ</span>
            <div class="phone">
                <i class="fas fa-phone-square-alt"></i><span>+374 99 99 99 99</span>
            </div>
            <div>
                <i class="fas fa-envelope-square"></i><span>1way@gmail.com</span>
            </div>
        </div>
    </div>
</footer>

<div class="navbar d-md-none d-flex bottomMenu" style="transition:0.3s;background-color: #0d0735;">
    <div class="bottomSearchArea">
        <form
            class="form-inline headerForm bottomForm"
            action="{{route('AM.search',$curse)}}"
            role="search" method="get">
            <div class="input-group input-group-sm searchContainer">
                <input style="border: 0;outline: none;border-radius: 0"
                       class="form-control form-control-navbar headerSearch"
                       type="search"
                       name="search"
                       placeholder="Որոնում"
                       aria-label="Search"/>
                <div style="display: flex;align-items: center;padding: 2px;background-color: #3a326d"><button style="outline: none;border: 0;background-color: transparent"><i style="color: #98f2fe;" class="fa fa-search"></i></button></div>
            </div>
        </form>
    </div>
    <a href="{{route("AM.ppp",$curse)}}">
        <button style="outline: none;border: 0;background-color: transparent;">
            <img  style="width: 30px" src="{{URL::asset("images/cart1.png")}}" alt="">
        </button>
    </a>
@if(Auth::user() != null)
    <!--        --><?php // $user_id = Auth::user()->id?>
        <a href="{{route("AM.checkout-index",["id"=>$user_id,15867,"curse"=>$curse])}}">
            <button style="outline: none;border: 0">
                <img  style="width: 30px" src="{{URL::asset("images/cart.png")}}" alt="">
            </button>
        </a>
    @else
        <a href="{{route("login.login",$curse)}}">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img  style="width: 30px" src="{{URL::asset("images/cart.png")}}" alt="">
            </button>
        </a>
    @endif
    <div class="bottomSearchButton">
        <img style="width: 30px"  src="{{URL::asset("images/search.png")}}" alt="">
    </div>
    @if(Auth::user() != null)

        <a href="{{route("AM.favorite",[$user_id,$curse])}}">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img style="width: 30px"  src="{{URL::asset("images/like-heart.png")}}" alt="">
            </button>
        </a>
    @else
        <a href="{{route("login.login",$curse)}}">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img style="width: 30px"  src="{{URL::asset("images/like-heart.png")}}" alt="">
            </button>
        </a>
    @endif
    @if(Auth::user() != null)
        <a href="{{route("profile",5411818949,$user_id,518444,"dfsdf",5478489)}}" >
            <button style="outline: none;border: 0;background-color: transparent;">
                <img  style="width: 30px" src="{{URL::asset("images/avatar.png")}}" alt="">
            </button>
        </a>
    @else
        <a href="{{route("login.login",$curse)}}">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img  style="width: 30px" src="{{URL::asset("images/avatar.png")}}" alt="">
            </button>
        </a>
    @endif
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
@yield("script")
<script src="https://kit.fontawesome.com/7e743dcdbd.js" crossorigin="anonymous"></script>
<script src="{{ URL::asset('../js/navbars.js') }}"></script>
</html>
