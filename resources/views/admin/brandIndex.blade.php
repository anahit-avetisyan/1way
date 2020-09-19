@extends("admin.front")
@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ապրանքանիշ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Ապրանքանիշ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
{{--                                <h3 class="card-title">--}}
{{--                                    <a href="{{route("brand.create")}}">--}}
{{--                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Ավելացնել Ապրանք</button>--}}
{{--                                    </a></h3>--}}
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
                                            Անվանում
                                        </th>
                                        <th style="width: 2%" class="text-center">
                                            Գին
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Նկար
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Կատեգորիա
                                        </th>
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
                                                    {{mb_substr($product->titleAM,0,24)}}
                                                </td>
                                                <td class="project-state">
                                                    {{$product->priceAM}}&nbsp;&nbsp;դր
                                                    <br>
                                                    {{$product->priceRU}}&nbsp;&nbsp;руб
                                                    <br>
                                                    {{$product->priceEN}}&nbsp;&nbsp;$
                                                </td>

                                                <td>
                                                    @foreach(json_decode($product->posters) as $poster)
                                                        <img src="{{asset('images/'.$poster)}}" alt="{{$poster}}" width="60">
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <?php $sdvs= \App\Category::where("id",$product->category_id)->get() ?>
                                                    @foreach($sdvs as $fbgdfb)
                                                        {{$fbgdfb->titleAM}}
                                                    @endforeach
                                                </td>
                                                <td >
                                                    <div style="display: flex">
                                                    <form  action="{{route('brand.edit',$product->id)}}" method="get" style="color: black;text-align: left">
                                                        <button class="btn waves-effect waves-light btn-rounded btn-warning" style="text-align: center;border-radius: 15px;outline: none">edit</button>
                                                    </form>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <form action="{{route('brand.destroy',$product->id)}}" method="post" style="color: black;text-align: left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել</button>
                                                    </form>
                                                    </div>
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
