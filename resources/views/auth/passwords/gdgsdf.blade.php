<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
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
{{--                    @for ($i=0; $i< 1; $i++)--}}
{{--                        @php $imgg = json_decode($logo[$i]->posters)--}}
{{--                        @endphp--}}
                        <a class="logo d-md-inline-block d-none" href=" "  title="1way.am">
                            <div>
                                <img style="width: 150px;" src="{{asset('images/42801way site logo.png')}}" alt="">
                            </div>
                        </a>
{{--                    @endfor--}}
                    {{----------------------LOGO MOBILE--------------------}}
{{--                    @for ($i=1; $i< 2; $i++)--}}
{{--                        @php $imgg = json_decode($logo[$i]->posters)--}}
{{--                        @endphp--}}
                        <a class="logo d-md-none d-inline-block" href=" "  title="1way.am">
                            <div>
                                <img style="width: 61px;" src="{{asset('images/8667logo mobile.png')}}" alt="">
                            </div>
                        </a>
{{--                    @endfor--}}
                    {{---------------------- END LOGO MOBILE--------------------}}
                    <div class="partsContainer d-lg-flex d-none">
                        <a href="#">
                            <div>
                                <div>
                                    <img src="{{URL::asset("images/home.icon.png")}}" >
                                </div>
                                <span>Գլխավոր</span>
                            </div>
                        </a>
                        <a href="#">
                            <div>
                                <div>
                                    <img src="{{URL::asset("images/info.icon.png")}}" >
                                </div>
                                <span>Մեր մասին</span>
                            </div>
                        </a>
                        <a href="#">
                            <div>
                                <div>
                                    <img src="{{URL::asset("images/contact.icon.png")}}" >
                                </div>
                                <span>Կապ մեզ հետ</span>
                            </div>
                        </a>
                    </div>
                            <i style="font-size:22px;color: #98f2fe;" class="fas fa-search d-none d-md-inline-block d-lg-none mobileSearch"></i>
                    <form
                        class="form-inline d-lg-inline-block d-none headerForm"
                        action=" "
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
                            <div style="display: flex;align-items: center;padding: 9px;background-color: #3a326d"><i style="color: #98f2fe;" class="fa fa-search"></i></div>
                        </div>
                    </form>
                    @guest
                        <a class="signIn d-none d-md-flex d-lg-none" style="font-size: 22px" href="{{route('login')}}">
                            <i class="fa fa-sign-in-alt"></i>
                        </a>
                        <div class="d-lg-inline-block d-none">
                            <a class="signIn d-none d-md-flex" style="font-size: 22px" href="{{route('login')}}">
                                <img src="{{URL::asset("images/user.icon.png")}}" >
                                <h6>Մուտք/Գրանցվել</h6>
                            </a>
                        </div>
                    @else
                        @isset(Auth::user()->id)
                            <?php  $user_id = Auth::user()->id?>
                        @endisset
                        <a href="{{route("profile",5411818949,$user_id,518444,"dfsdf",5478489)}}" style="color:#98f2fe">
                            <i style="color:#98f2fe" class="fa fa-user"></i>
                            &nbsp;{{mb_substr( Auth::user()->name,0,7) }}</a>
                    @endguest

                    @if (isset (Auth::user()->id))
                        <?php $user =  Auth::user()->id ?>
                        <a class="shoppingCart d-none d-md-inline-block d-lg-none"  href="{{route("AM.checkout-index",['id'=>$user,"curse"=>$curse])}}" title="Զամբյուղ">
                            <div>
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                        </a>
                    @else
                        <a  class="shoppingCart d-none d-md-inline-block d-lg-none" href="{{route("login")}}" title="Զամբյուղ"> <div>
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                        </a>
                    @endif
                    @yield("lang_curse")
                </div>
            </div>
        </div>
    </div>
    </div>
</header>


<div class="leftMenu">
    <div class="modalMenuTop">
        <div class="partsContainer" style="display: flex;align-items: center">
            <a href="#" style="display: contents">
                <div style="margin-right: 3px">
                    <img src="{{URL::asset("images/home.icon.png")}}" >
                    <span style="background-color: #231d4a;padding: 10px 32px">Գլխավոր</span>
                </div>
            </a>
            <a href="#" style="display: contents">
                <div style="margin-right: 3px">
                    <img src="{{URL::asset("images/info.icon.png")}}" >
                    <span style="background-color: #231d4a;padding: 10px 32px">Մեր մասին</span>
                </div>
            </a>
            <a href="#" style="display: contents">
                <div style="margin-right: 3px">
                    <img src="{{URL::asset("images/contact.icon.png")}}" >
                    <span style="background-color: #231d4a;padding: 10px 32px">Կապ մեզ հետ</span>
                </div>
            </a>
            <i style="margin-left: -23px" class="fa fa-times modalClose" aria-hidden="true"></i>
        </div>

    </div>
{{--    <div class="modalMenuContentBox">--}}
{{--        <div class="mMCont">--}}
{{--            @foreach($categoriesArr as $categ)--}}
{{--                <div class="modalMenuItem" style="width: 99%;">--}}
{{--                    <div class="modalMenuBtn" style="width:100% "--}}
{{--                         title="{{$categ['category']->titleAM}}">&#128095;{{mb_substr($categ['category']->titleAM,0,12).".."}}&nbsp;--}}
{{--                        <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                    </div>--}}
{{--                    <div class="modalItem">--}}
{{--                        <div id="customers">--}}
{{--                            @foreach($categ['subcategory'] as $sub_category)--}}
{{--                                <a href="{{route('AM.shop-id',[$sub_category->id,$curse])}}">{{$sub_category->titleAM}}</a>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
</div>





<div class="container mt-3 mt-md-4 productContainer">
    <div class="row">
{{--        <div class="col-lg-2 d-none d-lg-block" style="height: 300px!important;margin-top: -8px">--}}
{{--            <div>--}}
{{--                @foreach($categoriesArr as $categ)--}}
{{--                    <div class="dropdownCategory dropdown" style="width:97%">--}}
{{--                        <a href="{{route('AM.shop-id2',["id"=>$categ['category']->id,"curse"=>$curse])}}">--}}
{{--                            --}}{{--                            {{dd($categ['category']->id)}}--}}
{{--                            <button class="dropbtn" style="text-align:start;width: 100%;white-space: nowrap"--}}
{{--                                    title="{{$categ['category']->titleAM}}">&#128095;{{mb_substr($categ['category']->titleAM,0,12).".."}}&nbsp;--}}
{{--                                <i class="fa fa-angle-right" style="float:right;margin-top: 5px" aria-hidden="true"></i>--}}
{{--                            </button></a>--}}
{{--                        <div class="dropdown-content">--}}
{{--                            <table id="customers">--}}
{{--                                @foreach($categ['subcategory'] as $sub_category)--}}
{{--                                    <tr>--}}
{{--                                        <td><a href="{{route('AM.shop-id',[$sub_category->id,$curse])}}">{{$sub_category->titleAM}}</a></td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}




        @yield("content")





    </div>
</div>
@foreach($footer as $footers)
    <div class="container-fluid mt-5">
        <div class="row" style="background-color: #0d0735;text-align: center;color: white;font-size: 10px;">
            <div class="col-6">
                <p style="margin: 5% 0;"><a style="color: white;" href="{{$footers->fbLink}}"><i class="{{$footers->fbIcon}}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;www.facebook.com </a> </p>
                <p> <a style="color: white;" href="{{$footers->instagramLink}}"> <i class="{{$footers->instagramIcon}}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{$footers->footerTextAM}} </a> </p>
            </div>
            <div class="col-6">
                <p style="margin: 5% 0;">{{$footers->contactNameAM}}</p>
                @foreach($contact as $contacts)
                    <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{$contacts->phone}}</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{$contacts->email}}</p>
                @endforeach
            </div>
            <div class="col-12">
                <p>{{$footers->copyright}} | Կայքը պատրաստվել է <a href="{{$footers->link}}">{{$footers->linkName}}</a> ընկերության կողմից </p>
            </div>
        </div>
    </div>
@endforeach
<div class="navbar d-md-none d-flex bottomMenu" style="transition:0.3s;background-color: #0d0735;">
    <div class="bottomSearchArea">
        <form
            class="form-inline headerForm bottomForm"
            action=" "
            role="search"
            method="get">
            <div class="input-group input-group-sm searchContainer">
                <div class="input-group-append searchButton">
                    <button class="btn btn-navbar" type="submit">
                        <i style="color: #98f2fe;" class="fas fa-search"></i>
                    </button>
                </div>
                <input
                    class="form-control form-control-navbar headerSearch"
                    type="search"
                    name="search"
                    placeholder="Որոնում"
                    aria-label="Search"
                />
            </div>
        </form>
    </div>
    <a href=" ">
        <button style="outline: none;border: 0;background-color: transparent;">
            <img  style="width: 30px" src="{{URL::asset("images/home.png")}}" alt="">
        </button>
    </a>
@if(Auth::user() != null)
    <!--        --><?php // $user_id = Auth::user()->id?>
        <a href=" ">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img  style="width: 30px" src="{{URL::asset("images/cart.png")}}" alt="">
            </button>
        </a>
    @else
        <a href="{{route("login")}}">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img  style="width: 30px" src="{{URL::asset("images/cart.png")}}" alt="">
            </button>
        </a>
    @endif
        <a href="">
            <div class="bottomSearchButton">
                <img style="width: 30px"  src="{{URL::asset("images/search.png")}}" alt="">
            </div>
        </a>
    @if(Auth::user() != null)

        <a href="">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img style="width: 30px"  src="{{URL::asset("images/like-heart.png")}}" alt="">
            </button>
        </a>
    @else
        <a href="{{route("login")}}">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img style="width: 30px"  src="{{URL::asset("images/like-heart.png")}}" alt="">
            </button>
        </a>
    @endif
    @if(Auth::user() != null)

        <a href="">
            <button style="outline: none;border: 0;background-color: transparent;">
                <img  style="width: 30px" src="{{URL::asset("images/avatar.png")}}" alt="">
            </button>
        </a>
    @else
        <a href="{{route("login")}}">
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
<script src="https://kit.fontawesome.com/7e743dcdbd.js" crossorigin="anonymous"></script>
<script src="{{ URL::asset('../js/navbars.js') }}"></script>
</html>
