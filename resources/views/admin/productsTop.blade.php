@extends("admin.front")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Թոփ Ապրանքներ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Թոփ Ապրանքներ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
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
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="{{route("product.create")}}">
                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Ավելացնել</button>
                                    </a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>

                                    <tr>
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 1%">
                                            id
                                        </th>
                                        <th style="width: 8%">
                                            Անվանումը
                                        </th>
                                        <th style="width: 8%">
                                            Կոդ
                                        </th>
                                        <th style="width: 2%" class="text-center">
                                            Գինը
                                        </th>

                                        {{--                            <th style="width: 8%" class="text-center">--}}
                                        {{--                                Նկարագիր--}}
                                        {{--                            </th>--}}

                                        <th style="width: 8%" class="text-center">
                                            Նկարը
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Ապրանքանիշ (Brand)
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Կատեգորիան
                                        </th>
                                        <th style="width: 20%">
                                            #
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($products)
                                        @foreach($products as $key=>$product)
                                            <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>
                                                    {{$product->id}}
                                                </td>
                                                <td>
                                                    <a>
                                                        {{--                                    {{dd($product)}}--}}
                                                        {{mb_substr($product->titleAM,0,17)}}
                                                    </a>
                                                    <br/>
                                                    <a>
                                                        {{mb_substr($product->titleRU,0,17)}}
                                                    </a>
                                                    <br>
                                                    <a>
                                                        {{mb_substr($product->titleEN,0,17)}}
                                                    </a>
                                                </td>
                                                <td>
                                                    {{$product->code}}
                                                </td>
                                                <td class="project-state">
                                                    {{--                                <span class="badge badge-success">--}}
                                                    {{--                                    @if($product->availabilityAM)--}}
                                                    {{--                                        Առկա է--}}
                                                    {{--                                    @else--}}
                                                    {{--                                        Պատվերով--}}
                                                    {{--                                    @endif--}}
                                                    {{$product->priceAM}}&nbsp;&nbsp;դր
                                                    <br>
                                                    {{$product->priceRU}}&nbsp;&nbsp;руб
                                                    <br>
                                                    {{$product->priceEN}}&nbsp;&nbsp;$
                                                    {{--                                </span>--}}
                                                </td>
                                                {{--                            <td >--}}
                                                {{--                                <a href="">{{mb_substr($product->descriptionAM, 0, 20)}}</a>--}}
                                                {{--                                <br>--}}
                                                {{--                                <a href="">{{mb_substr($product->descriptionRU, 0, 20)}}</a>--}}
                                                {{--                                <br>--}}
                                                {{--                                <a href="">{{mb_substr($product->descriptionEN, 0, 20)}}</a>--}}
                                                {{--                            </td>--}}
                                                <td>
                                                    @php $img = json_decode($product->posters) @endphp
                                                    <img src="{{asset('images/'.$img[0])}}" width="60">
                                                </td>


                                                <td>
                                                    <?php $gdfxhdhd= \App\Brend::where("user_id",$product->brend_id)->get() ?>
                                                    @foreach($gdfxhdhd as $gfgdfd)
                                                        <a href="{{route("brandIndex",["id"=>$product->brend_id])}}">
                                                            {{$gfgdfd->title}}
                                                        </a>
                                                    @endforeach
                                                </td>

                                                <td>
                                                    <?php $sdvs= \App\Category::where("id",$product->category_id)->get() ?>
                                                    @foreach($sdvs as $fbgdfb)
                                                        {{$fbgdfb->titleAM}}
                                                    @endforeach
                                                </td>
                                                <td >
                                                    <form action="{{route('product.destroyTop',$product->id)}}" method="post" style="color: black;text-align: left">
                                                        @csrf
                                                        <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել ԹՈՓ-ից</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
