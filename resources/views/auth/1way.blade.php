@extends('layouts.footer')
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
                        <a href="{{route("AM.index",$curse)}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
                        {{--                    <a href="{{route("RU.index",$curse)}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
                        {{--                    <a href="{{route("EN.index",$curse)}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
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
        @section('content')
            <div class="col-md-10" style="display: flex;flex-direction:column;align-items: center;margin-top: -20px">
                <div class="flash-message" style="max-height: 100px; margin-bottom: 20px;">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <div class="alert alert-{{ $msg }}" style="width: 100%;margin-bottom: 0;display: flex; justify-content: space-between;align-items: center">
                                <span style="white-space: normal">{{ Session::get('alert-' . $msg) }}</span>
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-left: 20px">&times;</a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="card" style="width: 300px">
                    <div class="card-header" style="display: flex;justify-content: center;">Գրանցում</div>
                    <div class="card-body" style="display: flex;justify-content: center;">
                        <form method="POST" action="{{ route('register',$curse) }}">
                            @csrf

                            {{--                    <div class="form-group row" style="display: flex;flex-direction: column;align-items: flex-start;">--}}
                            {{--                        <label for="name" class=" col-form-label text-md-right">Անուն<span style="color: red">*</span></label>--}}

                            {{--                        <div>--}}
                            {{--                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                            {{--                            @error('name')--}}
                            {{--                            <span class="invalid-feedback" role="alert">--}}
                            {{--                                        <strong>{{ $message }}</strong>--}}
                            {{--                                    </span>--}}
                            {{--                            @enderror--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}

                            <div class="form-group row" style="display: flex;flex-direction: column;align-items: flex-start;">
                                <label for="email" class=" col-form-label text-md-right">E-Mail Հասցե<span style="color: red">*</span></label>
                                <input type="hidden" value="{{$nnn}}" name="xanut">
                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" style="display: flex;flex-direction: column;align-items: flex-start;">
                                <label for="password" class="col-form-label text-md-right">Գաղտնաբաոը<span style="color: red">*</span></label>

                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" style="display: flex;flex-direction: column;align-items: flex-start;">
                                <label for="password-confirm" class="col-form-label text-md-right">Կրկնել գաղտնաբաոը<span style="color: red">*</span></label>

                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn regBtn btn-primary" style="background-color: #0d0735;border-color: #0d0735;width: 100%;height: 47px;color: #98f2fe">
                                    Գրանցվել
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <br>
    <br>
@endsection
