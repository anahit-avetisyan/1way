@extends("admin.front")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ապրանքներ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Ապրանքներ</li>
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
                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Ավելացնել Ապրանք</button>
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
                                        <th style="width: 8%">
                                            Անվանումը
                                        </th>
                                        <th style="width: 2%" class="text-center">
                                            Գինը
                                        </th>

                                        <th style="width: 8%" class="text-center">
                                            Նկարագիր
                                        </th>

                                        <th style="width: 8%" class="text-center">
                                            Նկարը
                                        </th>
{{--                                        <th style="width: 8%" class="text-center">--}}
{{--                                            Կատեգորիան--}}
{{--                                        </th>--}}
                                        <th style="width: 20%">
                                            #
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($products)
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    {{$product->id}}
                                                </td>
                                                <td>
                                                    <a>
                                                        {{--                                    {{dd($product)}}--}}
                                                        {{$product->titleAM}}
                                                    </a>
                                                    <br/>
                                                    <a>
                                                        {{$product->titleRU}}
                                                    </a>
                                                    <br>
                                                    <a>
                                                        {{$product->titleEN}}
                                                    </a>
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
                                                <td >
                                                    <a href="">{{mb_substr($product->descriptionAM, 0,10)}}</a>
                                                    <br>
                                                    <a href="">{{mb_substr($product->descriptionRU, 0, 10)}}</a>
                                                    <br>
                                                    <a href="">{{mb_substr($product->descriptionEN, 0, 10)}}</a>
                                                </td>
                                                <td>
                                                    @foreach(json_decode($product->posters) as $poster)
                                                        <img src="{{asset('images/'.$poster)}}" alt="{{$poster}}" width="60">
                                                    @endforeach
                                                </td>
{{--                                                <td>--}}
{{--                                                    {{$product->category->titleAM}}--}}
{{--                                                </td>--}}
                                                <td style="    padding: inherit;">
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
