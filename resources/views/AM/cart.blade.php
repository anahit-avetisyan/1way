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
                    <a style="display: flex;align-items: center" href="{{route("AM.cart",[$check->id,"curse"=>$curse,"quantity"=>$quantity])}}"><img src="{{URL::asset("images/flags/armenia.png")}}"  /> AM</a>
{{--                    <a style="display: flex;align-items: center" href="{{route("RU.cart",[$check->id,"curse"=>$curse,"quantity"=>$quantity])}}"><img src="{{URL::asset("images/flags/russia.png" )}}" /> RU</a>--}}
{{--                    <a style="display: flex;align-items: center" href="{{route("EN.cart",[$check->id,"curse"=>$curse,"quantity"=>$quantity])}}"><img src="{{URL::asset("images/flags/united-states.png")}}" /> EN</a>--}}
                    </div>
                </div>
                <div class="exchangeContainer">
                    <div class="exchange">

                    </div>
                    <div class="exchangesBox dropDown l_e_active">
                    <form class="formaS" action="{{route('AM.cart',[$check->id,"curse"=>$curse,"quantity"=>$quantity])}}" role="search" method="get">
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
                    <form class="formaS" action="{{route('AM.cart',[$check->id,"curse"=>$curse,"quantity"=>$quantity])}}" role="search" method="get">
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
                    <form class="formaS" action="{{route('AM.cart',[$check->id,"curse"=>$curse,"quantity"=>$quantity])}}" role="search" method="get">
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
            <div class="col-xl-6 col-lg-8 col-12 ">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                <div style="border-top: 1px solid #EDF2ED;" class="bigdiv">

                    <b><div class="mb-2 prodname1 ">{{mb_substr($check->titleAM,0,27).".."}}</div></b>
                    <div style="display:none;">
                      <input id = "size" type="text"  name="size" value="{{$size}}">
                    </div>
                    <div style="display:none;">
                      <input id = "color" type="text"  name="color" value="{{$color}}">
                    </div>
                    <div class="row " id="sessionDiv">

                        <div class="col-md-3 col-4 mb-2 ">
                          @php $img = json_decode($check->posters)@endphp
                          <div class="" style="display:none">
                            <input type="text" name="posters" value="{{$img[0]}}">
                          </div>
                            <div style="width: 120px;height: 120px">
                                <img class="imgprod" name="posters[]" value="{{$img[0]}}" src="{{asset('images/'.$img[0])}}" " alt=" ">
                            </div>
                            {{-- {{ dd($img) }} --}}
                        </div>
                        <div class="col-2 col-md-4 offset-md-1">
                            <span class="ml-3">Քանակ</span>
                            <div class="mt-4 ml-5">
                              <div style="display:none;">
                                <input id = "inp" type="text"  name="quantity" value="{{$quantity}}">
                              </div>
                                <b><span > {{ $quantity}}</span></b>


                            </div>
                        </div>
                        <div class="col-md-3 col-3 offset-1 offset-md-0 ">
                            <span style="display: block;margin-left:16% ">Գին</span>
                            <b><span><span style="display: inline-block;white-space: nowrap" class="mt-4 price">
                              @if($curse == 0)
                                  {{round($finelPriceAM * $quantity,-2)}} Դրամ
                                  @elseif($curse == 1)
                                  {{round($finelPriceRU * $quantity,-1)}}       руб
                                  @else
                                  {{round($finelPriceEN * $quantity)}} $
                                  @endif
                            </span><span style="display: none;" class="mt-4 price1"></span></span></b>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mt-2 ">
                    <div class="col-md-6 col-8 ">
                        <div class="row ">
                            <input type="text " style="margin-right: 8px;height: 29px;margin-right: 5px; " class="col-8 promo-code "   placeholder="Զեղչի կտրոն ">
                            <span style="border: 1px solid black;"><i style="padding: 5px;" class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-4 col-4 ">
                        <span style="display: flex;justify-content: flex-end; ">Առաքում</span>
                        <b><span style="display: flex;justify-content: flex-end;margin-bottom: 5px; ">
                          @if ($curse == 0)
                            300դր․
                          @elseif ($curse == 1)
                            50руб.
                          @elseif ($curse == 2)
                            1$
                          @endif
                          </span>
                        </b>
                        <span style="display: flex;justify-content: flex-end; ">Ընդհանուր</span>
                        <b><span style=" color:#0d0735;font-size: 25px;display:flex;justify-content:flex-end;white-space: nowrap">
                          @if($curse == 0)
                              {{round($finelPriceAM * $quantity + 300,-2)}} Դրամ
                              @elseif($curse == 1)
                              {{round($finelPriceRU * $quantity + 50,-1)}}       руб
                              @else
                              {{round($finelPriceEN * $quantity + 1)}} $
                              @endif
                        </span></b>
                        <div class="" style="display:none;">
                          <input type="text" id="finelPriceAM" name="finelPriceAM" value="{{round($finelPriceAM * $quantity + 300,-2)}}">
                        </div>
                    </div>
                </div>
                </div>
        <div class="flash-message-default error-success-toast" style="max-height: 100px;margin-left: 4%">
            <div    style="background-color: #0d0735;color: #98f2fe;position: absolute;margin-left: auto;
margin-right: auto;
left: 0;
right: 0;width:50%;height: 43px;z-index: 1;display: flex;margin-top: 5px;align-items: center;justify-content: center;opacity: 1;">
                <span class="mssage-back" style="white-space: normal;position: absolute;padding-top: 2px;"></span>
                {{--                                            <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #98f2fe;">&times;</a>--}}
            </div>

        </div>
            <div class="col-xl-3 col-md-5 col-10">

                <div class="card mb-3 mb-xl-0 ">
                        <div class="card-body ">
                            <b> <p class="card-title ">Առաքման տվյալներ</p></b>
                            <input type="text" name="name" class="name nameOfuser " placeholder="Անուն ">
                            <span class="nameError " style="color: red; "></span>
                            <input type="text" name="surname" class="mt-2 surname surnameOfuser " placeholder="Ազգանուն ">
                            <span class="surnameError " style="color: red; "></span>
                            <input type="text" name="phone" class="mt-2 num phone-number" value="+374" placeholder="Հեռախոսահամար ">
                            <span class="numError " style="color: red; "></span>
                            <input type="text" name="city" class=" mt-2 city userCity " placeholder="Քաղաք ">
                            <span class="cityError " style=" color: red; "></span>
                            <input type="text" name="address" class="mt-2 address userAddress " placeholder=" Հասցե ">
                            <span class="addressError " style="color: red; "></span>
                        </div>
                        <div style=" padding: 0px 22px; ">
                            <b> <p  class="card-title ">Վճարման եղանակ</p></b>
                            <input type="radio" name="payment" value="0" id="male" name="checkout" class="checkout-input" checked>
                            <label for="male">Visa/MasterCard/ArCa</label><br>
                            <input type="radio" name="payment" value="1" id="female" class="checkout-input" name="checkout">
                            <label for="female">Idram</label><br>
                            <input type="radio" name="payment" value="2" id="other" class="checkout-input" name="checkout">
                            <label for="other">Կանխիկ</label><br>

                        </div>
                    <div class="cash-form-submit"> <button style="width:'fit-content';color: white;background-color: blue;border: none;outline: none;float:right;padding: 8px 14px; ">submit</button></div>

                    <form class="ameria-form-submit" action="https://money.idram.am/payment.aspx" method="POST">
                        <input type="hidden" name="EDP_LANGUAGE" value="AM">
                        <input type="hidden" name="EDP_REC_ACCOUNT" value="110000439">
                        <input type="hidden" name="EDP_DESCRIPTION" value="{{$check->descriptionAM}}">
                        <input type="hidden" name="EDP_AMOUNT" value="{{round($finelPriceAM * $quantity + 300,-2)}}">
                        <input type="hidden" name="EDP_BILL_NO" value=" ">
                        <input type="submit" style="color: white;background-color: blue;border: none;outline: none;float:right;padding: 8px 14px; " value="submit">
                    </form>
                    <form class="idram-form-submit" action="https://money.idram.am/payment.aspx" method="POST">
                        <input type="hidden" name="EDP_LANGUAGE" value="AM">
                        <input type="hidden" name="EDP_REC_ACCOUNT" value="110000439">
                        <input type="hidden" name="EDP_DESCRIPTION" value="{{$check->descriptionAM}}">
                        <input type="hidden" name="EDP_AMOUNT" value="{{round($finelPriceAM * $quantity + 300,-2)}}">
                        <input type="hidden" name="EDP_BILL_NO" value=" ">
                        <input type="submit" style="color: white;background-color: blue;border: none;outline: none;float:right;padding: 8px 14px; " value="submit">
                    </form>
                </div>
            </div>
        </div>
{{--    </form>--}}
    </div>
@endsection
@section("script")
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {


            $('.checkout-input').on('change',function () {
                console.log($(this).val())
                var value = $(this).val()
                if(value==0){
                    $('.cash-form-submit').css('display','none')
                    $('.idram-form-submit').css('display','none')
                    $('.ameria-form-submit').css('display','block')
                }
                if(value==1){
                    $('.cash-form-submit').css('display','none')
                    $('.idram-form-submit').css('display','block')
                    $('.ameria-form-submit').css('display','none')
                }
                if(value==2){
                    $('.cash-form-submit').css('display','block')
                    $('.idram-form-submit').css('display','none')
                    $('.ameria-form-submit').css('display','none')
                }
            })

            $('.phone-number').on('change',function () {
                String.prototype.isNumber = function(){return /^\d+$/.test(this);}
                var input = $(this).val()

                if(input.substr(4,input.length).isNumber() == false){
                    $('.numError').text('Խնդրում ենք մուտքագրեք միայն թվանշաններ')
                }else{
                    $('.numError').text('')
                    if(input.length>12){
                        var newVal =''
                        newVal = input.substr(0,12)
                        if(input.substr(4,1)==0){
                            newVal =  input.substr(0,4) + input.substr(5,12)
                        }
                        $('.phone-number').val(newVal)

                    }
                }

            })
            $('.cash-form-submit').on('click',function () {
                console.log($('.checkout-input:checked').val())
                var type = $('.checkout-input:checked').val()
                var name = $('.nameOfuser').val()
                var surName = $('.surnameOfuser').val()
                var phoneNumber = $('.phone-number').val()
                var userCity = $('.userCity').val()
                var userAddress = $('.userAddress').val()
                var promoCode = $('.promo-code').val()
                var quantity = "<?php echo $quantity; ?>";
                var curse =  "<?php echo $curse; ?>";
                var color =  "<?php echo $color; ?>";
                var size = "<?php echo $size; ?>";
                var id = "<?php echo $check->id; ?>";
               var body = {
                   color:color,
                   quantity:quantity,
                   name:name,
                   surname:surName,
                   phone:phoneNumber,
                   size:size,
                   address:userAddress,
                   city:userCity,
                   payment:type,
                   promoCode:promoCode,
                   "_token": $('#token').val()
               }
                $.ajax({
                    url: '/finish/' + id ,

                    type: "post",
                    dataType: "json",
                    data:body,
                    success: function (data) {

                        if (data.success == true) {
                            $('.flash-message-default').css('display',"flex")
                            $('.mssage-back').empty()
                            $('.mssage-back').append('Շնորհակալություն։Կատարված է')
                            setTimeout(function(){
                                $('.flash-message-default').hide();// or fade, css display however you'd like.
                            }, 2000);
                            setTimeout(function(){
                                window.location.href = '/'
                            }, 2000);
                        }
                        if (data.success == false) {
                            window.location.href = '/0/login/login'
                        }
                    }
                })



            })

        })

    </script>
    <script src="{{URL::asset("js/cart.js") }}"></script>
    <script src="{{URL::asset("js/custom.js") }}"></script>
@endsection


