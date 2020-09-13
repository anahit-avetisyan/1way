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
{{--                    <a style="display: flex;align-items: center" href="{{route("RU.index",$curse)}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
{{--                    <a style="display: flex;align-items: center" href="{{route("EN.index",$curse)}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
                    </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                    <form action="{{route('AM.index',$curse)}}" role="search" method="get">
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
                    <form action="{{route('AM.index',$curse)}}" role="search" method="get">
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
                    <form action="{{route('AM.index',$curse)}}" role="search" method="get">
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
        <div class="row">
            <div class="col-sm-10" style="font-family: arialarmmedium"><h3>Անձնական էջ</h3></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <!--left col-->
                <div class="text-center" style="display: flex;flex-direction: column;align-items: center;">
                    <div class="media-left user-avatar-media-left">
                        <label class="user-avatar-label" for="avatar">
                            @if(Auth::user()->posters !== null)
                            @foreach(json_decode(Auth::user()->posters) as $poster)
                                <img id='button' src="{{asset('images/'.$poster)}}"  style="width: 150px" class="media-object">
                            @endforeach
                            @else
                            <img  style="width: 150px" id='button'  src="{{asset('images/avatarP.png')}}" class="media-object">
                            @endif
                        </label>
                    </div>
                    <?php  $user_id = Auth::user()->id ?>
                        <form action="{{route("profile.avatar",$user_id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input name="posters[]" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                                   id="product-posters" multiple> <span id='val'></span>


                            <button style="font-family: Arial-Arm-Regular;background-color: #0d0735;color: white;border: 0">Փոխել Նկարը</button>
                        </form>

                    <div>


                    </div>
                    </div>
                </div>
                </hr>
                <br>





                                <ul class="list-group">
                    <a href="{{route("AM.checkout-index",["id"=>$user_id,15867,"curse"=>$curse])}}">
                    <li class="list-group-item text-right"><span class="pull-left"><strong style="font-family: Arial-Arm-Regular;color:black">Զամբյուղ</strong></span> <i style="color: #0d0735;" class="fa fa-shopping-cart"></i></li>
                    </a>
                        <br>
                    <a href="{{route("AM.favorite",[$user_id,$curse])}}">
                    <li class="list-group-item text-right"><span class="pull-left"><strong style="font-family: Arial-Arm-Regular;color:black">Like</strong></span> <i style="color: #0d0735;" class="fa fa-heart"></i></li>
                    </a>
                        <br>
                    <li class="list-group-item text-right" style="padding: 4px">
                        <a style="    display: flex;justify-content: space-between;align-items: center;color: black" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link" style="color: #0d0735">
                            <strong style="font-family: Arial-Arm-Regular">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                                Ելք
                            </strong>
                            <i style="color:#0d0735;" class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>


            </div>
        <!--/col-3-->
            <style>
                @media only screen and (max-width: 768px) {
                    .list-group {
                       width: 81%;
                        margin: auto;
                    }
                }
            </style>
            <div class="col-sm-12 col-md-9 changeInfo">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="{{route("edit.profile",$user_id)}}" method="post" id="registrationForm">
                            @csrf
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name" style="font-family: Arial-Arm-Regular"><h4>Անուն</h4></label>
                                    <input type="text" class="form-control" name="name" id="first_name" value="{{(Auth::user()->name)}}" placeholder="{{(Auth::user()->name)}}" title="Փոձոխել Մուտքանուն">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name" style="font-family: Arial-Arm-Regular"><h4>Ազգանուն</h4></label>
                                    <input type="text" class="form-control" name="surname" value="{{(Auth::user()->surname)}}" id="last_name" placeholder="Մուտքագրեք Ազգանուն․․" title="Մուտքագրեք Ազգանուն․․">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone" style="font-family: Arial-Arm-Regular"><h4>Հեռախոսահամար</h4></label>
                                    <input type="text" class="form-control" name="number" value="{{(Auth::user()->number)}}" id="phone" placeholder="enter phone" title="Մուտքագրեք հեռախոսահամար․․">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email" style="font-family: Arial-Arm-Regular;"><h4>Էլ․ հասցե</h4></label>
                                    <span style="    border-radius: 5px;color: grey;display: flex;border: 1px solid #d0c3c3;align-items: center;padding: 0px 12px 22px;height: 36px;" title="Մուտքագրեք Էլ հասցե․․"><br>{{(Auth::user()->email)}}</span>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email" style="font-family: Arial-Arm-Regular"><h4>Հասցե</h4></label>
                                    <input type="text" class="form-control" value="{{(Auth::user()->address)}}"  name="address" id="location" placeholder="somewhere" title="Մուտքագրեք Հասցե․․">
                                </div>
                            </div>
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="password"><h4>Գաղտնաբառ</h4></label>--}}
{{--                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="Մուտագրեք գաղտնաբառ">--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button style="font-family: Arial-Arm-Regular;color: #98f2fe;background-color: #0d0735;" class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Հաստաատել</button>
                                </div>
                            </div>
                        </form>
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    </div>
    </div>

@endsection

@section("script")
    <script src="{{ URL::asset('../js/script.js') }}"></script>
    <script src="{{ URL::asset('../js/choosefile.js') }}"></script>
@endsection
